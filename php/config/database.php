<?php
    class Database {
        private $host = "localhost";
        private $db_name = "Users";
        private $username = "root";
        private $password = "";
        public $con;

        public function getConnection() {
            $this->con = new mysqli($this->host, $this->username, $this->password);
            $create_db = "CREATE DATABASE IF NOT EXISTS $this->db_name;";
            $create_table = "CREATE TABLE IF NOT EXISTS users(id int NOT NULL AUTO_INCREMENT, username varchar(255) NOT NULL, passwd varchar(255) NOT NULL, max_points int NULL, PRIMARY KEY (id));";
            $use_db = "USE $this->db_name";

            if($this->con -> connect_errno) {
                echo "Błąd wczytania Bazy Danych";
                exit();
            }

            $this->con -> query($create_db);
            $this->con -> query($use_db);
            $this->con -> query($create_table);

            return $this->con;
        }
    }
?>