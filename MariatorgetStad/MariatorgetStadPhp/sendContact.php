<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-18
 * Time: 18:57
 */
 


if (isset($_POST['EmailAdress'], $_POST['Subject'], $_POST['Message'])) {

$to  = 'contact@mariatorgetstad.se';

// subject
$subject = 'En ny kontakt har inkommit.';
@$ExtraText = '';
 if ($_POST['Maintenance'] === 'true') {
$ExtraText = $ExtraText . '<p>Förfrågan har klickat i Underhåll</p>';
}
 if ($_POST['Cleaning'] === 'true') {
$ExtraText = $ExtraText . '<p>Förfrågan har klickat i Städning</p>';
}
// message
$message = '
<html>
<head>
  <title>' . $_POST['Subject'] . '</title>
</head>
<body> '
 . $ExtraText .
'
  <table>
    <tr>
      <th>Meddelande:</th>
    </tr>
    <tr>
      <td> ' . $_POST['Message'] . ' </td>
    </tr>

  </table>
</body>
</html>
';


// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Additional headers
$headers .= 'To: ' . $to .  "\r\n";
$headers .= 'From: ' . $_POST['EmailAdress'] .  "\r\n";
$headers .= 'Cc: contact@mariatorgetstad.se' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);

header('Location: Thankyou.php');
} else {
    header('Location: Contact.php');
   // echo $_SERVER["REQUEST_METHOD"] . $_POST['submit'];
//echo $_GET['EmailAdress'] . ", " . $_POST['Subject'] . ", " .  $_POST['Message'];
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