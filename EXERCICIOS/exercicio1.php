<?php
function somaValores($a = 10, $b = -15) {

    $result = $a + $b;
    

    if ($result < 0) {
        return 0;
    } else {
        return $result;
    }
}


$a = 10;
$b = -15;
echo "A soma de $a e $b é " . somaValores($a, $b);

?>
