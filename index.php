<?php
require './vendor/autoload.php';

use App\ListClass;
use App\SerchClass;
use App\AddClass;
use App\DeletClass;
use App\UpdateClass;

$json_file = 'C:\xampp\htdocs\assingment\database\books.json';
if (file_exists($json_file)) {


    $books_json = json_decode(file_get_contents($json_file));

} else {

    echo 'file not found';

};
if (file_exists($json_file)) {
    $commands_json = json_decode(file_get_contents('C:\xampp\htdocs\commands.json'));

} else {
    echo 'file not found';

}


if($commands_json->command_name === 'List')
{

    $obj = new ListClass();
    $obj->books = $books_json->books;
    $obj->bookSorter();

    $obj->pagination(4);
    $obj->filter($commands_json->parameters);
    $obj->pageShow();

}
elseif($commands_json->command_name === 'List')
{

    

}
elseif($commands_json->command_name === 'List')
{



}
elseif($commands_json->command_name === 'List')
{



}
elseif($commands_json->command_name === 'List')
{



}









