<?php
    //Importando o arquivo de conexão com o BD(connect)
    require("connect.php");

    //Obtendo os valores dos campos
    $descricao=$_POST['c_descricao'];
    $quantidade=$_POST['c_quantidade'];
    $autor=$_POST['c_autor'];
    $tipo_capa=$_POST['tipo_capa'];
    $categoria_livro=$_POST['categoria_livro'];
    $termo=$_POST['c_termo'];

    //Armazenando a SQL em uma variavel
    $sql="INSERT INTO `item`(`quantidade`,`descricao`,`autor`,`tipo_capa`,`categoria`,`termo`) 
    VALUES ('$quantidade','$descricao','$autor','$tipo_capa','$categoria_livro','$termo')";

    //Executando a SQL que está na variável
    $resultado=mysqli_query($conexao,$sql);

    //Imprimindo na tela
    echo "Inserido com sucesso";
?>
<p><a href="form_cadastrar_livro.html">Voltar</a>