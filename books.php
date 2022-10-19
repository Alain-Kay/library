<?php 
require_once "Book.class.php";
require_once "BookManager.php";

$bookManager = new BookManager();
$bookManager->bookload();


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
            <?php 
            $books = $bookManager->getBooks();
            foreach($books as $book): ?>

            <tr>
                <td class="align-middle"><img src="public/images/<?= $book->getImage() ?>" width="85px" /></td>
                <td class="align-middle"><?=  $book->getTitle() ?></td>
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