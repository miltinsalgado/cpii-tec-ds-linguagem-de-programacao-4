function ConcluirCadastro()
{
    var checkbox = document.getElementById("termos");

    if (checkbox.checked == true)
        window.location.href = "../html/page1.html";
        
    else
        alert("Para concluir o cadastro da empresa, aceite os termos e condições marcando a CheckBox!");
}

function RetornarParaPaginaAnterior(pagina)
{
    if (pagina == 1)
        window.location.href = "../html/page1.html";

    else if (pagina == 2)
        window.location.href = "../php/page2.php";
}