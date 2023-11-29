<?php

namespace App\ListClass;

class Filter
{
    public $filtered;

    public function filtering(array $books, $parmetr)
    {

        foreach ($books as $book )
        {

            array_push($this->filtered,$book->$parmetr);

        }

    }

}