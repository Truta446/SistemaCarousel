<?php 
    function insertImages() {
        $arquivos = $_FILES['file_image'];
        $diretorio = "../public/images/{$arquivos["name"]}";

        if (!move_uploaded_file($arquivos['tmp_name'], $diretorio)) {
            return [
                "message" => "Erro ao enviar o arquivo: {$arquivos['name']}.<br />Voltando para o cadastro...",
                "statusCode" => 0
            ];
        }

        return [
            "message" => "Imagem inserida com sucesso!<br /> Indo para a tela inicial.",
            "statusCode" => 1,
            "diretorio" => $diretorio
        ];
    }

    function saveData($diretorio) {
        $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        require_once("conexao.php");

        $sql = "INSERT INTO album_fotos (descricao_imagem, informacoes_imagem, caminho_imagem) VALUES ('{$post["description_image"]}', '{$post["info_image"]}', '{$diretorio}')";
        $mysqli->query($sql);
        $mysqli->close();
    }

    function insertDataImage() {
        $response = insertImages();

        saveData($response["diretorio"]);

        $location = $response["statusCode"] === 1 ? "../index.php" : "../views/cadastro.php" ;

        header("location: {$location}");
    }

    insertDataImage();