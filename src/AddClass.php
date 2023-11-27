<?php
//task3
namespace App;

use stdClass;

class AddClass
{

    public string $ISBN;
    public string $bookTitle;
    public  string $authorName;
    public  string $pagesCount;
    public  string $publishDate;
    /**
     * @var stdClass
     */
    public stdClass $new_book;

    public function adding(array$book)
    {

        $this->new_book->ISBN = $this->ISBN;
        $this->new_book->bookTitle = $this->bookTitle;
        $this->new_book->authorName = $this->authorName;
        $this->new_book->pagesCount = $this->pagesCount;
        $this->new_book->publishDate = $this->publishDate;
        $book[] = $this->new_book;

    }




}