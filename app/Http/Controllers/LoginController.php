<?php

namespace App\Http\Controllers;

use App\Exceptions\WebWorckException;
use App\Models\dev_Loja;
use App\Models\dev_Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        try {

            if (empty($request->input('email'))) {
                throw new WebWorckException('E-mail de usuário é obrigatório.');
            }

            if (empty($request->input('senha'))) {
                throw new WebWorckException('Senha do usuário é obrigatória.');
            }

            $login = dev_Usuario::select("id_usuario","email")->where('senha', $request->input('senha'))
                ->where('email', $request->input('email'))->first();

            if (empty($login)) {
                $login = dev_Loja::select("id_loja","email")->where('senha', $request->input('senha'))
                    ->where('email', $request->input('email'))->first();
            }

            if (empty($login)) {
                throw new WebWorckException('Você não esta cadastrado ou seu usuário e senha está incorretos.');
            }

            $dataToken = new \DateTime();
            $dataToken->add(new \DateInterval('P1D'));

            $jwt = \App\Util\JWTGenerate\Jwt::gerarToken($login, $dataToken->getTimestamp());

            $response = [
                'key_token' => $jwt,
                'nome' => empty($login->nome) ? $login->nome_fantasia : $login->nome,
            ];

            return $response;

        } catch (WebWorckException $e) {
            return response()->json($e->getMessage());
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }

    }

}
