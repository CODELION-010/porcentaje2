<?php

include 'porcentaje.html';

$compra = null;
$descuento = null;
$total1 = 0;
$total2 = 0;

if (!empty($_POST['compra']) && !empty($_POST['descuento'])) {
    
    $compra=$_POST['compra'];
    $descuento=$_POST['descuento'];
    

    //funcion operativa
    
    $total1 = $compra * $descuento / 100;
    $total2 = $_POST['compra'] - $total1;
    $total1_formateado = number_format($total1, 0, ',', '.');
    $total2_formateado = number_format($total2, 0, ',', '.');
    $compra_formateado = number_format($compra, 0, ',', '.');

    echo "el valor ingresado es de $ $compra_formateado" . "<br>";
    echo "el porcentaje es de  $descuento %" . "<br>";
    echo "su descuento es de $ $total1_formateado" . "<br>" ;
    echo "el valor a pagar es de $ $total2_formateado";
}else {
    echo "Ingrese Valores a Calcular Por Favor";
}


?>