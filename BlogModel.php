<?php
    class BlogModel {
        private $connection;

        public function __construct() {
            $this->connection = mysqli_connect('localhost', 'root', '', 'blog_test_db');

            if(mysqli_connect_errno()) {
                echo 'Failed to connect to MySQL';
            }
        }

        public function getPosts() {
            $query = 'SELECT * FROM post_table';

            $result = mysqli_query($this->connection, $query);

            $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

            mysqli_free_result($result);
            mysqli_close($this->connection);

            return $posts;
        }

        public function getPost($id) {
            $query = 'SELECT * FROM post_table WHERE id=' . $id;
            $result = mysqli_query($this->connection, $query);

            $post = mysqli_fetch_assoc($result);

            mysqli_free_result($result);
            mysqli_close($this->connection);

            return $post;
        }

        public function updatePost($id, $post) {
            $ID = (int) $id;

            $query = "UPDATE post_table SET post='$post' WHERE id='$ID'";
            if ($this->connection->query($query) === TRUE) {
                return true;
            } else {
                return false;
            }

            mysqli_close($this->connection);
            
        }

        public function createPost($title, $post) {

            $query = "INSERT INTO post_table (`title`, `post`) VALUES ('$title', '$post')";

            if($this->connection->query($query) === TRUE) {
                return true;
            } else {
                return false;
            }

        }
    }
?>