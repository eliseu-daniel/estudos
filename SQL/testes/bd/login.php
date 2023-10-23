<?php 
    session_start();
    include('config.php');

    $usuario = $_POST['usuario'];
    $senha   = $_POST['senha'];

    $sql = "SELECT * FROM usuarios
            WHERE usuario = '{$usuario}'
            AND senha = '{$senha}'";
    
    $res = $conexao->query($sql) or die($conexao->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if($qtd > 0){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["senha"] = $row->senha;
    print "<script>location.href='\sistema.php';</script>";
    }else{
        print "<script>alert('usuario e/ou senha incorreto');</script>";
    }


?>