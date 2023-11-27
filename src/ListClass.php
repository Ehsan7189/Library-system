<?php
//task1
namespace App;


class ListClass
{
    public $books = [];
    public $Library;
    public $filtered;


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

    public function pagination($chunk)
    {

        $this->Library = array_chunk($this->Library, $chunk);


    }

    public function pageShow(int $page_number)
    {

        var_dump($this->Library [$page_number]);

    }

    public function filter($parametr, ...$elements)
    {

        if ($parametr === 'ISBN') {

            for ($i = 0; $i == count($this->Library); $i++) {

                foreach ($elements as $element) {

                    $elements === $this->Library[$i]->ISBN ? array_push($this->filtered, $this->Library[$i]) : array_push($this->filtered, []);
                }
            }

        } elseif ($parametr === 'authorName') {

            for ($i = 0; $i == count($this->Library); $i++) {

                foreach ($elements as $element) {

                    $elements === $this->Library[$i]->authorName ? array_push($this->filtered, $this->Library[$i]) : array_push($this->filtered, []);
                }
            }

        } elseif ($parametr === 'bookTitle') {

            for ($i = 0; $i == count($this->Library); $i++) {

                foreach ($elements as $element) {

                    $elements === $this->Library[$i]->bookTitle ? array_push($this->filtered, $this->Library[$i]) : array_push($this->filtered, []);
                }
            }
        } elseif ($parametr === 'pageCount') {

            for ($i = 0; $i == count($this->Library); $i++) {

                foreach ($elements as $element) {

                    $elements === $this->Library[$i]->pageCount ? array_push($this->filtered, $this->Library[$i]) : array_push($this->filtered, []);
                }
            }

        } elseif ($parametr === 'piblishDate') {

            for ($i = 0; $i == count($this->Library); $i++) {

                foreach ($elements as $element) {

                    $elements === $this->Library[$i]->piblishDate ? array_push($this->filtered, $this->Library[$i]) : array_push($this->filtered, []);

                }
            }

        }
        print_r($this->filtered);
    }


}

