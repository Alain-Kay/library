<?php 
require_once "Book.class.php";
$book_1 = new Book(1,"Algo de sim" , 340, "jerry", "algo.png");
$book_2 = new Book(2,"France" , 340, "alain", "france.png");
$book_3 = new Book(1,"JavaScript pour les nulls" , 250, "Alain", "JS.png");
$book_4 = new Book(2,"Virus Africain" , 500, "alain", "virus.png");


$books = [$book_1, $book_2, $book_3, $book_4];


ob_start()

?>

    <table class="table text-center">
            <tr class="table-dark">
                <th>Image</th>
                <th>Titre</th>
                <th>Nombres de pages</th>
                <th>Auteur</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php foreach($books as $book): ?>

            <tr>
                <td class="align-middle"><img src="public/images/<?= $book->getImage() ?>" width="85px" /></td>
                <td class="align-middle"><?= $book->getTitle() ?></td>
                <td class="align-middle"><?= $book->getPages() ?></td>
                <td class="align-middle"><?= $book->getAuthor()?></td>
                <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
                <td class="align-middle"><a class="btn btn-danger">Supprimer</a></td>
            </tr>
            <?php endforeach; ?>
            

        </table>
        
        <a href="" class="btn btn-success d-block">Ajouter</a>

<?php
    $content = ob_get_clean();
    $title = "Les livres de la bibliothèque";
    require('template.php');
?>