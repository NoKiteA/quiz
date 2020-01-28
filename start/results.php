<?php
    include_once "../php/config/database.php";
    include_once "../php/config/users.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/results.css">
    <title>Wyniki</title>
</head>
<body>
    <div class="wrapper">
        <h3>Ukończyłeś quiz!</h3>
        <?php
            $database = new Database();
            $db = $database->getConnection();

            $users = new Users($db);

            $score = 0;
            $total = 5;
            if(isset($_POST['sub'])) {
                if(isset($_POST['q1'])) 
                    if($_POST['q1'] == "b") $score++;
                
                if(isset($_POST['q2'])) 
                    if($_POST['q2'] == "a") $score++;
                
                if(isset($_POST['q3']))
                    if($_POST['q3'] == "d") $score++;
                
                if(isset($_POST['q4']))
                    if($_POST['q4'] == "b") $score++;

                if(isset($_POST['q5']))
                    if($_POST['q5'] == "d") $score++;
                
                echo "<p>Twój wynik to: $score/$total</p>";

                if(isset($_SESSION['max_points']) || $_SESSION['max_points'] != null) {
                    $max_score = $_SESSION['max_points'];

                    if($max_score < $score) {
                        echo "<p>To Twój nowy rekord!</p>";

                        $id = (int)$_SESSION['id'];
                        $users->update($id, $score);
                    } else {
                        echo "<p>Twój rekord to: $max_score/$total</p>";
                    }
                } else {
                    echo "<p>To Twój nowy rekord!</p>";

                    $id = $_SESSION['id'];
                    $users->update($id, $score);
                }
            }
        ?>
        <a href="../start" class="sub">Spróbuj ponownie</a>
    </div>
    <form method="POST" action="../php/login/logout.php">
        <input type="submit" class="sub" id="sub" name="sub" value="Wyloguj się" />
    </form>

    <footer>
        Copyright &copy; 2020, Wszelkie prawa zastrzeżone.
    </footer>
</body>
</html>