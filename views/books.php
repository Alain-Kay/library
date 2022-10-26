<?php 
ob_start(); 
?>

    <table class="table text-center">
        <tr class="table-dark">
            <th>Image</th>
            <th>Titre</th>
            <th>Nombre de pages</th>
            <th colspan="2">Actions</th>
        </tr>
        <?php 
         // Get the books from the BookManager
            for($i=0; $i < count($books);$i++) : 
        ?>
        <tr>
            <td class="align-middle"><img src="public/images/<?= $books[$i]->getImage(); ?>" width="60px;"></td>
            <td class="align-middle"><?= $books[$i]->getTitle(); ?></td>
            <td class="align-middle"><?= $books[$i]->getPages(); ?></td>
            <td class="align-middle"><?= $books[$i]->getAuthor(); ?></td>
            <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
            <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
        </tr>
        <?php endfor; ?>
    </table>
    <a href="" class="btn btn-success d-block">Ajouter</a>

<?php
    $content = ob_get_clean();
    $title = "Les livres de la bibliothèque";
    require "template.php";
?>