<!doctype html>
<html>
<body>

    <?php
        $servidor = 'localhost';
        $usuario = 'root';
        $senha = '';
        $banco = 'fmu';
        $con = new mysqli($servidor,$usuario,$senha,$banco);

        if ($con -> connect_erro)
        {
            die ("Conexão falhou".$con -> connect_erro);
        }
        else 
        {
            echo "Conectou";
        }

        /*  INSERT INTO
        $sql = "insert into aluno values (4, 'JOAO CORDEIRO', 'RUA JULIANO CARTARI, 15', '11922334455')";
        */

        /* UPDATE 
        $sql = "update aluno set nome='RENAN B MOURA' where codigo=1";
        */

        /* DELETE
        $sql = "delete from aluno where codigo=3";
        */
        
        mysqli_query($con,$sql);
        mysqli_close($con);
    ?>

</body>
</html>