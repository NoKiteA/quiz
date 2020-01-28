<?php
    include_once "../config/database.php";
    include_once "../config/users.php";
    
    $database = new Database();
    $db = $database->getConnection();

    $users = new Users($db);

    if(isset($_POST['sub'])) {
        $username = $_POST['username'];
        $passwd = $_POST['passwd'];

        $users->getUser($username, $username);
    }
?>