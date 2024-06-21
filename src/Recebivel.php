<?php

namespace Tecnoponto\Omie;

use Tecnoponto\Omie\Connection;

class Recebivel
{

    public $http;
    protected $recebivel;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * Lista as contas a receber cadastradas.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#ListarContasReceber
     * @param Array $recebivel Array de filtros
     * @return array
     */
    public function listar($recebivel)
    {
        return $this->http->post(
            '/financas/contareceber/',
            $recebivel,
            'ListarContasReceber'
        );
    }


    /**
     * Consulta uma Conta a Receber.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#ConsultarContaReceber
     * @param String $idOmie
     * @param String $idInterno
     * @return array
     */
    public function consultar($idOmie = '', $idInterno = '')
    {
        return $this->http->post('/financas/contareceber/', [

            'codigo_lancamento_omie'        => $idOmie,
            'codigo_lancamento_integracao'  => $idInterno,

        ], 'ConsultarContaReceber');
    }



    /**
     * Altera uma conta a receber.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#AlterarContaReceber
     * @param Array $recebivel
     * @return array
     */
    public function alterar($recebivel)
    {
        return $this->http->post(

            '/financas/contareceber/',
            $recebivel,
            'AlterarContaReceber'
        );
    }

    /**
     * Concilia um recebimento.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#ConciliarRecebimento
     * @param String $idBaixa
     * @param String $idBaixaInterno
     * @return array
     */
    public function conciliar($idBaixa = '', $idBaixaInterno = '')
    {
        return $this->http->post(

            '/financas/contareceber/',
            [
                'codigo_baixa'              => $idBaixa,
                'codigo_baixa_integracao'   => $idBaixaInterno

            ],
            'ConciliarRecebimento'
        );
    }

    /**
     * Desconcilia um recebimento.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#DesconciliarRecebimento
     * @param String $idBaixa
     * @param String $idBaixaInterno
     * @return array
     */
    public function desconciliar($idBaixa = '', $idBaixaInterno = '')
    {
        return $this->http->post(
            '/financas/contareceber/',
            [

                'codigo_baixa'              => $idBaixa,
                'codigo_baixa_integracao'   => $idBaixaInterno

            ],
            'DesconciliarRecebimento'
        );
    }

    /**
     * Exclui uma conta a receber.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#ExcluirContaReceber
     * @param String $idOmie
     * @param String $idInterno
     * @return array
     */
    public function excluir($idOmie = '', $idInterno = '')
    {
        return $this->http->post('/financas/contareceber/', [

            'chave_lancamento'              => $idOmie,
            'codigo_lancamento_integracao'  => $idInterno,

        ], 'ExcluirContaReceber');
    }

    /**
     * Lança um recebimento.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#LancarRecebimento
     * @param Array $recebimento
     * @return array
     */
    public function lancarRecebimento($recebimento)
    {
        return $this->http->post(
            '/financas/contareceber/',
            $recebimento,
            'LancarRecebimento'
        );
    }

    /**
     * Efetua o cancelamento de um recebimento de Contas a Receber.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#CancelarRecebimento
     * @param String $idOmie
     * @param String $idInterno
     * @return array
     */
    public function cancelarRecebimento($idOmie = '', $idInterno = '')
    {
        return $this->http->post('/financas/contareceber/', [

            'codigo_baixa'              => $idOmie,
            'codigo_baixa_integracao'   => $idInterno,

        ], 'CancelarRecebimento');
    }

    /**
     * Inclui uma conta a Receber.
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#IncluirContaReceber
     * @param Array $recebivel
     * @return array
     */
    public function incluir($recebivel)
    {
        return $this->http->post(
            '/financas/contareceber/',
            $recebivel,
            'IncluirContaReceber'
        );
    }
}
