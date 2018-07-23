<?php

    /*
    * This library is provided without warranty under the MIT license
    * Created by Jacob Davis <jacob@1forge.com>
    */

    require_once __DIR__ . '/vendor/autoload.php';

    use OneForge\ForexQuotes\ForexDataClient;

    $client         = new ForexDataClient('0ty36ynEOZc1ZFwvYpH7LEneFJx4keCZ');
    $quotes         = $client->getQuotes(['AUDUSD',
                                          'GBPJPY','EURUSD']);
    $symbols        = $client->getSymbols();
    $conversion     = $client->convert('EUR', 'USD', 100);
    $quota          = $client->quota();
    $market_is_open = $client->marketIsOpen();

    print_r($quotes);
    echo "<br>";
    echo "<br>";
    print_r($symbols);
    echo "<br>";
    echo "<br>";
    print_r($conversion);
    echo "<br>";
    echo "<br>";
    print_r($quota);

    if ($market_is_open)
    {
        echo 'Market is open!';
    }
