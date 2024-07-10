<?php

namespace Tecnoponto\Omie;

use Tecnoponto\Omie\Connection;

class Conta
{

    public $http;
    protected $cliente;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * Recupera todas as contas
     *
     * @see https://app.omie.com.br/api/v1/geral/contacorrente/#ListarContasCorrentes
     * @param $nRegPorPagina Número de registro por página
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
            '/geral/contacorrente/',
            $requestBody,
            'ListarContasCorrentes'
        );
    }


    /**
     * Consulta os dados de uma conta
     *
     * @see https://app.omie.com.br/api/v1/geral/contacorrente/#ConsultarContaCorrente
     * @param $idOmie
     * @param $idInterno
     * @return array
     */
    public function consultar($idOmie = '', $idInterno = '')
    {
        return $this->http->post('/geral/contacorrente/', [

            'nCodCC'    => $idOmie,
            'cCodCCInt' => $idInterno

        ], 'ConsultarContaCorrente');
    }

    /**
     * Exclui uma conta da base de dados.
     *
     * @see https://app.omie.com.br/api/v1/geral/contacorrente/#ExcluirContaCorrente
     * @param $idOmie
     * @param $idInterno
     * @return array
     */
    public function excluir($idOmie = '', $idInterno = '')
    {
        return $this->http->post('/geral/contacorrente/', [

            'nCodCC'    => $idOmie,
            'cCodCCInt' => $idInterno

        ], 'ExcluirContaCorrente');
    }


    /**
     * Altera os dados da conta
     *
     * @see https://app.omie.com.br/api/v1/geral/contacorrente/#AlterarContaCorrente
     * @param $conta
     * @return array
     */
    public function alterar($conta)
    {
        return $this->http->post(

            '/geral/contacorrente/',
            $conta,
            'AlterarContaCorrente'
        );
    }

    /**
     * Altera se existir ou inclui uma conta
     *
     * @see https://app.omie.com.br/api/v1/geral/contacorrente/#UpsertContaCorrente
     * @param $conta
     * @return array
     */
    public function upsert($conta)
    {
        return $this->http->post(

            '/geral/contacorrente/',
            $conta,
            'UpsertContaCorrente'
        );
    }


    /**
     * Inclui o cliente no Omie
     *
     * @see https://app.omie.com.br/api/v1/geral/contacorrente/#IncluirContaCorrente
     * @param $conta
     * @return array
     */
    public function incluir($conta)
    {
        return $this->http->post(

            '/geral/contacorrente/',
            $conta,
            'IncluirContaCorrente'
        );
    }
}
