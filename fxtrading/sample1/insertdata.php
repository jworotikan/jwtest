<?php
require 'conndb.php';
	/*
    * This library is provided without warranty under the MIT license
    * Created by Jacob Davis <jacob@1forge.com>
    */

    require_once __DIR__ . '/vendor/autoload.php';

    use OneForge\ForexQuotes\ForexDataClient;

    $client         = new ForexDataClient('0ty36ynEOZc1ZFwvYpH7LEneFJx4keCZ');
	$symbols        = $client->getSymbols();

foreach ($symbols as $symbl) {
	$sql = "INSERT INTO dbsymbols (symbols) VALUES ('$symbl')";
    $insertsql = $db_conn->query($sql);
}

?>