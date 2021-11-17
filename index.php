<?php

    if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);

        include_once('config.php');

        $nome = $_POST['nome'];




        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome) VALUES ('$nome')");

    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Feedback S.F</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/script.js"></script>
<body>
    <div class="flex-box container-box">
    <div class="content-box">
    <form action="index.php" method="POST">
    <section class="rates2">
        <article>
            <h1 class="digitanome">Digite o seu nome</h1>
            <input type="text" class="textoavaliacao" name="nome" id="input" required>
                </form>
                <button id="submit" input type="submit" name="submit" id="submit" class="float-left submit button" onclick="alert('Salvo!')">Salvar</button>
                <button id="proximo" input type="button" class="proximo" onclick="next()"> Próximo</button>
         </article>
         <footer>
         </footer>
    </section>
    </div>
    </div>
</form>
</body>
</head>
</html>