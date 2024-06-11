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

    /**
     * consultar serviço
     *
     * @see https://app.omie.com.br/api/v1/servicos/servico/#ConsultarCadastroServico
     * @param Array $servico
     * @return array
     */
    public function consultar($servico)
    {
        return $this->http->post(
            '/servicos/servico/',
            $servico,
            'ConsultarCadastroServico'
        );
    }

    /**
     * incluir serviço
     *
     * @see https://app.omie.com.br/api/v1/servicos/servico/#IncluirCadastroServico
     * @param Array $servico
     * @return array
     */
    public function incluir($servico)
    {
        return $this->http->post(
            '/servicos/servico/',
            $servico,
            'IncluirCadastroServico'
        );
    }    

    /**
     * alterar serviço
     *
     * @see https://app.omie.com.br/api/v1/servicos/servico/#AlterarCadastroServico
     * @param Array $servico
     * @return array
     */
    public function alterar($servico)
    {
        return $this->http->post(
            '/servicos/servico/',
            $servico,
            'AlterarCadastroServico'
        );
    }   

}
