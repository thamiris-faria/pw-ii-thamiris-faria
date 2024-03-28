<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> hello Word</h1>
    <h1> Olá mundo</h1>






<?php
    //comentario de uma linha

    /*
    comentario de 
    varias 
    linhas
    */

    // declaraçao de variaveis
    $nome = "Thamiris";


    echo "<p>Bem-vindo</p>";
    echo "<p>" . $nome . "</p>";
    



    $numero1 = 8;
    $numero2 = 2;

        $soma = $numero1 + $numero2;

        echo "<h1>" . $soma . "</h1>";



        $numero3 = 8;
        $numero4 = 3;
        $soma1 = $numero3 + $numero4;
        $subtracao = $numero3 - $numero4;
        $divisao = $numero3 / $numero4;
        $multiplicacao = $numero3 * $numero4;
        $restodivisao = $numero3 % $numero4;
        

        
        echo "<p>" . $numero3 . " + " . $numero4 . " = " . $soma1 . "</p>";

        echo "<br />";
     
        echo "<h1> $numero3 + $numero4 = $soma1 </h1>";
        echo "<h1> $numero3 - $numero4 = $subtracao </h1>";
        echo "<h1> $numero3 / $numero4 = $divisao </h1>";
        echo "<h1> $numero3 * $numero4 = $multiplicacao  </h1>";
        echo "<h1> $numero3 % $numero4 = $restodivisao </h1>";
       




?>

</body>
</html>