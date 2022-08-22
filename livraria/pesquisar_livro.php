<?php
    require("connect.php");

    $nome_livro=$_POST['c_nome_livro'];

    $sql="SELECT `codigo_item` FROM `item` WHERE descricao='$nome_livro'";

    $resultado=mysqli_query($conexao,$sql);

    $quantidade=mysqli_num_rows($resultado);

    echo "Existem ".$quantidade." livro(s) cadastrado(s) com o nome de ".$nome_livro;
?>
<p><a href="form_cadastrar_livro.html">Voltar</a>