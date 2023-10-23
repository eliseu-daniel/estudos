<<<<<<< HEAD
<?php
    if(isset($_POST['submit'])){

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $rsenha = $_POST['rsenha'];
    

        $sql = " INSERT INTO usuarios(nome,email,usuario,senha,rsenha)
        VALUES ('$nome','$email','$usuario','$senha','$rsenha')";

        if(mysqli_query($conexao,$sql)){
            echo '<script type="text/javascript">
                    window.onload = function () { alert("Cadastrado com Sucesso"); } 
                 </script>'; 


            header('Location: /testes/dash.php');
            die();

        }else{
            echo "error:" . $sql . "<br>" . mysqli_error($conexao);
        }





    

        mysqli_close($conexao);
    }
    
=======
<?php
    if(isset($_POST['submit'])){

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $rsenha = $_POST['rsenha'];
    

        $sql = " INSERT INTO usuarios(nome,email,usuario,senha,rsenha)
        VALUES ('$nome','$email','$usuario','$senha','$rsenha')";

        if(mysqli_query($conexao,$sql)){
            echo '<script type="text/javascript">
                    window.onload = function () { alert("Cadastrado com Sucesso"); } 
                 </script>'; 


            header('Location: /testes/dash.php');
            die();

        }else{
            echo "error:" . $sql . "<br>" . mysqli_error($conexao);
        }





    

        mysqli_close($conexao);
    }
    
>>>>>>> 7f487fb7bee6ee4d62877714fcae5b1f9ae92e8d
?>