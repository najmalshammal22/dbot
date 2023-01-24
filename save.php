<?php
$save = json_decode(file_get_contents("save.json"),1);
echo json_encode($save["az"]["0"]["ans"]);