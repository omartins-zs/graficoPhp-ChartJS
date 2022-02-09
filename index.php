<?php
$nome = "André";
$response = file_get_contents("https://servicodados.ibge.gov.br/api/v2/censos/nomes/$nome");
// Return em JSON convertido em array associativo
$response = json_decode($response, true);
var_dump($response);