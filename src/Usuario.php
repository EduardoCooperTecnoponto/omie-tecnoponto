<?php


namespace Tecnoponto\Omie;


use Tecnoponto\Omie\Connection;

class Usuario
{
    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * obter vendedor
     *
     * @see https://app.omie.com.br/api/v1/crm/usuarios/#ListarUsuarios
     * @param $vendedor
     * @return array
     */
    public function listar($usuario)
    {
        return $this->http->post(

            '/crm/usuarios/',
            $usuario,
            'ListarUsuarios'
        );
    }


}
