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
if ($_POST['Flyttstädning'] === 'true') {
    $ExtraText = $ExtraText . '<p>Förfrågan har klickat i Flyttstädning</p>';
}
if ($_POST['Kontorsstädning'] === 'true') {
    $ExtraText = $ExtraText . '<p>Förfrågan har klickat i Kontorsstädning</p>';
}
 @$ExtraText = '';
 if ($_POST['Trappstädning'] === 'true') {
     $ExtraText = $ExtraText . '<p>Förfrågan har klickat i Trappstädning</p>';
 }
 if ($_POST['Fönsterputsning'] === 'true') {
     $ExtraText = $ExtraText . '<p>Förfrågan har klickat i Fönsterputsning</p>';
 }@$ExtraText = '';
 if ($_POST['Byggstädning'] === 'true') {
     $ExtraText = $ExtraText . '<p>Förfrågan har klickat i Byggstädning</p>';
 }
 if ($_POST['Polishbehandling'] === 'true') {
     $ExtraText = $ExtraText . '<p>Förfrågan har klickat i Polishbehandling</p>';
 }@$ExtraText = '';
 if ($_POST['Övrigt'] === 'true') {
     $ExtraText = $ExtraText . '<p>Förfrågan har klickat i Övrigt</p>';
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
$headers .= 'Cc: linusekdahl@gmail.com' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);

header('Location: Thankyou.php');
} else {
    header('Location: Contact.php');
}