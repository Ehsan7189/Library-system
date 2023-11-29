<?php

namespace App\ListClass;

class Pagination
{

    public $Library;

    public function pagination($chunk)
    {

        $this->Library = array_chunk($this->Library, $chunk);


    }

    public function pageShow(int $page_number)
    {

        var_dump($this->Library [$page_number]);

    }


}
/*

瘠牡渠睥版晥㴠氠湩

 */