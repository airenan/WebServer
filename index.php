<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="fmu-icon.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Alunos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700" rel="stylesheet">
</head>
<body style="background-color: #f7f7f7; overflow-x: hidden;">
    <div class="container">
            
        <img style="width: 13%; height: 13%; margin-left: -190px;" src="fmu.png" alt="fmu">  
        
        <h2 style="margin-top: -40px; margin-bottom: 25px; text-align: center; width: 100%; font-family: 'Yanone Kaffeesatz', sans-serif; font-size: 45px;">Cadastro de Alunos</h2>

    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Telefone</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $servidor = 'localhost';
            $usuario = 'root';
            $senha = '';
            $banco = 'fmu';
            $conn = new mysqli($servidor,$usuario,$senha,$banco);

            $sqli = "SELECT codigo, nome, endereco, telefone from aluno";
            $result = $conn-> query($sqli);

            if ($result-> num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["codigo"] ."</td><td>". $row["nome"] ."</td><td>". $row[
                        "endereco"] ."</td>><td>". $row["telefone"] ."</td></tr>";
                }
                echo "</table>";
            }
            else {
                echo "0 Resultados";
            }

            $conn-> close();
        ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example" style="margin-right: 10px;">
        
        <div class="row"><div class="col-6">
            <form class="form-inline my-2 my-lg-0 pagination justify-content-end">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
            </form>
        </div>
        
        <div class="col-5">
            <ul class="pagination">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
               
    <div style="margin-top: 20px; text-align: center;">
        <input style="width:100px" type="button" class="btn btn-primary" value="Incluir" onclick="location.href='incluir.php'">
        <input style="width:100px" type="button" class="btn btn-primary" value="Modificar" onclick="location.href='modificar.php'">
        <input style="width:100px" type="button" class="btn btn-primary" value="Excluir" onclick="btnexcluir()">
    </div>

    <script>
        function btnexcluir() {
            var cod = prompt("Qual aluno deseja excluir?");
            alert("Aluno excluído!");
        }
    </script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>