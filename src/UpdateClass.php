<?php

namespace App;

class UpdateClass
{

    public $parametr;
    public $previous_val;
    public $next_val;
    public $library;

    public function replace(array $array)
    {

        if($this->parametr === 'ISBN')
        {

            for ($i = 0;$i === count($array)-1 ;$i++)
            {

                if ($array[$i]-> ISBN === $this->previous_val)
                {

                    $array[$i]->ISBN = $this->next_val;
                    $this->library = $array;
                    break;
                }
                elseif ($array[count($array)-1]-> ISBN !== $this->previous_val)
                {

                    echo 'this ISBN not found';

                }
            }

        }
        elseif ($this->parametr === 'bookTitle')
        {

            for ($i = 0;$i === count($array)-1 ;$i++)
            {

                if ($array[$i]-> bookTitle === $this->previous_val)
                {

                    $array[$i]->bookTitle = $this->next_val;
                    $this->library = $array;
                    break;
                }
                elseif ($array[count($array)-1]-> ISBN !== $this->previous_val)
                {

                    echo 'this bookTitle not found';

                }
            }

        }
        elseif ($this->parametr === 'authorName')
        {

            for ($i = 0;$i === count($array)-1 ;$i++)
            {

                if ($array[$i]-> authorName === $this->previous_val)
                {

                    $array[$i]->authorName = $this->next_val;
                    $this->library = $array;
                    break;
                }
                elseif ($array[count($array)-1]-> authorName !== $this->previous_val)
                {

                    echo 'this authorName not found';

                }
            }

        }
        elseif ($this->parametr === 'pageCount')
        {

            for ($i = 0;$i === count($array)-1 ;$i++)
            {

                if ($array[$i]-> pageCount === $this->previous_val)
                {

                    $array[$i]->pageCount = $this->next_val;
                    $this->library = $array;
                    break;
                }
                elseif ($array[count($array)-1]-> pageCount !== $this->previous_val)
                {

                    echo 'this pageCount not found';

                }
            }

        }
        elseif ($this->parametr === 'publishDate')
        {

            for ($i = 0;$i === count($array)-1 ;$i++)
            {

                if ($array[$i]-> publishDate === $this->previous_val)
                {

                    $array[$i]->publishDate = $this->next_val;
                    $this->library = $array;
                    break;
                }
                elseif ($array[count($array)-1]-> publishDate !== $this->previous_val)
                {

                    echo 'this publishDate not found';

                }
            }

        }
        else
        {

           echo 'This parameter does not exist';

        }


    }


}