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

            return $posts;
        }
    }

?>