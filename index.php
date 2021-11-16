<?php
require_once('views/header.php');

require_once('controllers/poste.php');
require_once('controllers/comment.php');

$action = $_GET['action'] ?? 'posts-list';

// Routing
// -------
switch ($action) {
    case 'posts-list':
        getPostsListController();
        break;
    case 'comments-list':
        $postId = $_GET['post_id'] ?? 0;
        getCommentsOfPostController($postId);
        break;
    default:
        echo '404 - Page Not Found';
}

require_once('views/footer.php');
