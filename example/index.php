<?php

require __DIR__ . "/../vendor/autoload.php";

use Saverty\CsvParser\CsvParser;

$csv = new CsvParser('nlp.csv');
$csv->toArray();


?>
