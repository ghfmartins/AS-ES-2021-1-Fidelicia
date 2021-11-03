<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Realiza o tratamento das exceções ocorridas dentro do servidor, retornando a mensagem e o código do erro
     *
     * @param \Exception $e
     * @return \Illuminate\Http\JsonResponse
     */
    protected static function threadException(\Exception $e): \Illuminate\Http\JsonResponse
    {
        return response()->json(
            $e->getMessage(),
            $e->getCode() ?? 500
        );
    }

    /**
     * Retorna o token de acesso da sessão do usuário
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public static function _token(): \Illuminate\Http\JsonResponse
    {
        return response()->json(session('_token'));
    }
}
