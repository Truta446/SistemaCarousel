<?php
    require_once("conexao.php");
    
    $sql = "SELECT * FROM album_fotos";

    $stmt = $mysqli->query($sql);
    $data = array();

    while($row = $stmt->fetch_assoc()){
        foreach($row as $key => $val){
            $val = is_null($val) ? '' : $val;
            $d["$key"] = $val;
        }
        array_push($data, $d);	
    }

    $stmt->close();
