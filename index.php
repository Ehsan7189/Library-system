<?php
require './vendor/autoload.php';

use App\ListClass\Sort;

$json_file = 'books.json';
if (file_exists($json_file)) {


    $books_json = json_decode(file_get_contents($json_file));

} else {

    echo 'file not found';

};

var_dump($books_json);


echo 'e';


