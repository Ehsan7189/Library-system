<?php
$json_file = 'C:\xampp\htdocs\assingment\database\books.json';
if (file_exists($json_file)) {


    $books_json = json_decode(file_get_contents($json_file));

} else {

    echo 'file not found';

}
;
if (file_exists($json_file)) {
    $commands_json = json_decode(file_get_contents('C:\xampp\htdocs\commands.json'));

} else {
    echo 'file not found';

}

