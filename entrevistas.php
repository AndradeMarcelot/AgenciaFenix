<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FENIX</title>
</head>
<body>
    <div class="container">
    <br>
        <h1>ENTREVISTAS MARCADAS</h1>

        <?php
            include 'conexao.php';
            include 'banco.php';

            $id = $_GET['id'];
            echo '<span> $_GET[\'id\'] = '.$_GET['id'] .' enviado da página anterior </span>';
            $entrevistas = buscarEntrevistas($conexao,$id);
        ?>

        <table class='table'>
            <thead>
                <tr>
                    <th>#Entrevista</th>
                    <th>Data</th>
                    <th>Hora</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($entrevistas as $entrevista): ?>
                <tr>
                    <td><?php echo $entrevista['idEntrevista'];  ?></td>
                    <td><?php echo $entrevista['dia'];        ?></td>
                    <td><?php echo $entrevista['hora'];        ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>

        <?php
            
            echo "<br><br><hr><br><br>";
            echo "<h1>CLIENTES COM ENTREVISTAS MARCADAS</h1>";
            $todosClientes = mostrarTodosClientes($conexao);
            foreach($todosClientes as $cliente){
                foreach($cliente as $key => $values){
                    echo "| $key - $values ";
                }
                echo "<br>";
            }

        ?>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>