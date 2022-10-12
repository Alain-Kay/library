<?php ob_start()?>

    <table class="table text-center">
            <tr class="table-dark">
                <th>Image</th>
                <th>Titre</th>
                <th>Nombres de pages</th>
                <th>Auteur</th>
                <th colspan="2">Actions</th>
            </tr>
            <tr>
                <td class="align-middle"><img src="public/images/algo.png" width="85px" /></td>
                <td class="align-middle">Algo de sim</td>
                <td class="align-middle">340</td>
                <td class="align-middle">Jerry</td>
                <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
                <td class="align-middle"><a class="btn btn-danger">Supprimer</a></td>
            </tr>
            <tr>
                <td class="align-middle"><img src="public/images/france.png" width="85px" /></td>
                <td class="align-middle">France</td>
                <td class="align-middle">340</td>
                <td class="align-middle">Alain</td>
                <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
                <td class="align-middle"><a class="btn btn-danger">Supprimer</a></td>
            </tr>
            <tr>
                <td class="align-middle"><img src="public/images/JS.png" width="85px" /></td>
                <td class="align-middle">JavaScript pour les nulls</td>
                <td class="align-middle">250</td>
                <td class="align-middle">Kayumba</td>
                <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
                <td class="align-middle"><a class="btn btn-danger">Supprimer</a></td>
            </tr>
            <tr>
                <td class="align-middle"><img src="public/images/virus.png" width="85px" /></td>
                <td class="align-middle">Virus Africain</td>
                <td class="align-middle">500</td>
                <td class="align-middle">Alain kazadi</td>
                <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
                <td class="align-middle"><a class="btn btn-danger">Supprimer</a></td>
            </tr>

        </table>
        <a href="" class="btn btn-success d-block">Ajouter</a>

<?php
    $content = ob_get_clean();
    $title = "Les livres de la bibliothèque";
    require('template.php');
?>