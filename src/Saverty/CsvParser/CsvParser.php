<?php
namespace Saverty\CsvParser;

class CsvParser{

  public $path;
  public $file;

  function __construct($path){
    $this->path = $path;
    $this->file = fopen($this->path, 'r');
  }

  public function toArray(){

    $columns = fgetcsv($this->file);
    $data = array();

    while (($line = fgetcsv($this->file)) !== FALSE) {
      $lineArray = array();

      foreach ($line as $key => $value) {
        $lineArray[$columns[$key]] = $value;
      }

      array_push($data, $lineArray);
    }

    return $data;
  }


}


?>
