<?php

    $bdServidor = 'localhost';
    $bdUsuario = 'root';
    $bdSenha = '';
    $bdBanco = 'AgenciaFenix';
            
    $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco) or die("Não foi possível conectar");
    
    mysqli_set_charset($conexao, "utf8");

?>