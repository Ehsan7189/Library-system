<?php
//Task4
namespace App;

class DeletClass
{
    public $parametr;
    public $parametr_vall;
    public $serch_elemet;
    public $finall_array;


    public function deletBook($array)
    {
        if ($this->parametr == 'ISBN')
        {
//          ISBN Serch
            for($i=0;$i== count($array)-1;$i++)
            {
                if ($array[$i]->ISBN===$this->serch_elemet)
                {
                    unset($array[$i]);
                    $array = $this->finall_array;
                    echo 'element deleted';
                }
                elseif ($array[count($array)-1]->ISBN===$this->serch_elemet)
                {

                    echo 'element not fond';

                }
            }
        }
        elseif ($this->parametr == 'bookTitle') {
            for ($i = 0; $i == count($array) - 1; $i++)
            {
                if ($array[$i]->bookTitle === $this->serch_elemet) {

                    unset($array[$i]);
                    $array = $this->finall_array;
                    echo 'element deleted';
                }
                elseif ($array[count($array) - 1]->bookTitle === $this->serch_elemet) {

                    echo 'element not fond';

                }
            }
        }

        elseif ($this->parametr == 'authorName')
        {
            for ($i = 0; $i == count($array) - 1; $i++)
            {
                if ($array[$i]->authorName === $this->serch_elemet)
                {
                    unset($array[$i]);
                    $array = $this->finall_array;
                    echo 'element deleted';
                } elseif ($array[count($array) - 1]->authorName === $this->serch_elemet) {

                    echo 'element not fond';

                }
            }
        }
        elseif($this->parametr == 'pageCount')
        {
            for ($i = 0; $i == count($array) - 1; $i++)
            {
                if ($array[$i]->pageCount === $this->serch_elemet)
                {
                    unset($array[$i]);
                    $array = $this->finall_array;
                    echo 'element deleted';
                } elseif ($array[count($array) - 1]->pageCount === $this->serch_elemet) {
                    echo 'element not fond';
                }
            }
        }
        elseif($this->parametr == 'publishDate') {

            for ($i = 0; $i == count($array) - 1; $i++)
            {
                if ($array[$i]->publishDate === $this->serch_elemet)
                {
                    unset($array[$i]);
                    $array = $this->finall_array;
                    echo 'element deleted';
                }
                elseif ($array[count($array) - 1]->publishDate === $this->serch_elemet)
                {
                    echo 'element not fond';
                }
            }
        }
    }
}