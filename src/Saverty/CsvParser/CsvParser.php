<?php
namespace Saverty\CsvParser;

/**
 * Csv parse is used to parse a csv file
 */
class CsvParser{

  //Path of the file
  public $path;

  //File
  public $file;

  /**
   * Constructor
   * Constructor of the Object
   * @param String $path Path of the csv file
   */

  function __construct($path){
    $this->path = $path;
    $this->file = fopen($this->path, 'r');
  }


  /**
   * Transform csv file to an indexed array
   * @return Array Csv file in array
   */

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

  /**
   * Transform CSV file in json string
   * @return JSON CSV file in json
   */

  public function toJson(){
    return json_encode($this->toArray(), true);
  }

  /**
   * Transform CSV file to an array where each lines are object
   * @return Array csv file to object
   */

  public function toObject(){
    $data = array();

    foreach($this->toArray() as $item){
      array_push($data, (object)$item);
    }

    return $data;
  }

  /**
   * Get header of the csv file
   * @return Array Contains headers of the csv
   */
  public function getHeaders(){
      return fgetcsv($this->file);
  }
}


?>
