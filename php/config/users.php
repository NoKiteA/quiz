<?php
    session_start();

    class Users {
        private $con;
        private $table_name;

        public $id;
        public $username;
        public $max_points;

        public function __construct($db) {
            $this->con = $db;
        }

        public function getUser($username, $passwd) {
            $query = "SELECT * FROM users;";
            $result = $this->con -> query($query);
            $access = false;

            while($row = $result -> fetch_array(MYSQLI_ASSOC)) {
                if($row['username'] == $username && $row['passwd'] == $passwd) {
                    $access = true;
                }
            }

            if($access) {
                $query = "SELECT * FROM users WHERE username='$username' AND passwd='$passwd';";
                $result = $this->con -> query($query);

                while($row = $result -> fetch_array(MYSQLI_ASSOC)) {
                    $this->id = $row['id'];
                    $this->username = $row['username'];
                    $this->max_points = $row['max_points'];
                }

                $_SESSION['id'] = $this->id;
                $_SESSION['username'] = $this->username;
                $_SESSION['max_points'] = $this->max_points;

                header("Location: http://localhost/quiz/start/");
            } else {
                header("Location: http://localhost/quiz/login_error.php");
            }
        }   

        public function create($username, $passwd) {
            $query = "SELECT * FROM users;";
            $result = $this->con -> query($query);
            $exists = false;

            while($row = $result -> fetch_array(MYSQLI_ASSOC)) {
                if($row['username'] == $username) {
                    $exists = true;
                }
            }

            if(!$exists) {
                $query = "INSERT INTO users(username, passwd) VALUES('$username', '$passwd')";
                $this->con -> query($query);

                header("Location: http://localhost/quiz/");
            } else {
                header("Location: http://localhost/quiz/register/register_error.html");
            }
        }

        public function update($id, $score) {
            $query = "UPDATE users SET max_points=$score WHERE id=$id";
            $this->con -> query($query);
        }
    }
?>