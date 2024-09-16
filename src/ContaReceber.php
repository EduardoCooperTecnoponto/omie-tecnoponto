<?php

namespace Tecnoponto\Omie;

use Tecnoponto\Omie\Connection;

class ContaReceber
{

    public $http;
    protected $cliente;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * Lista as contas a receber
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#ListarContasReceber
     * @param $nRegPorPagina Número de registros por página
     * @param $nPagina Número da página
     * @param $arrayFiltros Array de filtros
     * @return array
     */
    public function listar($nRegPorPagina = 200, $nPagina = 1, $arrayFiltros = [])
    {
        $requestBody = array_merge([
            'pagina'                => $nPagina,
            'registros_por_pagina'  => $nRegPorPagina,
        ], $arrayFiltros);

        return $this->http->post(
            '/financas/contareceber/',
            $requestBody,
            'ListarContasReceber'
        );
    }


    /**
     * Consulta os dados de uma conta a receber
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#ConsultarContaReceber
     * @param $idOmie
     * @param $idInterno
     * @return array
     */
    public function consultar($idOmie = '', $idInterno = '')
    {
        return $this->http->post('/financas/contareceber/', [

            'codigo_lancamento_omie'    => $idOmie,
            'codigo_lancamento_integracao' => $idInterno

        ], 'ConsultarContaReceber');
    }

    /**
     * Exclui uma conta a receber.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#ExcluirContaReceber
     * @param $chaveLancamento
     * @return array
     */
    public function excluir($chaveLancamento = '')
    {
        return $this->http->post('/financas/contareceber/', [

            'chave_lancamento'    => $chaveLancamento
            

        ], 'ExcluirContaReceber');
    }


    /**
     * Altera os dados da conta a receber
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#AlterarContaReceber
     * @param $conta
     * @return array
     */
    public function alterar($conta)
    {
        return $this->http->post(

            '/financas/contareceber/',
            $conta,
            'AlterarContaReceber'
        );
    }

    /**
     * Altera se existir ou inclui uma conta a receber
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#UpsertContaReceber
     * @param $conta
     * @return array
     */
    public function upsert($conta)
    {
        return $this->http->post(

            '/financas/contareceber/',
            $conta,
            'UpsertContaReceber'
        );
    }


    /**
     * Inclui conta a receber
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#IncluirContaReceber
     * @param $conta
     * @return array
     */
    public function incluir($conta)
    {
        return $this->http->post(

            '/financas/contareceber/',
            $conta,
            'IncluirContaReceber'
        );
    }
}
