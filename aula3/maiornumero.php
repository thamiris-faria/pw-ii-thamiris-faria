
<?php
 $numeros = array(2,5,10,15,18,80,120);
 $result = $numeros[0];

 foreach($numeros as $numero){
    if($n > $result){
        $result = $numero;
    }
 }
 echo "o maior numero é: $numero";


?>
