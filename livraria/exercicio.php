<?php
    //Obtendo os valores do formulário 

    $numero_digitado = $_POST['campo_numero'];

    $numero = $numero_digitado % 2;

    if($numero == 0){
        $resultado = "par";
    }else{
        $resultado = "ímpar";}
        echo "O número é: ".$resultado."<br>";
        echo var_dump($resultado);
?>