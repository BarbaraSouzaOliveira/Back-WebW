<?php

namespace App\Util\JWTGenerate;


use App\Exceptions\WebWorckException;
use App\Models\dev_Usuario;

class Jwt
{

    public static function gerarToken($login, $timeStemp = 1568034762)
    {

        try {

            if (empty($login)) {
                throw new WebWorckException('Você precisa aidiconar um usuário para gerar o token.');
            }

            $token = array(
                "iss" => "webworck",
                "aud" => "logapkuser",
                "iat" => 1356999524,
                "nbf" => 1357000000,
                "data" => $login,
                "table" => $login->table,
                "tp" => $timeStemp,
            );

            /**
             * IMPORTANTE:
             *
             * Aprenda a pronunciar
             * Você deve especificar algoritmos suportados para seu aplicativo. Veja uma lista de algoritmos compatíveis com especificações
             * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
             */
            $jwt = \Firebase\JWT\JWT::encode($token, getenv('KEY_TOKEN'));
            if (empty($jwt)) throw new \Exception('Erro ao garar o token');

            return $jwt;

        } catch (WebWorckException $e) {
            throw $e;
        } catch (\Exception $e) {
            throw $e;
        }

    }

    public static function decodificarToken($token)
    {
        try {

            $token = $token = str_replace('Bearer ', '', $token);
            if (empty($token)) throw new WebWorckException('Token não encontrado');
            return \Firebase\JWT\JWT::decode($token, getenv('KEY_TOKEN'), array('HS256'));

        } catch (WebWorckException $e) {
            throw $e;
        } catch (\Exception $e) {
            dd($e->getMessage());
            throw $e;
        }
    }

}
