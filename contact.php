<?php

$name= $_REQUEST['Name'];
$email = $_REQUEST['Email'];
$address = $_REQUEST['Address'];
$phone = $_REQUEST['Phone'];
$subject = $_REQUEST['Subject'];
$description = $_REQUEST['Description'];

if(empty($name)||empty($email)||empty($address)||empty($phone)||empty($subject)||empty($description))
{
    echo "Please fill all the fields";
}
else
{
    mail("infoaceusmle@gmail.com", "New Enquiry", $address, $phone, $subject, "From: $name <$email>");
    echo "<script type='text/javascript'>alert('Your Message Sent Successfully');
    window.his.log(-1);
    </script>";
}

?>