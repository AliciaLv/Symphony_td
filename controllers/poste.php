<?
 function getPostsListController(){
    require_once('models/poste.php');
    $tab_poste = select_post();
    include('views/posts.php');
 }

 ?>