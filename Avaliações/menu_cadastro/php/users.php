<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" lang="PT-BR">
        <title>Usuários</title>
        <link rel="shortcut icon" type="image/icon" href="../img/icone-usuarios.png"/>
        <link rel="stylesheet" type="text/css" href="">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="form">
            <h2>Gerenciar Usuários</h2>
            <form method="POST" action="../php/menu_sign_up.php">
                <input type="submit" id="sign_up" value="Cadastrar">
            </form>
            <form method="POST" action="../php/menu_update.php">
                <input type="submit" id="update" value="Atualizar">
            </form>
            <form method="POST" action="../php/menu_delete.php">
                <input type="submit" id="delete" value="Deletar">
            </form>
        </div>
    </body>
</html>