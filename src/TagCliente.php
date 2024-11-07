<?php


namespace Tecnoponto\Omie;


use Tecnoponto\Omie\Connection;

class TagCliente
{
    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * Incluir tag
     *
     * @see https://app.omie.com.br/api/v1/geral/clientetag/#IncluirTags
     * @param $tags
     * @return array
     */
    public function incluir($tags)
    {
        return $this->http->post(

            '/geral/clientetag/',
            $tags,
            'IncluirTags'
        );
    }


    /**
     * Excluir tag
     *
     * @see https://app.omie.com.br/api/v1/geral/clientetag/#ExcluirTags
     * @param $tags
     * @return array
     */
    public function excluir($tags)
    {
        return $this->http->post(

            '/geral/clientetag/',
            $tags,
            'ExcluirTags'
        );
    }

    /**
     * Excluir todas
     *
     * @see https://app.omie.com.br/api/v1/geral/clientetag/#ExcluirTodas
     * @param $codigo_cliente
     * @param $codigo_cliente_integracao
     * @return array
     */
    public function excluir_todas($codigo_cliente = 0, $codigo_cliente_integracao = '')
    {
        return $this->http->post(

            '/geral/clientetag/',
            [
                "nCodCliente" => $codigo_cliente,
                "cCodIntCliente" => $codigo_cliente_integracao
            ],
            'ExcluirTodas'
        );
    }

    /**
     * Listar tags
     *
     * @see https://app.omie.com.br/api/v1/geral/clientetag/#ListarTags
     * @param $codigo_cliente 
     * @param $codigo_cliente_integracao 
     * @return array
     */
    public function listar($codigo_cliente = 0, $codigo_cliente_integracao = '')
    {
        return $this->http->post(

            '/geral/clientetag/',
            [
                "nCodCliente" => $codigo_cliente,
                "cCodIntCliente" => $codigo_cliente_integracao
            ],
            'ListarTags'
        );
    }


}
