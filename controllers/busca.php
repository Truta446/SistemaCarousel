<?php
require_once("conexao.php");

if(1) {
    $sql = "SELECT * FROM carrosel.pessoa WHERE id_pessoa = 1";
} else {
    $sql = "SELECT * FROM carrosel.foto WHERE id_foto = 1";
}

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
?>
