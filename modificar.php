<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="fmu-icon.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inclusão de Alunos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700" rel="stylesheet">
</head>
<body style="margin-top:60px; background-color: #f7f7f7; overflow-x: hidden;">
<div class="container">
    <img style="width: 13%; height: 14%; margin-left: -190px; margin-top: -60px;" src="fmu.png" alt="fmu">     
</div>
<div style="margin-left:30px;">
    <center><h3 style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size: 45px; margin-bottom: -15px;">Modificar Aluno</h3>
    <p style="margin-top: 10px;">Coloque as informações do aluno:</p><br>
    <form method="post">
        <span style="margin-left: -745px;">Codigo:</span>
        <input style="width: 800px;" type="number" class="form-control" placeholder="" name="codigo">
        <br>
        <span style="margin-left: -751px;">Nome:</span>
        <input style="width: 800px;" type="text" class="form-control" placeholder="" name="nome">
        <br>
        <span style="margin-left: -728px;">Endereço:</span>
        <input style="width: 800px;" type="text" class="form-control" placeholder="" name="endereco">
        <br>
        <span style="margin-left: -735px;">Telefone:</span>
        <input style="width: 800px;" type="text" class="form-control" placeholder="" name="telefone">
        <br>
        <input style="width:100px; margin-left:595px;" class="btn btn-danger" type=reset name="cancelar" value="Cancelar" onclick="location.href='index.php'">
        <input style="width:100px;" class="btn btn-primary" type=submit name="incluir" value=Confirmar>
    </form>
</center>
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
        
        $sql = "update aluno set nome='$name', endereco='$end', telefone='$tel' where codigo=$cod";
        mysqli_query($con,$sql);
        mysqli_close($con);
    }

?>

</html>