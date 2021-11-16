<h1>Liste des commentaires</h1>
    <a href="index.php?action=posts-list" class="btn btn-info mb-3">Liste des postes</a>
    <table class="table table-striped">
        <tr>
            <th>Description</th>
            <th>Créé le</th>
        </tr>
        <?php
        foreach($tab_comment as $comment)
        {
            echo"<tr>
                    <td>".$comment['description']."</td>
                    <td>".$comment['created_at']."</td>
                </tr>";
        }
        ?>
    </table>