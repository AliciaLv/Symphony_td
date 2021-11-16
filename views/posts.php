<h1>Liste des commentaires</h1>
<table class='table table-striped'>
        <tr>
            <th>#</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Actif ?</th>
            <th>Créé le</th>
            <th>Commentaire</th>

        </tr>
    <?php
	foreach($tab_poste as $post)
    {
        if($post['active'] == 1)
        {
            $active = "oui";
        }
        else{
            $active = "non";
        }
        echo"<tr>
                <td>".$post['id']."</td>
                <td>".$post['title']."</td>
                <td>".$post['description']."</td>
                <td>".$active."</td>
                <td>".$post['created_at']."</td>
                <td><a href='index.php?action=comments-list&post_id=".$post['id']."'>Voir</a></td>
            </tr>";
    }
    ?>
    </table>