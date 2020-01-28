<?php
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

            while($row = $result -> fetch_array(MYSQLI_ASSOC)) {
                if($row['username'] == $username && $row['passwd'] == $passwd) {
                    $this->id = $row['id'];
                    $this->username = $row['username'];
                    $this->max_points = $row['max_points'];
                }
            }

            $id = $this->id;
            $username = $this->username;
            $max_points = $this->max_points;

            $user = array(
                "id"->$id,
                "username"->$username,
                "max_points"->$max_points
            );

            session_start();

            $_SESSION['user'] = $user;
            header("Location: http://localhost/quiz/start/");
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
            }
        }

        //TODO: Update function
    }
?>