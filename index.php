<?php

require_once 'db.php';
$config = require 'config.php';

try {
    $db = new DB($config);

    if ($_POST) {
        validate();
        if ($id = $db->saveComment($_POST)) {
            unset($_POST);
            echo $id;
        } else {
            throw new Exception('Comment save failed');
        }
    } else {
        $comments = $db->getComments();
        require 'template.php';
    }
}catch (Exception $e){
    http_response_code(500);
    echo $e;
}
function validate(){
    if(isset($_POST['name'])){
        if(strlen($_POST['name']) < 3){
            throw new Exception('Name must be longer');
        }
    }else{
        throw new Exception('Name dont set');
    }
    if(isset($_POST['mail'])){
        if(preg_match('/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/', $_POST['mail']) === false){
            throw new Exception('Email is not correct');
        }
    }else{
        throw new Exception('Mail dont set');
    }
    if(isset($_POST['text'])){
        if(strlen($_POST['text']) < 5){
            throw new Exception('Text must be longer');
        }
    }else{
        throw new Exception('Text dont set');
    }
}

