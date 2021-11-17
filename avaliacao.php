<?php

    if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);

        include_once('config.php');

        $avaliacao = $_POST['avaliacao'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(avaliacao) 
        VALUES ('$avaliacao')");

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
           
    <section class="rates">
        <article class="emojis">
            <h1 class="digitanome">Como foi sua experiência?</h1>
            <form action="avaliacao.php" method="POST">
            <fieldset>
             <ul class="rate_1">
                 <input type="radio" id="pessima" name="avaliacao" value="pessima">
                <label for="pessima">Péssima</label>
                <img class="img-pessima" src="images/pessima.png">
             </ul>
             <ul class="rate_2">
                <input type="radio" id="ruim" name="avaliacao" value="ruim">
                <label for="pessima">Ruím</label>
                     <img class="img-ruim" src="images/ruim.png">
             </ul>
             <ul class="rate_3">
                <input type="radio" id="indiferente" name="avaliacao" value="indiferente">
                <label for="pessima">Indiferente</label>
                     <img class="img-indiferente" src="images/indiferente.png">
             </ul>
             <ul class="rate_4">
                <input type="radio" id="boa" name="avaliacao" value="boa">
                <label for="pessima">Boa!</label>                
                <img class="img-boa" src="images/boa.png">
             </ul>
             <ul class="rate_5">
                <input type="radio" id="excelente" name="avaliacao" value="excelente">
                <label for="pessima">Excelente!</label>  
                <img class="img-excelente" src="images/excelente.png">
             </ul>
         </article>
         <footer>
             <button id="submit" input type="submit" name="submit" id="submit" class="float-left submit button">Salvar
             <button id="proximo" input type="button" class="proximo" onclick="next2()"> Próximo
</fieldset>
</form>
         </footer>
    </section>
    </div>
    </div>
</fieldset>
</body>
</head>
</html>