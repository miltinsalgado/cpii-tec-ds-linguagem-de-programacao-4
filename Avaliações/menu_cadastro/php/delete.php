<?php
$login = $_POST['username'];
$senha = $_POST['password'];

$connect = mysqli_connect('localhost', 'root','');
$db = mysqli_select_db($connect, 'cadastro');

  if (isset($login) && isset($senha)){
    $delete = mysqli_query($connect, "DELETE FROM usuario_acesso WHERE login = '$login' AND senha = '$senha'");
    $delete2 = mysqli_query($connect, "DELETE FROM usuario WHERE login = '$login'");

    if (mysqli_num_rows($delete) <= 0)
    {
      echo"<script language='javascript' type='text/javascript'> alert('Usuario não encontrado'); window.location.href='../php/menu_delete.php';</script>";
      die();
    }
  else
    echo"<script language='javascript' type='text/javascript'> alert('Usuario deletado com sucesso'); window.location.href='../php/users.php';</script>";
  }
?>