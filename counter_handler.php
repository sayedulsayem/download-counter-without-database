<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['data']) && $_GET['data'] == 'get') {
    echo file_get_contents('counter.json');
    die;
}

if ($_SERVER['REQUEST_METHOD'] == 'GET'  && isset($_GET['data']) && $_GET['data'] == 'increase') {
    $file_content = json_decode(file_get_contents('counter.json'), true);
    $file_content['download'] = ++$file_content['download'];
    file_put_contents('counter.json', json_encode($file_content));
    echo json_encode($file_content);
    die;
}
