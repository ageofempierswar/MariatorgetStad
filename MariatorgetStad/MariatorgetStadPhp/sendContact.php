<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-18
 * Time: 18:57
 */



if (isset($_POST['EmailAdress'], $_POST['Subject'], $_POST['Message'])) {

    $to  = 'linusekdahl@gmail.com'; //contact@mariatorgetstad.se

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
}