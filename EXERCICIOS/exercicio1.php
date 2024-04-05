<?php
function somaValores($a = 10, $b = -15) {
    // Calcula a soma
    $result = $a + $b;
    
    // Se o resultado for negativo, retorna 0
    if ($result < 0) {
        return 0;
    } else {
        return $result;
    }
}

// Exemplo de uso
$a = 10;
$b = -15;
echo "A soma de $a e $b é " . somaValores($a, $b);

?>
