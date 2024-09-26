<?php

namespace Tecnoponto\Omie;

use Tecnoponto\Omie\Connection;

class CenarioFiscal
{

    public $http;
    protected $cliente;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * Lista os cenários fiscais
     *
     * @see https://app.omie.com.br/api/v1/geral/cenarios/#ListarCenarios
     * @param $nRegPorPagina Número de registros por página
     * @param $nPagina Número da página
     * @return array
     */
    public function listar($nRegPorPagina = 200, $nPagina = 1)
    {
        return $this->http->post('/geral/cenarios/', [

            'nPagina' => $nPagina,
            'nRegPorPagina' => $nRegPorPagina,

        ],'ListarCenarios');
    }


    /**
     * Consulta os dados de uma conta a receber
     *
     * @see https://app.omie.com.br/api/v1/geral/cenarios/#ListarImpostosCenario
     * @param $codigoClienteIntegracao - codigo de integração do cliente
     * @param $consumoFinal - indicação se a operação é uma venda para consumo final
     * @param $codigoProdutoIntegracao - código de integração do produto
     * @param $codigoCenario - código do cenário de impostos
     * @return array
     */
    public function listarImpostosCenario($codigoClienteIntegracao = '', $consumoFinal = 'N', $codigoProdutoIntegracao = '', $codigoCenario = '')
    {
        return $this->http->post('/geral/cenarios/', [

            'codigo_cliente_integracao' => $codigoClienteIntegracao,
            'consumo_final' => $consumoFinal,
            'codigo_produto_integracao' => $codigoProdutoIntegracao,
            'codigo_cenario' => $codigoCenario

        ], 'ListarImpostosCenario');
    }
}
