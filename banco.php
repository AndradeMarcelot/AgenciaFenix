<?php

    function procurar($conexao, $nome){
        
        $sqlBusca = "
            SELECT * FROM clientes 
            WHERE nome 
            LIKE '%$nome%'
        ";
        
        $resultado = mysqli_query($conexao,$sqlBusca);

        $clientes = array();

        while($cliente = mysqli_fetch_assoc($resultado)){
            $clientes[] = $cliente;
        }
        
        return $clientes;
    }

    function buscarEntrevistas($conexao,$idCliente){
        $sqlBusca ="
            SELECT * FROM Entrevistas
            WHERE idCliente = $idCliente
        ";

        $resultado = mysqli_query($conexao, $sqlBusca);

        $entrevistas = array();

        while($entrevista = mysqli_fetch_assoc($resultado)){
            $entrevistas[] = $entrevista;
        }

        return $entrevistas;
    }

    function mostrarTodosClientes($conexao){

        $sqlBusca = "
            SELECT * 
            FROM clientes 
            NATURAL JOIN entrevistas
        ";
        
        $resultado = mysqli_query($conexao,$sqlBusca);

        $clientes = array();

        while($cliente = mysqli_fetch_assoc($resultado)){
            $clientes[] = $cliente;
        }
        
        return $clientes;
    }

?>