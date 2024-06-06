<?php


namespace Tecnoponto\Omie;


use Tecnoponto\Omie\Connection;

class Servico
{
    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * Listar serviços
     *
     * @see https://app.omie.com.br/api/v1/servicos/servico/#ListarCadastroServico
     * @param Array $servico
     * @return array
     */
    public function listar($servico)
    {
        return $this->http->post(
            '/servicos/servico/',
            $servico,
            'ListarCadastroServico'
        );
    }

}
