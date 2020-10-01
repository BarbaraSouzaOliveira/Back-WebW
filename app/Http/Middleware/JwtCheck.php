<?php

namespace App\Http\Middleware;

use App\Exceptions\WebWorckException;
use App\Models\dev_Loja;
use App\Models\dev_Usuario;
use App\Util\JWTGenerate\Jwt;
use Closure;

class JwtCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {

            $token = $request->header('Authorization');
            if (!$token) throw new WebWorckException('Token não encontrado.');

            $decoded = Jwt::decodificarToken($token);

            $dataLimite = new \DateTime();
            $dataLimite->setTimestamp($decoded->tp);

            if ($dataLimite < new \DateTime()) {
                throw new WebWorckException('Token expirado.');
            }

            if (empty($decoded->data)) {
                throw new WebWorckException('Falha na leitura do token. Parâmetro data não foi encontrado');
            }

            $email = $decoded->data->email;

            $login = dev_Usuario::where('email', $email)->first();

            if (empty($login)) {
                $login = dev_Loja::where('email', $email)->first();
            }

            if (empty($login)) throw new WebWorckException('Usuário não encontrado.');

            $request->offsetSet('email_usuariosessao', $email);

            return $next($request);

        } catch (WebWorckException $e) {
            return response()->json($e->getMessage());
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
