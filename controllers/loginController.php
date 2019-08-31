<?php
    function logar() {
        $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        $email = $post["email"];
        $password_view = hash("sha512", $post["password"]);

        $data = buscaSenha($email);

        $password_db = $data[0]["senha_pessoa"];

        if ($password_view === $password_db) {
            header("location: ../views/cadastro.php");
        } else {
            header("location: ../views/login.php");
        }
    }

    function buscaSenha($email) {
        require_once("conexao.php");

        $sql = "SELECT * FROM pessoa WHERE email_pessoa = '{$email}'";
        $stmt = $mysqli->query($sql);
        $data = array();

        while ($row = $stmt->fetch_assoc()) {
            foreach ($row as $key => $val) {
                $val = is_null($val) ? '' : $val;
                $d["$key"] = $val;
            }

            array_push($data, $d);	
        }

        $stmt->close();

        return $data;
    }

    logar();