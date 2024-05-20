<?php

namespace Tecnoponto\Omie;

use Tecnoponto\Omie\Categoria;
use Tecnoponto\Omie\Cliente;
use Tecnoponto\Omie\Conta;
use Tecnoponto\Omie\Departamento;
use Tecnoponto\Omie\Extrato;
use Tecnoponto\Omie\Movimento;
use Tecnoponto\Omie\OrdemServico;
use Tecnoponto\Omie\Pagavel;
use Tecnoponto\Omie\Recebivel;

class Omie
{
    public function categoria($app_key, $app_secret)
    {
        return new Categoria($app_key, $app_secret);
    }

    public function cliente($app_key, $app_secret)
    {
        return new Cliente($app_key, $app_secret);
    }

    public function conta($app_key, $app_secret)
    {
        return new Conta($app_key, $app_secret);
    }

    public function departamento($app_key, $app_secret)
    {
        return new Departamento($app_key, $app_secret);
    }

    public function extrato($app_key, $app_secret)
    {
        return new Extrato($app_key, $app_secret);
    }

    public function movimento($app_key, $app_secret)
    {
        return new Movimento($app_key, $app_secret);
    }

    public function ordemServico($app_key, $app_secret)
    {
        return new OrdemServico($app_key, $app_secret);
    }

    public function pagavel($app_key, $app_secret)
    {
        return new Pagavel($app_key, $app_secret);
    }

    public function recebivel($app_key, $app_secret)
    {
        return new Recebivel($app_key, $app_secret);
    }
}
