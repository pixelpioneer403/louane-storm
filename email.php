<?php
include('smtp/PHPMailerAutoload.php');

class EmailSender {
    private $mail;
    private $password;
    protected $client_email;

    public function __construct() {
        $this->mail = new PHPMailer();
        $this->password = "enter_password_here";
        $this->client_email = "enter_email_here";
        $this->configureSMTP();
    }

    protected function configureSMTP() {
        $this->mail->IsSMTP();
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = 'tls';
        $this->mail->Host = "smtp.gmail.com";
        $this->mail->Port = 587;
        $this->mail->CharSet = 'UTF-8';
        $this->mail->SMTPOptions = array('ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        ));
    }

    protected function sendEmail($subject, $msg) {
        $this->mail->IsHTML(true);
    
        if ($this->client_email !== null) {
            $this->mail->Username = $this->client_email;
            $this->mail->Password = $this->password;
            $this->mail->SetFrom($this->client_email);
            $this->mail->Subject = $subject;
            $this->mail->Body = $msg;
            
            if (filter_var($this->client_email, FILTER_VALIDATE_EMAIL)) {
                $this->mail->AddAddress($this->client_email);
            } else {
                echo "Invalid client email address";
                return false;
            }
    
            if (!$this->mail->Send()) {
                echo $this->mail->ErrorInfo;
                return false;
            } else {
                return true;
            }
        } else {
            echo "Client email address is null";
            return false;
        }
    }
}

class FormHandler extends EmailSender {
    private $emailSender;

    public function __construct(EmailSender $emailSender) {
        $this->emailSender = $emailSender; 
    }

    public function processForm($fullname, $email, $message) {
        // Validate form data
        if ($this->validateForm($fullname, $email, $message)) {
            // Send email
            $subject = "Contact Form Submission";
            $msg = "Full Name: $fullname<br>Email: $email<br>Message: $message";

            if ($this->emailSender->sendEmail($subject, $msg)) {
                $response = ["status" => true, "message" => "Email sent successfully"];
            } else {
                $response = ["status" => false, "message" => "Failed to send email"];
            }
        } else {
            $response = ["status" => "validationerror", "message" => "Form validation failed"];
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }

    private function validateForm($fullname, $email, $message) {
        if (empty($fullname) || empty($email) || empty($message)) {
            return false;
        }

        return true;
    }
}

// Usage
$emailSender = new EmailSender();
$formHandler = new FormHandler($emailSender);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $formHandler->processForm($fullname, $email, $message);
}
?>
