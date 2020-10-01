<?php 

require_once(INIT_PATH.DS.'initialization.php');

class SendMail{
    private $mail;

    private $table_name = "mail";

    // bring in db params
    public $id; 
    // bring in the message from and to 
    public $from;
    public $from_username;
    public $to;
    public $to_username;
    public $subject;
    public $message;    
    public $attachment;
    public $sendtime;

    public function __construct($mail)
    {
        $this->mail = $mail;
        // conect to db 
        global $database;
        $this->conn = $database->connect();
    }

    public function send_mail()
    {

        try{
            // Server settings
            $this->mail->SMTPDebug = 0;                      // Enable verbose debug output
            $this->mail->isSMTP();                                            // Send using SMTP
            $this->mail->Host       = 'smtp.mail.com';                       // Set the SMTP server to send through
            $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $this->mail->Username   = 'stevekama@mail.com';                     // SMTP username
            $this->mail->Password   = 'ci/05041/2013';                               // SMTP password
            $this->mail->SMTPSecure = 'TLS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $this->mail->Port       = 587;            // TCP port to connect to         // TCP port to connect to

             //Recipients
            $this->mail->setFrom($this->from, $this->from_username);
            $this->mail->addAddress($this->to, $this->to_username);     // Add a recipient
            $this->mail->addAddress($this->to);                         // Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            $this->mail->addCC('stevekamahertz@gmail.com');
            // $mail->addBCC('bcc@example   .com');

            // Attachments
            if(!empty($this->attachment)){
                $this->mail->addAttachment($this->attachment);         // Add attachments
            }
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $this->mail->isHTML(true);                                  // Set email format to HTML
            $this->mail->Subject = $this->subject;
            $this->mail->Body    = $this->message;
            $this->mail->AltBody = '<hr>';

            if($this->mail->send()){
                return true;
            }
        }catch (Exception $e) {
            return $this->mail->ErrorInfo;
        }
    }

    public function save()
    {
        $query = "";
        if(empty($this->id)){
            $query .= "INSERT INTO ".$this->table_name."(";
            $query .= "from_email, from_username, ";
            $query .= "to_email, to_username, ";
            $query .= "subject, message, sendtime";
            $query .= ")VALUES(";
            $query .= ":from_email, :from_username, ";
            $query .= ":to_email, :to_username, ";
            $query .= ":subject, :message, :sendtime";
            $query .= ")";
        }else{
            $query .= "UPDATE ".$this->table_name." SET ";
            $query .= "from_email = :from_email, from_username = :from_username, ";
            $query .= "to_email = :to_email, to_username = :to_username, ";
            $query .= "subject = :subject, message = :message, sendtime = :sendtime";
            $query .= "WHERE id = :id";
        }
        // prepare query 
        $stmt = $this->conn->prepare($query);

        // clean up data
        if(!empty($this->id)){
            $this->id = htmlentities($this->id);
        }
        $this->from = htmlentities($this->from);
        $this->from_username = htmlentities($this->from_username);
        $this->to = htmlentities($this->to);
        $this->to_username = htmlentities($this->to_username);
        $this->subject = htmlentities($this->subject);
        $this->message = htmlentities($this->message);
        $this->sendtime = htmlentities($this->sendtime);

        // bindParam
        if(!empty($this->id)){
            $stmt->bindParam(':id', $this->id);
        }
        $stmt->bindParam(':from_email', $this->from);
        $stmt->bindParam(':from_username', $this->from_username);
        $stmt->bindParam(':to_email', $this->to);
        $stmt->bindParam(':to_username', $this->to_username);
        $stmt->bindParam(':subject', $this->subject);
        $stmt->bindParam(':message', $this->message);
        $stmt->bindParam(':sendtime', $this->sendtime);
        
        // execute query 
        if($stmt->execute()){
            if(empty($this->id)){
                $this->id = $this->conn->lastInsertId();
            }
            return true;
        }
    }

}