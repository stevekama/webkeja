<?php

// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

require_once('../../init/initialization.php');

$d = new DateTime();

$data = array();

$tenants = new Tenants();

$email = htmlentities($_POST['email']);

$password = htmlentities($_POST['password']);

$current_tenant = $tenants->authenticate_tenant($email, $password);

if($current_tenant){
    $type = "TENANT";
    $session->login($current_tenant, $type);
    if($session->is_logged_in()){
        $data['message'] = "success";   
    }
}else{
    $data['message'] = "errorTenant";
}

echo json_encode($data);