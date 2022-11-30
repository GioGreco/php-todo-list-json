<?php

$todoList = file_get_contents('./data.json');





header('Content-Type: application/json; charset=utf-8');
echo json_encode($todoList, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);

