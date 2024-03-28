<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .azul{
        color:#00f;
    }
    </style>
<body>
    
<?php

$nota1 = 8;
$nota2 = 7;
$media = ( $nota1 + $nota2) / 2;

echo $media; 

//operadores relacioais > < >= <= == !=
//operadores logicos && - e || - ou ! não 
if($media>=5) {
    echo " <h1 class='azul'> Aprovado </h1>";
}

else {
    echo "Reprovado";
}


 




?>
</body>
</html>