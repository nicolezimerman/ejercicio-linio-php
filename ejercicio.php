<?php

function armarString($a=3,$b=5,$limite=100){

    $texto = "";

    for ($i=1; $i <= $limite; $i++) { 
        if(($i % $a) == 0 && ($i % $b)==0){
            $texto .= "Linianos";
        }elseif(($i % $a)==0){
            $texto .= "Linio";
        }elseif(($i % $b)==0){
            $texto .= "IT";
        }else{
            $texto .= $i;
        }

        $texto.= " ";
    }
    return $texto;
}

function imprimir(){
    $texto = armarString();
    echo $texto;
}
imprimir();
?>
