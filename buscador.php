#!/usr/bin/env php
<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use wernerluiz92\BuscadorDeCursos\Classes\Buscador;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();
$url = 'cursos-online-programacao/php';

$buscador = new Buscador($client, $crawler);

$cursos = $buscador->buscar($url);

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}
