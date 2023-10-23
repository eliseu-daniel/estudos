<<<<<<< HEAD
<?php 
  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'formulario1';

  $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   if($conexao -> connect_errno)
   {
     echo "Erro!";
  }
  // else
  // {
  //   echo "Conexao efetuada com sucesso";
  // }
  

=======
<?php 
  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'formulario1';

  $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   if($conexao -> connect_errno)
   {
     echo "Erro!";
  }
  // else
  // {
  //   echo "Conexao efetuada com sucesso";
  // }
  

>>>>>>> 7f487fb7bee6ee4d62877714fcae5b1f9ae92e8d
?>