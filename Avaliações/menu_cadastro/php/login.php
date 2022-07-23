<?php
$login = $_POST['username'];
$senha = $_POST['password'];

$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect, 'cadastro');
  if (isset($login) && isset($senha))
  {
    $check = mysqli_query($connect,"SELECT * FROM usuario_acesso WHERE login ='$login' AND senha = '$senha'");
      if (mysqli_num_rows($check)<=0)
      {
        echo"<script language='javascript' type='text/javascript'> alert('Nome de usuário e/ou senha incorretos'); window.location.href='../html/index.html';</script>";
        die();
      }
      else
      {
          $checkADM = mysqli_query($connect,"SELECT * FROM usuario_acesso WHERE login ='$login' AND senha = '$senha' AND administrador=1");
          setcookie("username", $login);

          if (mysqli_num_rows($checkADM)==1)
            header("Location:menu_adm.php");
          
          else
            header("Location:menu_default.php");
      }
  }
?>