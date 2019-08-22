<?php 
if (isset($_FILES['arquivos'])) {
    insereImagens();
} else {
    echo "Nenhum arquivo encontrado!";
}

if (isset($_POST['arquivos'])) {
    insereDados();
} else {
    echo "Nenhum arquivo encontrado!";
}

function insereDados()
{
    //$sql = "INSERT INTO carrossel.foto (nome, ) VALUES ($_POST['nome'], )";

    //$mysqli->query($sql);
}

function insereImagens()
{
    $diretorio = "../imagens/";
    $arquivos = $_FILES['arquivos'];

    $quantidade = count($arquivos['name']);

    for ($i = 0; $i < $quantidade; $i++) {
        if (!move_uploaded_file($arquivos['tmp_name'][$i],$diretorio.$arquivos['name'][$i])) {
            echo "Erro ao enviar o arquivo: " . $arquivos['name'][$i];
        }
    } 
    echo "Arquivos enviados com sucesso";
}

?>