<?php
    session_start();
    if (isset($_POST['CNPJ']) && isset($_POST['IM']) && isset($_POST['telefone']) && isset($_POST['CEP']) && isset($_POST['Estado']) && isset ($_POST['endereco']) && isset($_POST['endereco']) && isset($_POST['complemento']) && isset($_POST['RS']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['bairro']) && isset( $_POST['numero']))
    {
        $_SESSION['CNPJEmpresa'] = $_POST['CNPJ'];
        $_SESSION['IMEmpresa'] = $_POST['IM'];
        $_SESSION['telefoneEmpresa'] = $_POST['telefone'];
        $_SESSION['CEPEmpresa']  = $_POST['CEP'];
        $_SESSION['EstadoEmpresa'] = $_POST['Estado'];
        $_SESSION['enderecoEmpresa'] = $_POST['endereco'];
        $_SESSION['complementoEmpresa'] = $_POST['complemento']; 
        $_SESSION['RSEmpresa'] = $_POST['RS'];
        $_SESSION['nomeEmpresa'] =  $_POST['nome'];
        $_SESSION['emailEmpresa'] = $_POST['email'];
        $_SESSION['cidadeEmpresa'] = $_POST['cidade'];
        $_SESSION['bairroEmpresa'] = $_POST['bairro'];
        $_SESSION['numeroEmpresa'] = $_POST['numero'];
    }
?>

<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
        <link href= "../css/style3.css" rel="stylesheet">
        <script src="../js/functions.js"></script>

        <title>Terceira Página</title>
    </head>
    <body>
        <section class="dados">
            <p class="termos">Confira os dados informados abaixo e verifique se está tudo correto. Se estiverem, é só marcar a caixinha logo abaixo e começar a trabalhar conosco!</p>
            <h2>Dados da Empresa:</h2>
                <label>Nome do Dono: <?php echo $_SESSION['nomeDonoDaEmpresa'] ?></label><br><br>
                <label>E-mail do dono: <?php echo $_SESSION['emailDonoDaEmpresa'] ?></label><br><br>
                <label>Celular do dono: <?php echo $_SESSION['celularDonoDaEmpresa'] ?></label><br><br>

                <label>CNPJ: <?php echo $_SESSION['CNPJEmpresa'] ?></label><br><br>
                <label>Inscrição Municipal: <?php echo $_SESSION['IMEmpresa'] ?></label><br><br>
                <label>Telefone Comercial: <?php echo $_SESSION['telefoneEmpresa'] ?></label><br><br>
                <label>CEP: <?php echo $_SESSION['CEPEmpresa'] ?></label><br><br>
                <label>Estado: <?php echo $_SESSION['EstadoEmpresa'] ?></label><br><br>
                <label>Endereço: <?php echo $_SESSION['enderecoEmpresa'] ?></label><br><br>
                <label>Complemento: <?php echo $_SESSION['complementoEmpresa'] ?></label><br><br>
                <label>Razão Social: <?php echo $_SESSION['RSEmpresa'] ?></label><br><br>
                <label>Nome: <?php echo $_SESSION['nomeEmpresa'] ?></label><br><br>
                <label>E-mail: <?php echo $_SESSION['emailEmpresa'] ?></label><br><br>
                <label>Cidade: <?php echo $_SESSION['cidadeEmpresa'] ?></label><br><br>
                <label>Bairro: <?php echo $_SESSION['bairroEmpresa'] ?></label><br><br>
                <label>Número: <?php echo $_SESSION['numeroEmpresa'] ?></label><br><br>
                <input type="checkbox" name="termos" id="termos">
                <span>Confirmo que os dados informados estão corretos e que aceito com a <b>Política de Privacidade</b>.</span>
                <br>
                <input type="button" value="VOLTAR" name="voltar" onclick="RetornarParaPaginaAnterior(2)">
                <input type="button" value="CONCLUIR" name="concluir" id="concluir" onclick="ConcluirCadastro()">
        </section>
    </body>
</html>