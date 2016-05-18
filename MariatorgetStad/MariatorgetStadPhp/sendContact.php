<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-18
 * Time: 18:57
 */

if (isset($_POST['EmailAdress'], $_POST['Subject'], $_POST['Message'])) {

    date_default_timezone_set('Etc/UTC');
    require 'php/PHPMailerAutoload.php';
//Create a new PHPMailer instance
    $mail = new PHPMailer;
//Tell PHPMailer to use SMTP
    $mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 3;
//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
//Set the hostname of the mail server
    $mail->Host = "send.one.com";
//Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 465;
//Whether to use SMTP authentication
    $mail->SMTPAuth = true;
//Username to use for SMTP authentication
    $mail->Username = "contact@mariatorgetstad.se";
//Password to use for SMTP authentication
    $mail->Password = "123456789";
//Set who the message is to be sent from
    $mail->setFrom($_POST['EmailAdress'], 'First Last');
//Set an alternative reply-to address
    $mail->addReplyTo($_POST['EmailAdress'], 'First Last');
//Set who the message is to be sent to
    $mail->addAddress('linusekdahl@gmail.com', 'John Doe');
//Set the subject line
    $mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//Replace the plain text body with one created manually
    $mail->Body = $_POST['Message'];
//send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }



} else {
    //header('Location: ../../Contact.php');
    echo $_SERVER["REQUEST_METHOD"] . $_POST['submit'];
echo $_GET['EmailAdress'] . ", " . $_POST['Subject'] . ", " .  $_POST['Message'];
    /*
     * var email = "linusekdahl@gmail.com";

                var body = "<p>Email From: {0} (Subject: {1})</p><p>Message:</p><p>{2}</p>";
                var message = new MailMessage();
                message.To.Add(new MailAddress(email));
                message.Subject = model.Subject;
                message.From = new MailAddress(model.EmailAdress);
                message.Body = string.Format(body, model.EmailAdress, model.Subject, model.Message);
                message.IsBodyHtml = true;

                using (var client = new SmtpClient())
                {
                    client.Host = "send.one.com";
                    client.Port = 465;
                    client.EnableSsl = false;
                    client.Credentials = new NetworkCredential("contact@mariatorgetstad.se", "123456789");


                    await client.SendMailAsync(message);
                    return RedirectToAction("Index");
                }
     * */
}