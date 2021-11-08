<?php
    include('models/database.php');
    $bdd = initDatabse();
    $req1 = $bdd->prepare("SELECT * FROM posts");
	$req1->execute();
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
    <h1> Liste des posts</h1>
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
	
	while($enregistrement = $req1->fetch(PDO::FETCH_OBJ))
	{
        if($enregistrement->active == 1)
        {
            $Active = 'Oui';
        }
        else{
            $Active = 'Non';
        }
		echo"<tr>
                <td>".$enregistrement->id."</td>
                <td>".$enregistrement->title."</td>
                <td>".$enregistrement->description."</td>
                <td>".$Active."</td>
                <td>".$enregistrement->created_at."</td>
                <td><a href='post.php?id=".$enregistrement->id."'>Voir</a></td>
            </tr>";
	}
    ?>
    </table>
</body>
</html>