<?php
$n1 = 10;
$n2 = 5;
$n3 = 9;
$n4 = 4;

$media;

if ($n1 <= 10) {

    if ($n2 <= 10) {
        
        if ($n3 <= 10) {
            
            if ($n4 <= 10 ) {
        
                $media = ($n1 + $n2 + $n3 + $n4 ) / 4;
            
                echo "O resultado da média é: {$media}";

            }


        }

    }



}



if ($n1 = 10 AND $n2 <= 10 AND $n3 <= 10 AND $n4 <= 10) {
    $media = ($n1 + $n2 + $n3 + $n4 ) / 4;
    echo "O resultado da média é: {$media}";
}else{
    "echo Cálculo não realizado! Nota Inválida!";

}
?>