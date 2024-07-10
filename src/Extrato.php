<?php

namespace Tecnoponto\Omie;

use Tecnoponto\Omie\Connection;

class Extrato
{
    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * Lista os extratos da conta corrente.
     *
     * @see https://app.omie.com.br/api/v1/financas/extrato/#ListarExtrato
     * @param $nCodCC
     * @param $dPeriodoInicial
     * @param $dPeriodoFinal
     * @param $cCodIntCC
     * @return array
     */
    public function listar($nCodCC, $dPeriodoInicial, $dPeriodoFinal, $cCodIntCC = '')
    {
        $requestBody = [
            'nCodCC' => $nCodCC,
            'cCodIntCC' => $cCodIntCC,
            'dPeriodoInicial' => $dPeriodoInicial,
            'dPeriodoFinal' => $dPeriodoFinal
        ];

        return $this->http->post(
            '/financas/extrato/',
            $requestBody,
            'ListarExtrato'
        );
    }
}
