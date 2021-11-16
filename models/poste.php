<?php
require_once 'database.php';

function select_post(){
    $bdd = initDatabse();
    $req = $bdd->prepare("SELECT * FROM posts");
	$req->execute();
    return $req->fetchAll();
}