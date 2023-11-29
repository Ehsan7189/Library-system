<?php

namespace App\ListClass;

class Sort
{

    public $books = [];

    public function bookSorter(bool $order = null)
    {
        $array = $this->books;
        usort($array, function ($a, $b) {
            return strtotime($a->publishDate) - strtotime($b->publishDate);
        });
        if ($order === null or $order === true) {

            $this->books = $array;

        } else {

            $this->Library = array_reverse($array);


        }

    }
}