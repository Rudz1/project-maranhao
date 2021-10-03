<?php


namespace App\Models\Contact\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
/**
 * Description of Contact
 *
 * @author andre
 */
class ContactControler extends \Framework\Controller\Abstracts\BaseControler {
    public function contact() {
        $data['page'] = 'Contact/Views/contactView';
        $this->view('Public/Views/indexView', $data);
    }
    
    public function send(){
     
        $name = $_POST['name'];
        $surname = $_POST['surname'];  
        $email = $_POST['email'];
        $message = $_POST['message'];
        
         try {
            
            $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'nobloko80@gmail.com';
            $mail->Password = '';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            //Recipients
            $mail->setFrom($email);
            $mail->addAddress('nobloko80@gmail.com');

            //Content
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'Contato do Site de Cultura Maranhense';
            $mail->Body = 'Email de: '.$email.'<br>'.$name.' '.$surname.'<br>'.$message;
       
            $mail->send();
        } catch (\Exception $e) {
            throw new \Exception("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }
}
