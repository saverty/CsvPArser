<?php

require __DIR__ . "/../vendor/autoload.php";

use Saverty\CsvParser\CsvParser;

$csv = new CsvParser('nlp.csv');
$array = $csv->toArray();

var_dump($array);

?>
