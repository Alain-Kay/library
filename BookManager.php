<?php

class BookManager{
    private $books;

    public function addBooks($book){
        $this->books[] = $book;
    }

    public function getBooks(){
        return $this->books;
    }
}