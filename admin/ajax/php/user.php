<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//create course type
if (isset($_POST['create'])) {

    $USER = new User(NULL);
    $USER->create($_POST['name'], $_POST['type'],1, $_POST['email'], $_POST['username'], $_POST['password']);

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

//update course type
if (isset($_POST['update'])) {

    $USER = new User($_POST['id']);

    $USER->name = $_POST['name'];
    $USER->type = $_POST['type'];
    $USER->email = $_POST['email'];
    $USER->username = $_POST['username'];
    

    $USER->update();
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}
