<?php
require_once "controllers/BookController.php";
$bookController = new BookController;

if(empty($_GET['page'])){ // If the page is not set, we set it to 1
    require_once "views/home.php"; // We load the home page
}else {
    switch ($_GET['page']) { 
        case "home": 
            require_once "views/home.php";
            break;
        
        case "books": $bookController->ShowBook();
        break;
            break;
            
    }
}

?>