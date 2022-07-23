<?php
$login = $_POST['username'];
$senha = $_POST['password'];
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
        echo"<script language='javascript' type='text/javascript'> alert('Usuario não cadastrado no sistema !'); window.location.href='../php/usuarios.php';</script>";
        die();
      }
      else
      {
          $sql2 = mysqli_query($connect, "UPDATE usuario SET logradouro = $logradouro, numero = $numero, complemento = $complemento, bairro = $bairro, cidade = $cidade, UF = $UF, CEP = $CEP WHERE login = $login");
          echo"<script language='javascript' type='text/javascript'> alert('Endereço do usuario atualizado com sucesso !'); window.location.href='../php/usuarios.php';</script>";
      }
  }
?>
