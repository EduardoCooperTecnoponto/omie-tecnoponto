<?php


namespace Tecnoponto\Omie;


use Tecnoponto\Omie\Connection;

class Faturamento
{
    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * gerar boleto
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceberboleto/#GerarBoleto
     * @param $pedido
     * @return array
     */
    public function gerarBoleto($pedido)
    {
        return $this->http->post(

            '/financas/contareceberboleto/',
            $pedido,
            'GerarBoleto'
        );
    }


    /**
     * obterboleto de conta a receber
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceberboleto/#ObterBoleto
     * @param $conta_receber
     * @return array
     */
    public function obterBoletoContaReceber($conta_receber)
    {
        return $this->http->post(

            '/financas/contareceberboleto/',
            $conta_receber,
            'ObterBoleto'
        );
    }


    /**
     * gerar boleto de conta a receber
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceberboleto/#GerarBoleto
     * @param $conta_receber
     * @return array
     */
    public function gerarBoletoContaReceber($conta_receber)
    {
        return $this->http->post(

            '/financas/contareceberboleto/',
            $conta_receber,
            'ObterBoleto'
        );
    }    


    /**
     * cancelar um boleto de conta a receber
     *
     * @see https://app.omie.com.br/api/v1/financas/contareceberboleto/#CancelarBoleto
     * @param $conta_receber
     * @return array
     */
    public function cancelarBoletoContaReceber($conta_receber)
    {
        return $this->http->post(

            '/financas/contareceberboleto/',
            $conta_receber,
            'CancelarBoleto'
        );
    }       

}
