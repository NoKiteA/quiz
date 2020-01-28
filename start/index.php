<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        header("Location: http://localhost/quiz/");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/quiz.css">
    <title>Quiz</title>
</head>
<body>
    <div class="wrapper">
        <form name="quizForm" method="POST" class="form" action="./results.php">
            <div class="question active">
                <h3 class="questionHeader">1. W jakim znaczniku umieszczamy kod JavaScript?</h3>
                <div class="answers">
                    <label for="q1a" class="radio">
                        <input 
                            type="radio" 
                            name="q1" 
                            value="a" 
                            id="q1a"
                        />
                        <div class="radioButton"></div>
                        a. &lt;js&gt;
                    </label>
                    <label for="q1b" class="radio">
                        <input 
                            type="radio" 
                            name="q1" 
                            value="b" 
                            id="q1b"
                        />
                        <div class="radioButton"></div>
                        b. &lt;script&gt;
                    </label>
                    <label for="q1c" class="radio">
                        <input 
                            type="radio" 
                            name="q1" 
                            value="c" 
                            id="q1c"
                        />
                        <div class="radioButton"></div>
                        c. &lt;body&gt;
                    </label>
                    <label for="q1d" class="radio">
                        <input 
                            type="radio" 
                            name="q1" 
                            value="d" 
                            id="q1d"
                        />
                        <div class="radioButton"></div>
                        d. &lt;link&gt;
                    </label>
                    <div class="result"></div>
                </div>
            </div>

            <div class="question">
                <h3 class="questionHeader">2. Jakiego atrybutu urzyjesz do odwołania się do zewnętrznego pliku JavaScript?</h3>
                <div class="answers">
                    <label for="q2a" class="radio">
                        <input 
                            type="radio" 
                            name="q2" 
                            value="a" 
                            id="q2a"
                        />
                        <div class="radioButton"></div>
                        a. src
                    </label>
                    <label for="q2b" class="radio">
                        <input 
                            type="radio" 
                            name="q2" 
                            value="b" 
                            id="q2b"
                        />
                        <div class="radioButton"></div>
                        b. href
                    </label>
                    <label for="q2c" class="radio">
                        <input 
                            type="radio" 
                            name="q2" 
                            value="c" 
                            id="q2c"
                        />
                        <div class="radioButton"></div>
                        c. rel
                    </label>
                    <label for="q2d" class="radio">
                        <input 
                            type="radio" 
                            name="q2" 
                            value="d" 
                            id="q2d"
                        />
                        <div class="radioButton"></div>
                        d. type
                    </label>
                </div>
            </div>

            <div class="question">
                <h3 class="questionHeader">3. Jak w JavaScript umieścić tekst "Hello" w oknie alertu?</h3>
                <div class="answers">
                    <label for="q3a" class="radio">
                        <input 
                            type="radio" 
                            name="q3" 
                            value="a" 
                            id="q3a"
                        />
                        <div class="radioButton"></div>
                        a. msg("Hello")
                    </label>
                    <label for="q3b" class="radio">
                        <input 
                            type="radio" 
                            name="q3" 
                            value="b" 
                            id="q3b"
                        />
                        <div class="radioButton"></div>
                        b. alertBox("Hello")
                    </label>
                    <label for="q3c" class="radio">
                        <input 
                            type="radio" 
                            name="q3" 
                            value="c" 
                            id="q3c"
                        />
                        <div class="radioButton"></div>
                        c. document.write("Hello")
                    </label>
                    <label for="q3d" class="radio">
                        <input 
                            type="radio" 
                            name="q3" 
                            value="d" 
                            id="q3d"
                        />
                        <div class="radioButton"></div>
                        d. alert("Hello")
                    </label>
                </div>
            </div>

            <div class="question">
                <h3 class="questionHeader">4. Czy język JavaScript ma bezpośrednie związki z językiem Java?</h3>
                <div class="answers">
                    <label for="q4a" class="radio">
                        <input 
                            type="radio" 
                            name="q4" 
                            value="a" 
                            id="q4a"
                        />
                        <div class="radioButton"></div>
                        a. tak
                    </label>
                    <label for="q4b" class="radio">
                        <input 
                            type="radio" 
                            name="q4" 
                            value="b" 
                            id="q4b"
                        />
                        <div class="radioButton"></div>
                        b. nie
                    </label>
                </div>
            </div>

            <div class="question">
                <h3 class="questionHeader">5. Czy zmienne w JavaScript muszą być poprzedzone specjalnym znakiem?</h3>
                <div class="answers">
                    <label for="q5a" class="radio">
                        <input 
                            type="radio" 
                            name="q5" 
                            value="a" 
                            id="q5a"
                        />
                        <div class="radioButton"></div>
                        a. @
                    </label>
                    <label for="q5b" class="radio">
                        <input 
                            type="radio" 
                            name="q5" 
                            value="b" 
                            id="q5b"
                        />
                        <div class="radioButton"></div>
                        b. $
                    </label>
                    <label for="q5c" class="radio">
                        <input 
                            type="radio" 
                            name="q5" 
                            value="c" 
                            id="q5c"
                        />
                        <div class="radioButton"></div>
                        c. #
                    </label>
                    <label for="q5d" class="radio">
                        <input 
                            type="radio" 
                            name="q5" 
                            value="d" 
                            id="q5d"
                        />
                        <div class="radioButton"></div>
                        d. nie
                    </label>
                </div>
            </div>
            
            <br>
            <input type="submit" class="sub" name="sub" value="Prześlij odpowiedzi">
            <a class="next sub active">Next</a>
        </form>
        <br>

        <form method="POST" action="../php/login/logout.php" class="logout">
            <input type="submit" class="sub active" name="sub" value="Wyloguj się!"/> 
        </form>
        
        <footer>
            Copyright &copy; 2020, Wszelkie prawa zastrzeżone.
        </footer>
    </div>
    
    
    <script src="../script/index.js"></script>
</body>
</html>