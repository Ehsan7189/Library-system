<?php
//task2
namespace App;

class SerchClass
{

    public $books;
    public $parametr;
    public $par_array;
    public $serch_element;

    public function serch($array)
    {

        if ($this->parametr === 'ISBN') {

            for ($i = 0; $i == count($array) - 1; $i++) {

                if ($this->serch_element === $array[$i]->ISBN) {

                    var_dump($array[$i]);
                    break;
                } elseif ($this->serch_element !== $array[count($array) - 1]->ISBN) {

                    echo 'serched element not found';

                }
            }

        } elseif ($this->parametr === 'bookTitle') {

            for ($i = 0; $i == count($array) - 1; $i++) {

                if ($this->serch_element === $array[$i]->ISBN) {

                    var_dump($array[$i]);
                    break;
                } elseif ($this->serch_element !== $array[count($array) - 1]->ISBN) {

                    echo 'serched element not found';

                }
            }

        } elseif ($this->parametr === 'pageCount') {

            for ($i = 0; $i == count($array) - 1; $i++) {

                if ($this->serch_element === $array[$i]->ISBN) {

                    var_dump($array[$i]);
                    break;
                } elseif ($this->serch_element !== $array[count($array) - 1]->ISBN) {

                    echo 'serched element not found';

                }
            }

        } elseif ($this->parametr === 'publishDate') {

            for ($i = 0; $i == count($array) - 1; $i++) {

                if ($this->serch_element === $array[$i]->ISBN) {

                    var_dump($array[$i]);
                    break;
                } elseif ($this->serch_element !== $array[count($array) - 1]->ISBN) {

                    echo 'serched element not found';

                }
            }

        } elseif ($this->parametr === 'authorName') {

            for ($i = 0; $i == count($array) - 1; $i++) {

                if ($this->serch_element === $array[$i]->ISBN) {

                    var_dump($array[$i]);
                    break;
                } elseif ($this->serch_element !== $array[count($array) - 1]->ISBN) {

                    echo 'serched element not found';

                }
            }

        }

    }

}