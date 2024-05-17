<?php


namespace BeeDelivery\Omie;


use BeeDelivery\Omie\Connection;

class Vendedor
{
    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * obter vendedor
     *
     * @see https://app.omie.com.br/api/v1/geral/vendedores/
     * @param $vendedor
     * @return array
     */
    public function listar($vendedor)
    {
        return $this->http->post(

            '/geral/vendedores/',
            $vendedor,
            'ListarVendedores'
        );
    }


}
