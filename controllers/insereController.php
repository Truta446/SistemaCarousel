<?php 
    function insereImagens()
    {
        $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        var_dump($_POST);
        /* $diretorio = "../imagens/";
        $arquivos = $_FILES['arquivos'];

        $quantidade = count($arquivos['name']);

        for ($i = 0; $i < $quantidade; $i++) {
            if (!move_uploaded_file($arquivos['tmp_name'][$i],$diretorio.$arquivos['name'][$i])) {
                echo "Erro ao enviar o arquivo: " . $arquivos['name'][$i];
            }
        } 
        echo "Arquivos enviados com sucesso"; */
    }

    insereImagens();