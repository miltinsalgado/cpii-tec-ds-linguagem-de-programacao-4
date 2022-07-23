<?php
    session_start();
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['celular']))
    {
        $_SESSION['nomeDonoDaEmpresa'] = $_POST['nome'];
        $_SESSION['emailDonoDaEmpresa'] = $_POST['email'];
        $_SESSION['celularDonoDaEmpresa'] = $_POST['celular'];
    }
?>

<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
        <link href= "../css/style2.css" rel="stylesheet">
        <script src="../js/functions.js"></script>

        <title>Segunda Página</title>
    </head>
    <body>
        <section class="form">
            <form method="post" action="../php/page3.php">
                <h2>Informações Essenciais</h2>
                <p class="termos">Para realizar o cadastro, precisaremos de algumas informações para armazenar em nossa base de dados.</p>
                    <div class="left">
                        <p>CNPJ</p>
                        <input type="text" name="CNPJ" maxlength="14" placeholder="CNPJ da empresa" required>
                        <p>Inscrição Municipal</p>
                        <input type="text" name="IM" maxlength="9" placeholder="Inscrição Municipal da empresa" required>
                        <p>Telefone Comercial</p>
                        <input type="text" name="telefone" maxlength="11" placeholder="XX XXXXXXXX" required pattern="[0-9]{2} [0-9]{8}">
                        <p>CEP</p>
                        <input type="text" name="CEP" maxlength="8" placeholder="CEP da empresa" required>
                        <p>Estado</p>
                        <select name="Estado" required>
                            <option value="">Selecione um Estado</option>
                            <option value="AC">Acre</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazônia</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="DF">Distrito Federal</option>
                        </select>
                        <p>Endereço<p>
                        <input type="text" name="endereco" placeholder="Endereço da empresa" required>
                        <p>Complemento (opcional)<p>
                        <input type="text" name="complemento" placeholder="Complemento do endereço da empresa">
                        <input type="button" name="voltar" value="VOLTAR" onclick="RetornarParaPaginaAnterior(1)">
                    </div>
                    <div class="right">
                        <p>Razão Social</p>
                        <input type="text" name="RS" placeholder="Razão Social da empresa" required>
                        <p>Nome</p>
                        <input type="text" name="nome" placeholder="Nome da empresa" required>
                        <p>E-mail</p>
                        <input type="email" name="email" placeholder="E-mail da empresa" required>
                        <p>Cidade</p>
                        <input type="text" name="cidade" placeholder="Cidade da empresa" required>
                        <p>Bairro</p>
                        <input type="text" name="bairro" placeholder="Bairro da empresa" required>
                        <p>Número</p>
                        <input type="number" min=1 name="numero" placeholder="Número da empresa" required>
                        <input type="submit" name="prosseguir" value="PROSSEGUIR">
                        <br><br><br><br>
                    </div>
            </form>
        </section>
    </body>
</html>