<?php

namespace Tecnoponto\Omie;

use Tecnoponto\Omie\Connection;

class Cliente
{

    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * Recupera todos os clientes
     *
     * @see https://app.omie.com.br/api/v1/geral/clientes/#ListarClientes
     * @param $cliente Array de filtros
     * @return array
     */
    public function listar($cliente)
    {
        return $this->http->post(
            '/geral/clientes/',
            $cliente,
            'ListarClientes'
        );
    }


    /**
     * Consulta os dados de um cliente
     *
     * @see https://app.omie.com.br/api/v1/geral/clientes/#ConsultarCliente
     * @param $idOmie
     * @param $idInterno
     * @return array
     */
    public function consultar($idOmie = '', $idInterno = '')
    {
        return $this->http->post('/geral/clientes/', [
            'codigo_cliente_omie'       => $idOmie,
            'codigo_cliente_integracao' => $idInterno,
        ], 'ConsultarCliente');
    }

    /**
     * Exclui um cliente da base de dados.
     *
     * @see https://app.omie.com.br/api/v1/geral/clientes/#ExcluirCliente
     * @param $idOmie
     * @param $idInterno
     * @return array
     */
    public function excluir($idOmie = '', $idInterno = '')
    {
        return $this->http->post('/geral/clientes/', [
            'codigo_cliente_omie'       => $idOmie,
            'codigo_cliente_integracao' => $idInterno,
        ], 'ExcluirCliente');
    }


    /**
     * Altera os dados do cliente
     *
     * @see https://app.omie.com.br/api/v1/geral/clientes/#AlterarCliente
     * @param $cliente
     * @return array
     */
    public function alterar($cliente)
    {
        return $this->http->post(
            '/geral/clientes/',
            $cliente,
            'AlterarCliente'
        );
    }

    /**
     * Altera se existir ou inclui um cliente
     *
     * @see https://app.omie.com.br/api/v1/geral/clientes/#UpsertCliente
     * @param $cliente
     * @return array
     */
    public function upsert($cliente)
    {
        return $this->http->post(
            '/geral/clientes/',
            $cliente,
            'UpsertCliente'
        );
    }


    /**
     * Inclui o cliente no Omie
     *
     * @see https://app.omie.com.br/api/v1/geral/clientes/#IncluirCliente
     * @param $cliente
     * @return array
     */
    public function incluir($cliente)
    {
        return $this->http->post(
            '/geral/clientes/',
            $cliente,
            'IncluirCliente'
        );
    }
    

    /**
     * Listar os cadastros de clientes de acordo com o filtro informado
     */
    public function listarClientes($nRegPorPagina = 200, $nPagina = 1, $arrayFiltros = []){
        $requestBody = array_merge([
            'pagina'                => $nPagina,
            'registros_por_pagina'  => $nRegPorPagina,
        ], $arrayFiltros);

        return $this->http->post(
            '/geral/clientes/',
            $requestBody,
            'ListarClientes'
        );
    }


    /**
     * Associar código de integração com cliente
     *
     * @see https://app.omie.com.br/api/v1/geral/clientes/#AssociarCodIntCliente
     * @param $cliente
     * @return array
     */
    public function associarCodigoInterno($cliente){
        return $this->http->post(
            '/geral/clientes/',
            $cliente,
            'AssociarCodIntCliente'
        );
    }    
}
