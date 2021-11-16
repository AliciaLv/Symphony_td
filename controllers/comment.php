<?php

function getCommentsOfPostController($postId){
    require_once('models/comment.php');
    $tab_comment = select_comment($postId);
    include('views/comments.php');
}


?>

