<?php

namespace Tecnoponto\Omie;

use Tecnoponto\Omie\Connection;

class Departamento
{

    public $http;

    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->http = new Connection($apiKey, $apiSecret);
    }

    /**
     * Lista os departamentos cadastrados.
     *
     * @see https://app.omie.com.br/api/v1/geral/departamentos/#ListarDepartamentos
     * @param $pagina, $registros_por_pagina
     * @param $apenas_importado, S/N
     * @return array
     */
    public function listar($pagina = 1, $registros_por_pagina = 50, $apenas_importado_api = 'N')
    {
        return $this->http->post('/geral/departamentos/', [

            'pagina'                => $pagina,
            'registros_por_pagina'  => $registros_por_pagina,
            'apenas_importado_api'  => $apenas_importado_api,

        ], 'ListarDepartamentos');
    }
}
