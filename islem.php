<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/phpmailer/src/Exception.php';
require 'phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/phpmailer/src/SMTP.php';

if (!($_POST['ad']) || !($_POST['soyad']) || !($_POST['eposta']) || !($_POST['tel']) || !($_POST['sehir']) || !($_POST['mesaj']) ) {

echo "eksik bilgi girdiniz";

}
 else
{
   $ad=     strip_tags(htmlspecialchars($_POST['ad']));
   $soyad=  strip_tags( htmlspecialchars($_POST['soyad']));
   $eposta= strip_tags(htmlspecialchars( $_POST['eposta']));
   $tel=    strip_tags( htmlspecialchars( $_POST['tel']));
   $sehir=  strip_tags(htmlspecialchars( $_POST['sehir']));
   $mesaj=  strip_tags( htmlspecialchars( $_POST['mesaj']));



$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';  // mail host sağlayıcısı                 
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'test@test.com';     // mailin kim tarafından gönderileceği              
    $mail->Password   = 'test123';      //smtp şifresi                     
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465; 
    $mail->CharSet = 'UTF-8';
   
                                        

    //Recipients
    $mail->setFrom('test@test.com', 'mail konu');
    $mail->addAddress('alıcı@alıcı.com', 'mail de yazan isim');    
             
    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'İletişim Formu';
    $mail->Body    = 'Adı:'.$ad."<br>".'Soyadı:'.$soyad."<br>".'Eposta:'.$eposta."<br>".'Telefon:'.$tel."<br>".'Şehir:'.$sehir."<br>".'Mesaj:'.$mesaj;
 

    $mail->send();
    $mail->send();
    echo 'Mail iletildi';
} catch (Exception $e) {
    echo "Mail gönderilemedi : {$mail->ErrorInfo}";
}
}

?>