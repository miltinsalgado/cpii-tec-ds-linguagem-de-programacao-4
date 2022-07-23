<?php
$login = $_POST['username'];
$senha = $_POST['password'];
$email = $_POST['email'];
$nome = $_POST['nome'];
$data_nasc = $_POST['data_nasc'];
$sexo = $_POST['sexo'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$UF = $_POST['UF'];
$CEP = $_POST['CEP'];

$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect, 'cadastro');
  if (isset($login) && isset($senha))
  {
    $check = mysqli_query($connect,"SELECT * FROM usuario_acesso WHERE login ='$login' AND senha = '$senha'");
      if (mysqli_num_rows($check)<=0)
      {
        echo"<script language='javascript' type='text/javascript'> alert('Usuario ja cadastrado no sistema !'); window.location.href='../php/usuarios.php';</script>";
        die();
      }
      else
      {
          $sql1 = mysqli_query($connect, "INSERT INTO usuario_acesso (login, senha, email, administrador) VALUES ($login, $senha, $email ,false)");
          $sql2 = mysqli_query($connect, "INSERT INTO usuario (login, nome, data_nasc, sexo, logradouro, numero, complemento, bairro, cidade, UF, CEP) VALUES ($login, $nome ,$data_nasc ,$sexo ,$logradouro ,$numero ,$complemento, $bairro, $cidade, $UF, $CEP)");
          echo"<script language='javascript' type='text/javascript'> alert('Usuario cadastrado com sucesso !'); window.location.href='../php/usuarios.php';</script>";
      }
  }
?>
