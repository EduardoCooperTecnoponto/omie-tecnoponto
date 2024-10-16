<?php


namespace Tecnoponto\Omie;


use Tecnoponto\Omie\Connection;

class Pix
{
    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }


    /**
     * Listar pix
     *
     * @see https://app.omie.com.br/api/v1/financas/pix/#ListarPix
     * @param $pix
     * @return array
     */
    public function listar($pagina = 1, $qtdRegistros = 50, $dataEmissaoDe = '', $dataEmissaoAte = '', $status = '')
    {
        return $this->http->post(
            '/financas/pix/',
            [
                "nPagina" => $pagina,
                "nRegPorPagina" => $qtdRegistros,
                "dEmissaoDe" => $dataEmissaoDe,
                "dEmissaoAte" => $dataEmissaoAte,
                "cStatus" => $status
            ],
            'ListarPix'
        );
    }


    /**
     * Listar status pix
     *
     * @see https://app.omie.com.br/api/v1/financas/pix/#ListarStatusPix
     * @param $pix
     * @return array
     */
    public function listarStatus($pagina = 1, $qtdRegistros = 50, $dataEmissaoDe = '', $dataEmissaoAte = '', $status = '')
    {
        return $this->http->post(
            '/financas/pix/',
            [
                "nPagina" => $pagina,
                "nRegPorPagina" => $qtdRegistros,
                "dEmissaoDe" => $dataEmissaoDe,
                "dEmissaoAte" => $dataEmissaoAte,
                "cStatus" => $status
            ],
            'ListarStatusPix'
        );
    }    

    /**
     * Gerar Pix
     *
     * @see https://app.omie.com.br/api/v1/financas/pix/#GerarPix
     * @param $pix
     * @return array
     */
    public function gerarPix($codigoIntegracao, $codigoTitulo, $valor, $contaCorrente, $webhookUrl)
    {
        return $this->http->post(
            '/financas/pix/',
            [   'cCodIntPix' => $codigoIntegracao,
                'nCodTitulo' => $codigoTitulo,
                'vValor' => $valor,
                'nIdConta' => $contaCorrente,
                'cUrlNotif' => $webhookUrl
            ],'GerarPix'
        );
    }    

    /**
     * Cancelar Pix
     *
     * @see https://app.omie.com.br/api/v1/financas/pix/#CancelarPix
     * @param $codigoIntegracao
     * @return array
     */
    public function cancelarPix($codigoIntegracao)
    {
        return $this->http->post(
            '/financas/pix/',
            [   'cCodIntPix' => $codigoIntegracao
            ],'CancelarPix'
        );
    }  

     
    /**
     * Cancelar Pix
     *
     * @see https://app.omie.com.br/api/v1/financas/pix/#CancelarPix
     * @param $codigoIntegracao
     * @return array
     */
    public function obterPix($codigoIntegracao = '', $nCodTitulo = '')
    {
        return $this->http->post(
            '/financas/pix/',
            [   'cCodIntPix' => $codigoIntegracao,
                'nCodTitulo' => $nCodTitulo
            ],'ObterPix'
        );
    }      

}
