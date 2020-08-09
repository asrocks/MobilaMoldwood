<?php


class WebitechMailer{
    private $mailServer = 'smtp.gmail.com';//'mail.hostico.ro';
    private $mailAdress = 'senderwebitech@gmail.com';//'tester@mobila.moldwood.ro';
    private $mailPasswd = 'WSXR4231#';//'E..z-o22NyHa';
    private $destAdress = '';
    public function setDestAdress($destAdressInp){
        $this->destAdress = $destAdressInp;
    }
    public function sendMail($name, $subject, $filename){
        ini_set('SMTP', $this->mailServer);
        $to = $this->destAdress;

        $from = $this->mailAdress;
        $fromName = 'Webitech Mail Service';

        $subject = $subject.' din partea domnului/doamnei '.$name;

        $file = __DIR__."/".$filename.".pdf";

        $htmlContent = ' 
    <h3>E-Mail generat automat impreuna cu PDF de raspuns</h3> 
    <p>Acest mail v-a fost trimis automat impreuna cu un PDF generat automat.</p> 
';

        $headers = "From: $fromName"." <".$from.">";

        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

        if(!empty($file) > 0){
            if(is_file($file)){
                $message .= "--{$mime_boundary}\n";
                $fp =    @fopen($file,"rb");
                $data =  @fread($fp,filesize($file));

                @fclose($fp);
                $data = chunk_split(base64_encode($data));
                $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .
                    "Content-Description: ".basename($file)."\n" .
                    "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .
                    "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            }
        }
        $message .= "--{$mime_boundary}--";
        $returnpath = "-f" . $from;

        $mail = @mail($to, $subject, $message, $headers, $returnpath);

        echo $mail?"<h1>Email Sent Successfully!</h1>":"<h1>Email sending failed.</h1>";
    }
}