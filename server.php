<?php

$string = file_get_contents('dischi.json');
$cd_list = json_decode($string, true);

header('Content-Type: application/json');

echo json_encode($cd_list);
