<?php 
   namespace Classes\Support;
   use Exception;
   use PHPMailer\PHPMailer\PHPMailer;
   use stdClass;

   class Email{
       /** @var PHPMailer */
       private $mail;
       /** @var stdClass */
       private $data;
       /** @var Exception */
         private $error;

         public function __construct()
         {
             $this->mail = new PHPMailer(true);
             $this->data = new stdClass();
             $this->mail->isSMTP();
             $this->mail->isHTML();
             $this->mail->setLanguage('br');
             $this->mail->SMTPAuth = true;
             $this->mail->SMTPSecure ="tls";
             $this->mail->CharSet = "utf-8";
             $this->mail->Host = MAIL['host'];
             $this->mail->Port = MAIL['port'];
             $this->mail->Username = MAIL['user'];
             $this->mail->Password = MAIL['pwd'];
         }
         public function add(string $subject, string $body, string $recipient_name, string $recipient_mail)
         {
               $this->data->subject = $subject;
               $this->data->body = $body;
               $this->data->recipient_name = $recipient_name;
               $this->data->recipient_mail = $recipient_mail;
               return $this;
         }

         public function send(string $from_name= MAIL['from_name'], string $from_mail= MAIL['from_email']){
             try{
                 $this->mail->Subject = $this->data->subject;
                 $this->mail->msgHTML($this->data->body);
                 $this->mail->addAddress($this->data->recipient_mail, $this->data->recipient_mail);
                 $this->mail->setFrom($from_mail,$from_name);
                  $this->mail->send();
             }catch(Exception $error){
                    $this->error = $error;
                    return false;
             }
         }

         public function error(){
              return $this->error;
         }
   }
