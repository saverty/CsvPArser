<?php

require __DIR__ . "/../vendor/autoload.php";

use Saverty\CsvParser\CsvParser;

$csv = new CsvParser('nlp2.csv');
var_dump($csv->toArrayByColumn());


?>
