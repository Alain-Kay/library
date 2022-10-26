<?php
require_once "models/BookManager.php";

class BookController
{
    private $bookManager;

    public function __construct(){
        $this->bookManager = new BookManager;
        $this->bookManager->bookload();
    }

    public function ShowBook(){
        $books = $this->bookManager->getBooks();
        require "views/books.php";
    }
}