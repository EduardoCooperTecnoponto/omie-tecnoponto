<?php


namespace Tecnoponto\Omie;


use Tecnoponto\Omie\Connection;

class Produto
{
    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }


    /**
     * Listar produtos
     *
     * @see https://app.omie.com.br/api/v1/geral/produtos/#ListarProdutos
     * @param Array $produto
     * @return json
     */
    public function listar($produto)
    {
        return $this->http->post(
            '/geral/produtos/',
            $produto,
            'ListarProdutos'
        );
    }


    /**
     * Consultar produtos
     *
     * @see https://app.omie.com.br/api/v1/geral/produtos/#ConsultarProduto
     * @param Array $produto
     * @return json
     */
    public function consultar($produto)
    {
        return $this->http->post(
            '/geral/produtos/',
            $produto,
            'ConsultarProduto'
        );
    }    
  
}
