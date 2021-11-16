<?php
require_once 'database.php';

function select_comment($id){
    $bdd = initDatabse();
    $req = $bdd->prepare("SELECT * FROM comments WHERE post_id = :idPost");
    $req->bindparam(':idPost', $id);
    $req->execute();
    return $req->fetchall();
}