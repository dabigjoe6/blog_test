<?php 

    require('BlogModel.php');

    session_start();

    if(isset($_POST['post'])) {
        $db = new BlogModel();

        $title = $_POST['title'];
        $post = $_POST['post']; 
        
        if($db->createPost($title, $post)) {
            header('Location: index.php');
        } else {
            $_SESSION['error_message'] = "Couldn't update post";
        }

        // header('Location: index.php');

        // if($db->updatePost($id, $post)) {
        //     header('Location: index.php');
        // } else {
        //     echo "Couldn't update";
        // }

    } else {
        echo "NOthing here";
    }
?>