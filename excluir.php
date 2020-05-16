<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inclusão</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="margin-top:60px;">
<div style="margin-left:30px;">
    <h3>Excluir Aluno</h3>
    <form method="post">
        <p style="margin-top: 10px;">Cuidado, é irreversível!</p><br>
        
        Codigo:
        <input style="width: 800px;" type="number" class="form-control" placeholder="" name="codigo">
        <br>
        Nome:
        <input style="width: 800px;" type="text" class="form-control" placeholder="" name="nome">
        <br>
        Endereço:
        <input style="width: 800px;" type="text" class="form-control" placeholder="" name="endereco">
        <br>
        Telefone:
        <input style="width: 800px;" type="text" class="form-control" placeholder="" name="telefone">
        <br>
        <input style="width:100px; margin-left:595px;" class="btn btn-danger" type=reset name="cancelar" value="Cancelar" onclick="location.href='index.php'">
        <input style="width:100px;" class="btn btn-primary" type=submit name="incluir" value="Confirmar">
    </form>
</div>
</body>

<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'fmu';
    $con = new mysqli($servidor,$usuario,$senha,$banco);

    if ($con -> connect_error)
    {
        die ("Conexão falhou".$con -> connect_error);
    }

    if (isset($_POST['incluir']))
    {
        @$cod = $_POST['codigo'];
        @$name = $_POST['nome'];
        @$end = $_POST['endereco'];
        @$tel = $_POST['telefone'];
        
        $sql = "delete from aluno where codigo=$cod";
        mysqli_query($con,$sql);
        mysqli_close($con);
    }

?>

</html>