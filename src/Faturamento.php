<?php


namespace Tecnoponto\Omie;


use Tecnoponto\Omie\Connection;

class Faturamento
{
    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * gerar boleto
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceberboleto/#GerarBoleto
     * @param $vendedor
     * @return array
     */
    public function gerarBoleto($pedido)
    {
        return $this->http->post(

            '/financas/contareceberboleto/',
            $pedido,
            'GerarBoleto'
        );
    }


}
