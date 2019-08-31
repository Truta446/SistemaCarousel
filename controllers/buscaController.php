<?php
    require_once("conexao.php");
    
    $sql = "SELECT * FROM album_fotos WHERE id_foto = 1";

    $stmt = $mysqli->query($sql);
    $data = array();

    while($row = $stmt->fetch_assoc()){
        foreach($row as $key => $val){
            if (is_null($val))
                $val = '';
                $d["$key"] = $val;
            }
        array_push($data, $d);	
    }

    $stmt->close();

    echo json_encode($data);

