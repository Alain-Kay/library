<?php

class Book{
    private $id;
    private $title;
    private $pages;
    private $author;
    private $image;

    public function __construct($id, $title, $pages, $author, $image){
        $this->id = $id;
        $this->title = $title;
        $this->pages = $pages;
        $this->author = $author;
        $this->image = $image;
    }
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
        
    }

    public function getPages(){
        return $this->pages;
    }
    public function setPages($pages){
        $this->pages = $pages;
    }

    public function getAuthor(){
        return $this->author;
    }
    public function setAuthor($author){
        $this->author = $author;
    }

    public function getImage(){
        return $this->image;
    }
    public function setImage($image){
        $this->image = $image;
    }

    


}