<?php


namespace Tecnoponto\Omie;


use Tecnoponto\Omie\Connection;

class Contrato
{
    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }


    /**
     * Inclui o contrato no Omie
     *
     * @see https://app.omie.com.br/api/v1/servicos/contrato/#IncluirContrato
     * @param Array $contrato
     * @return array
     */
    public function incluir($contrato)
    {
        return $this->http->post(

            '/servicos/contrato/',
            $contrato,
            'IncluirContrato'

        );
    }


    /**
     * excluir item de contrato no Omie
     *
     * @see https://app.omie.com.br/api/v1/servicos/contrato/#ExcluirItem
     * @param Array $contrato
     * @return array
     */
    public function excluirItem($contrato)
    {
        return $this->http->post(

            '/servicos/contrato/',
            $contrato,
            'ExcluirItem'

        );
    }    


    /**
     *  Cancela contrato faturado
     *
     * @see https://app.omie.com.br/api/v1/servicos/contratofat/#CancelarContrato
     * @param Array $contrato
     * @return array
     */
    public function cancelarContrato($contrato)
    {
        return $this->http->post(

            '/servicos/contratofat/',
            $contrato,
            'CancelarContrato'

        );
    }      


    /**
     *  Suspende um contrato 
     *
     * @see https://app.omie.com.br/api/v1/servicos/contratofat/#SuspenderContrato
     * @param Array $contrato
     * @return array
     */
    public function suspenderContrato($contrato)
    {
        return $this->http->post(

            '/servicos/contratofat/',
            $contrato,
            'SuspenderContrato'

        );
    }      
}
