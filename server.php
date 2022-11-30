<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With');

$todoList_text = file_get_contents('./data.json');
$todoList = json_decode($todoList_text, true);

$newTODO = $_POST['newTODO'] ?? false;

if($newTODO){
    $toADD = [
        'text' => $newTODO,
        'done' => false
    ];

    array_push($todoList, $toADD);

    file_put_contents('./data.json', json_encode($todoList));

}else{
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($todoList, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
}