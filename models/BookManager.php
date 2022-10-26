<?php
require_once "Model.php";
require_once "Book.php";

class BookManager extends Model {  
    private $books; // Array of Book objects

    public function addBooks($book){ // Add a book to the array 
        $this->books[] = $book;
    }

    public function getBooks(){ // Get the array of books
        return $this->books;
    }

    public function bookload(){ // Load the books from the database 
        $req = $this->getBdd()->prepare("SELECT * FROM books"); 
        $req->execute(); 
        $myBooks = $req->fetchAll(PDO::FETCH_ASSOC); 
        $req->closeCursor(); 

        foreach ($myBooks as $book) { // Create a Book object for each book in the database
            $bk = new Book($book['id'], $book['title'], $book['pages'], $book['author'], $book['images']); 
            $this->addBooks($bk); // Add the book to the array
        }

    }

}