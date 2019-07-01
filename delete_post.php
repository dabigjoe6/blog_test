<?php 
    require('BlogModel.php');

    $db = new BlogModel();

    $id = $_GET['id'];

    if($db->deletePost($id)) {
        header('Location: index.php');
    } else {
        $_SESSION['error_message'] = "Couldn't delete post";
    }