<?php 
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'postagem';

    $con = new mysqli($host, $usuario, $senha, $banco);

    if(mysqli_connect_errno()){
        exit('Erro ao conectar-se ao banco de dados.' .mysqli_connect_errno());
    }
?>