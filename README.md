# Omie Laravel

Pacote de integração com [https://omie.com.br/](https://omie.com.br/)

## Instalando

Instale com [composer](https://getcomposer.org/):
```bash
composer require tecnoponto/omie-tecnoponto
```

## Forkado do projeto bee-delivery

[github] (https://github.com/bee-delivery/omie)

## Como utilizar?

[Documentação API Omie](https://developer.omie.com.br/)

### Ex.:

    $payload['codigo_cliente_integracao'] = $omieId;
    $payload['email'] = $email->valor;
    $payload['razao_social'] = substr($cliente->razao_social, 0, 60);
    $payload['nome_fantasia'] = substr($cliente->nome_fantasia, 0, 100);
    $payload['cnpj_cpf'] = $cliente->cnpj;
    $payload['telefone1_ddd'] = substr(preg_replace('/[^0-9]/', '', Masks::unmaskTelefone($telefone1->valor)), 2, 2);
    $payload['telefone1_numero'] = substr(preg_replace('/[^0-9]/', '', Masks::unmaskTelefone($telefone1->valor)), 4, 9);
    $payload['telefone2_ddd'] = substr(preg_replace('/[^0-9]/', '', Masks::unmaskTelefone($telefone2->valor)), 2, 2);
    $payload['telefone2_numero'] = substr(preg_replace('/[^0-9]/', '', Masks::unmaskTelefone($telefone2->valor)), 4, 9);
    $payload['contato'] = substr($email->contato, 0, 100);
    $payload['optante_simples_nacional'] = $cliente->simples === true ? 'S' : 'N';
    $payload['recomendacoes']['email_fatura'] = $email->valor;
    $payload['recomendacoes']['gerar_boletos'] = 'S';
    
    // endereço do cliente
    $payload['endereco'] = substr($endereco->logradouro, 0, 60);
    $payload['endereco_numero'] = substr($endereco->numero, 0, 10);
    $payload['complemento'] = substr($endereco->complemento, 0, 60);
    $payload['bairro'] = substr($endereco->bairro, 0, 60);
    $payload['estado'] = $endereco->uf;
    $payload['cidade'] = substr($endereco->cidade, 0, 40);
    $payload['cep'] = $endereco->cep;

    $clienteOmie = new OmieCliente(env('OMIE_APP_KEY'), env('OMIE_APP_SECRET'));
    $result = $clienteOmie->incluir($payload);
    $codigo_cliente_omie = $result['response']->codigo_cliente_omie;


## Licença

GNU General Public License v3
