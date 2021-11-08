<?php
    include('models/database.php');
    $bdd = initDatabse();
    $req2 = $bdd->prepare("SELECT * FROM comments WHERE post_id = :idPost");
    $req2 ->bindparam(':idPost', $_GET['id']);
    $req2->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Liste des postes</h1>
    <a href="index.php" class="btn btn-info mb-3">Liste des postes</a>
    <table class="table table-striped">
        <tr>
            <th>Description</th>
            <th>Créé le</th>
        </tr>
        <?php
        while($enregistrement = $req2->fetch(PDO::FETCH_OBJ))
        {
            if($enregistrement->active == 1)
            {
                $Active = 'Oui';
            }
            else{
                $Active = 'Non';
            }
            echo"<tr>
                    <td>".$enregistrement->description."</td>
                    <td>".$enregistrement->created_at."</td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>