<?php


namespace Tecnoponto\Omie;


use Tecnoponto\Omie\Connection;

class Pedido
{
    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }


    /**
     * Inclui o pedido na Omie
     *
     * @see https://app.omie.com.br/api/v1/produtos/pedido/#IncluirPedido
     * @param Array $pedido
     * @return array
     */
    public function incluir($pedido)
    {
        return $this->http->post(
            '/produtos/pedido/',
            $pedido,
            'IncluirPedido'
        );
    }


    /**
     * Obtem o status do pedido na Omie
     *
     * @see https://app.omie.com.br/api/v1/produtos/pedido/#StatusPedido
     * @param Array $pedido
     * @return array
     */
    public function status($pedido)
    {
        return $this->http->post(
            '/produtos/pedido/',
            $pedido,
            'StatusPedido'
        );
    }    


    /**
     * Troca a etapa do pedido na Omie
     *
     * @see https://app.omie.com.br/api/v1/produtos/pedido/#TrocarEtapaPedido
     * @param Array $pedido
     * @return array
     */
    public function trocarEtapa($pedido)
    {
        return $this->http->post(
            '/produtos/pedido/',
            $pedido,
            'TrocarEtapaPedido'
        );
    }       


    /**
     * Consulta o pedido na omie
     *
     * @see https://app.omie.com.br/api/v1/produtos/pedido/#ConsultarPedido
     * @param Array $pedido
     * @return array
     */
    public function consultar($codigo_pedido)
    {
        return $this->http->post(
            '/produtos/pedido/',
            $codigo_pedido,
            'ConsultarPedido'
        );
    }     

    /**
     * fatura um pedido na omie
     *
     * @see https://app.omie.com.br/api/v1/produtos/pedidovendafat/#FaturarPedidoVenda
     * @param Array $pedido
     * @return array
     */
    public function faturar($pedido)
    {
        return $this->http->post(
            '/produtos/pedidovendafat/',
            $pedido,
            'FaturarPedidoVenda'
        );
    }     
    
    /**
     * obtem pedidos de venda a serem faturados
     *
     * @see https://app.omie.com.br/api/v1/produtos/pedidovendafat/#ObterPedidosVenda
     * @param Array $pedido
     * @return array
     */
    public function listarPorEtapa($etapa)
    {
        return $this->http->post(
            '/produtos/pedidovendafat/',
            $etapa,
            'ObterPedidosVenda'
        );
    }


    /**
     * exclui um pedido de venda
     *
     * @see https://app.omie.com.br/api/v1/produtos/pedido/#ExcluirPedido
     * @param Array $pedido
     * @return array
     */
    public function excluir($pedido)
    {
        return $this->http->post(
            '/produtos/pedido/',
            $pedido,
            'ExcluirPedido'
        );
    }        
}
