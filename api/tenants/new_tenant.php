<?php 

// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once('../../init/initialization.php');

$d = new DateTime();

$data = array();

$tenants = new Tenants();

if($_POST['password'] !== $_POST['confirm']){
    $data['message'] = "errorPassword";
    echo json_encode($data);
    die();
}

$tenants->tenants_fullnames = $_POST['fullnames'];
$tenants->tenants_image = 'noimage.png';
$tenants->tenants_phone = $_POST['phone'];
$tenants->tenants_email = $_POST['email'];


// check if the tenant email exists
$check_tenant_email = $tenants->find_by_email($tenants->tenants_email);

if($check_tenant_email){
    $data['message'] = "emailExists";
    echo json_encode($data);
    die();
}

$tenants->tenants_dob = $d->format("Y-m-d");
$tenants->tenants_gender = "NULL";
$tenants->tenants_education = "NULL";
$tenants->tenants_address = $_POST['address'];
$tenants->tenants_location = $_POST['location'];
$tenants->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$tenants->confirm_password = password_hash($_POST['confirm'], PASSWORD_DEFAULT);
$tenants->forgot_code = "NULL";
$tenants->created_date = $d->format("Y-m-d H:i:s");
$tenants->edited_date = $d->format("Y-m-d H:i:s");

$to_mail = "";
$username = "";
$message = "";

if($tenants->save()){
    // find current tenant
    $current_tenant = $tenants->find_by_id($tenants->id);
    $to_mail = $tenants->tenants_email;
    $username = $tenants->tenants_fullnames;
    $message = "<p>You have successfully created an account with Webkeja</p>";
    $message .= "<hr/>";
    $message .= '<img src="'.public_url().'storage/logo/logo.png" alt="Logo" width="100"/>';
    $data['message'] = "tenantCreated";
}

// Instantiation and passing `true` enables exception
$mail = new PHPMailer(true);

// send email after signing up 
$sendMail = new SendMail($mail);

if($data['message'] == "tenantCreated"){
    // define the mail values 
    $sendMail->from = 'stevekama@mail.com';
    $sendMail->from_username = 'Webkeja';
    $sendMail->to = $to_mail;
    $sendMail->to_username = $username;
    $sendMail->subject = 'Welcome To Webkeja';
    $sendMail->message = $message;
    // time email was send
    $sendMail->sendtime = $d->format('Y-m-d H:i:s');

    if($sendMail->send_mail()){
        // save email 
        if($sendMail->save()){
            $data['message'] = 'success';
            echo json_encode($data);
            die();
        }
    }
    $data['message'] = 'failed';
    $data['error'] = $sendMail->send_mail();
    echo json_encode($data);
}