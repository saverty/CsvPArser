# csv-parser
Csv parser is used to manipulate a CSV File.


## Examples

### Download csv-parser using Composer

[https://packagist.org/packages/saverty/csv-parser](https://packagist.org/packages/saverty/csv-parser)

```console
foo@bar:~$ composer require saverty/csv-parser
```


### include the package

```php
require __DIR__ . "/../vendor/autoload.php";

use Saverty\CsvParser\CsvParser;
```

### Transform a CSV to an indexed array

```php
$csv = new CsvParser('nlp.csv');
$array = $csv->toArray();
```

### Transform a CSV to a JSON String

```php
$csv = new CsvParser('nlp.csv');
$json = $csv->toJson();
```

### Transform a CSV to an array that contains object

```php
$csv = new CsvParser('nlp.csv');
$object = $csv->toObject();
```

### Get headers of the CSV

```php
$csv = new CsvParser('nlp.csv');
$headers = $csv->getHeaders();
```
