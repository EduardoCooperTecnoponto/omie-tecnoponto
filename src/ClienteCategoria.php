<?php

namespace Tecnoponto\Omie;

use Tecnoponto\Omie\Connection;

class ClienteCategoria
{

    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * Consulta as características de um cliente
     *
     * @see https://app.omie.com.br/api/v1/geral/clientescaract/#ConsultarCaractCliente
     * @param $idOmie
     * @param $idIntegracao
     * @return array
     */
    public function consultar($idOmie = '', $idIntegracao = '')
    {
        return $this->http->post('/geral/clientescaract/', [
            'codigo_cliente_omie'       => $idOmie,
            'codigo_cliente_integracao' => $idIntegracao,
        ], 'ConsultarCaractCliente');
    }

    /**
     * Exclui característica de cliente
     *
     * @see https://app.omie.com.br/api/v1/geral/clientescaract/#ExcluirCaractCliente
     * @param $idOmie
     * @param $idIntegracao
     * @param $campo
     * @return array
     */
    public function excluir($idOmie = '', $idIntegracao = '', $campo = '')
    {
        return $this->http->post('/geral/clientescaract/', [
            'codigo_cliente_omie'       => $idOmie,
            'codigo_cliente_integracao' => $idIntegracao,
            'campo'                     => $campo
        ], 'ExcluirCaractCliente');
    }


    /**
     * Altera característica do cliente
     *
     * @see https://app.omie.com.br/api/v1/geral/clientescaract/#AlterarCaractCliente
     * @param $idOmie
     * @param $idIntegracao
     * @param $campo
     * @param $conteudo
     * @return array
     */
    public function alterar($idOmie = '', $idIntegracao = '', $campo = '', $conteudo = '')
    {
        return $this->http->post('/geral/clientescaract/', [
            'codigo_cliente_omie'       => $idOmie,
            'codigo_cliente_integracao' => $idIntegracao,
            'campo'                     => $campo,
            'conteudo'                  => $conteudo
        ], 'AlterarCaractCliente');
    }

    /**
     * Incluir característica de cliente
     *
     * @see https://app.omie.com.br/api/v1/geral/clientescaract/#IncluirCaractCliente
     * @param $idOmie
     * @param $idIntegracao
     * @param $campo
     * @param $conteudo
     * @return array
     */
    public function incluir($idOmie = '', $idIntegracao = '', $campo = '', $conteudo = '')
    {
        return $this->http->post('/geral/clientescaract/', [
            'codigo_cliente_omie'       => $idOmie,
            'codigo_cliente_integracao' => $idIntegracao,
            'campo'                     => $campo,
            'conteudo'                  => $conteudo            
        ], 'IncluirCaractCliente');
    }
 
}
