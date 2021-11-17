<?php

    if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);

        include_once('config.php');

        $feedback = $_POST['feedback'];




        $result = mysqli_query($conexao, "INSERT INTO usuarios(feedback) VALUES ('$feedback')");

    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Site Feedback</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/script.js"></script>
<body>
    <div class="flex-box container-box">
    <div class="content-box">
        <form action="site2.php" method="POST">
    <section class="rates2">
        <article>
        <h1 class="digitanome">Conte-nos o porquê de sua avaliação</h1>
            <input type="text" class="textoavaliacao" name="feedback" id="input" required>
                </form>
                <button id="submit" input type="submit" name="submit" id="submit" class="float-left submit button" onclick="alert('Enviado!')">Enviar avaliação</button>
         </article>
         <footer>
         </footer>
    </section>
    </div>
    </div>
</body>
</head>
</html>