<?php
if (isset(($_POST['Name']) && ($_POST['Email']) && ($_POST['Phone']) && ($_POST['Subject']) && ($_POST['Address']) && ($_POST['Description'])){
$name =$_POST['Name'];
$email=$_POST['Email'];
$to= 'infoaceusmle@gmail.com';
$subject= "New Enquiry";
$body = <html>
            <body>
                <hr>
                <p> Name:<br>'.$name.'</p>
                <p> Email:<br>'.$email.'</p>
            </body>
          </html>';
 
 $headers = "From: ".$name." <".$email.">\r\n";
 $headers = "Reply-To: ".$email."\r\n";
 $headers = "NINE-Version: 1.0\r\n";
 $headers = "Content-type: text/html; charset=utf-8";
 
 $send = mail($to, $subject, $body, $headers);
 
 if($send){
    echo '<br>';
    echo 'Thanks for Contacting';
}
else{
echo 'error';

}
}
?>
