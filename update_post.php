<?php 

    require('BlogModel.php');

    session_start();

    if(isset($_POST['post'])) {
        $db = new BlogModel();

        $id = $_POST['id'];    
        $post = $_POST['post']; 
        
        if($db->updatePost($id, $post)) {
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