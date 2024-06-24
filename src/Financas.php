<?php

namespace Tecnoponto\Omie;


use Tecnoponto\Omie\Connection;

class Financas
{

    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    
    /**
     * pesquisa por titulos
     *
     * @see https://app.omie.com.br/api/v1/financas/pesquisartitulos/#PesquisarLancamentos
     * @param Array $titulo
     * @return array
     */    
    public function pesquisarTitulos($titulo)
    {
        return $this->http->post(

            '/financas/pesquisartitulos/',
            $titulo,
            'PesquisarLancamentos'
        );
    } 


    /**
     * pesquisa por titulos
     *
     * @see https://app.omie.com.br/api/v1/financas/pesquisartitulos/#ObterURLBoleto
     * @param Array $titulo
     * @return array
     */    
    public function obterUrlBoleto($titulo)
    {
        return $this->http->post(

            '/financas/pesquisartitulos/',
            $titulo,
            'ObterURLBoleto'
        );
    }     


    /**
     * cancelar conta a receber
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceber/#CancelarContaReceber
     * @param Array $conta_receber
     * @return array
     */    
    public function cancelarContaReceber($conta_receber)
    {
        return $this->http->post(

            '/financas/contareceber/',
            $conta_receber,
            'CancelarContaReceber'
        );
    } 
}
