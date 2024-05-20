<?php


namespace Tecnoponto\Omie;


use Tecnoponto\Omie\Connection;

class Contrato
{
    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }


    /**
     * Inclui o contrato no Omie
     *
     * @see https://app.omie.com.br/api/v1/servicos/contrato/#IncluirContrato
     * @param Array $contrato
     * @return json
     */
    public function incluir($contrato)
    {
        return $this->http->post(

            '/servicos/contrato/',
            $contrato,
            'IncluirContrato'

        );
    }
}
