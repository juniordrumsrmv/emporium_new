---
title: API Reference

language_tabs:
- bash
- javascript
- php

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Criado por Emporium Devs</a>
---
<!-- START_INFO -->
# Info

Bem vindo a documentação do Emporium API
[Baixe o Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Tickets

Serviços para informações de vendas

<!-- START_e503e0e2b2931a146fcd5e2c452efd47 -->
## Busca de cupons por loja e data

> Example request:

```bash
curl -X POST "http://localhost/empws/ticket/date" \
    -H "Content-Type: application/json" \
    -d '{"empresa":"impedit","dataMovimento":"harum","loja":11}'

```
```javascript
const url = new URL("http://localhost/empws/ticket/date");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "empresa": "impedit",
    "dataMovimento": "harum",
    "loja": 11
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```
```php

$client = new \GuzzleHttp\Client();
$response = $client->post("empws/ticket/date", [
    'headers' => [
            "Content-Type" => "application/json",
        ],
    'json' => [
            "empresa" => "impedit",
            "dataMovimento" => "harum",
            "loja" => "11",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "id": 4,
    "name": "Jessica Jones",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`POST empws/ticket/date`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    empresa | string |  required  | Nome da empresa
    dataMovimento | date |  required  | Data fiscal
    loja | integer |  required  | Loja

<!-- END_e503e0e2b2931a146fcd5e2c452efd47 -->


