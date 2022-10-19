<?php
require_once "Model.class.php";
require_once "Book.class.php";

class BookManager extends Model {
    private $books;

    public function addBooks($book){
        $this->books[] = $book;
    }

    public function getBooks(){
        return $this->books;
    }

    public function bookload(){
        $req = $this->getBdd()->prepare("SELECT * FROM books");
        $req->execute();
        $myBooks = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($myBooks as $book) {
            $bk = new Book($book['id'], $book['title'], $book['pages'], $book['author'], $book['images']);
            $this->addBooks($bk);
        }

    }

}