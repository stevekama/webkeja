<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

require_once('../../init/initialization_migration.php');

$mail_migration = new Mail_migration();

// create table
if($_POST['action'] == "CREATE_TABLE"){
    $table = $mail_migration->create();
    if($table){
        $data['message'] = "success";
    }
    echo json_encode($data);
}

// destroy table
if($_POST['action'] == "DELETE_TABLE"){
    $table = $mail_migration->drop();
    if($table){
        $data['message'] = "success";
    }

    echo json_encode($data);
}