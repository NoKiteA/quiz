<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header("Location: http://localhost/quiz/start");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/login.css">
    <title>Login</title>
</head>
<body>
    <p class="error">Nieprawidłowa Nazwa użytkownika lub hasło.</p>
    <form method="POST" action="php/login/login.php">
        <h1>Witaj w quizie na temat JavaScript</h1>
        <h3>Zaloguj się, by sprawdzić swoją wiedzę!</h3>
        <div class="formItem">
            <input
                class="input"
                type="text"
                name="username"
                id="username"
                placeholder=" "
            />
            <label for="username" class="label">User Name</label>
            <div class="formItemBar"></div>
        </div>

        <div class="formItem">
            <input
                class="input"
                type="password"
                name="passwd"
                id="passwd"
                placeholder=" "
            />
            <label for="passwd" class="label">Password</label>
            <div class="formItemBar"></div>
        </div>
        <input type="submit" class="sub" name="sub" id="sub" value="Log in" />
    </form>
    <p>Jeżeli nie masz konta zarejestruj się <a href="/quiz/register/">tutaj</a></p>
</body>
</html>