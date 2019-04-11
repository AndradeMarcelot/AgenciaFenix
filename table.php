<?php $clientes =  procurar($conexao,$_GET['nome']); ?>

<br>
<hr>
<table class='table'>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Sexo</th>
            <th>Observações</th>
        </tr>
        
    </thead>  
    <tbody>
        <?php foreach($clientes as $cliente): ?>
        <tr>
            <td>
                <a href="entrevistas.php?id=<?php echo $cliente['idCliente']; ?>">
                    <?php echo $cliente['idCliente'] ; ?> 
                </a>                
            </td>
            <td><?php echo $cliente['nome'];        ?> </td>
            <td><?php echo $cliente['idade'];       ?> </td>
            <td><?php echo $cliente['sexo'];        ?> </td>
            <td><?php echo $cliente['observacoes']; ?> </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

