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
<html> 
    
    <head>
    <style>
        * {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color:#fe0100;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.form-container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding:20px;
}
        .col-sm-6{
            margin-left: 25%;
        }
        
        .navbar navbar-expand-sm bg-light justify-content-center{
            background-color: aqua;
        }
        
    </style>
    
    </head>
    
    <body>
<div class="form-container" >
        <form class="gform" action="contact.php">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="Name" placeholder="Your name..">

    <label for="address">Address</label>
   <input type="text" id="address" name="Address" placeholder="Your address..">

    <label for="email">Email</label>
    <input type="text" id="email" name="Email" placeholder="abc123@gmail.com"> 
            
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="Phone" placeholder="Contact No..">         
            
    <label for="subject">Subject</label>
    <textarea id="subject" name="Subject" placeholder="Subject here.." style="height:50px"></textarea>
                    
    <label for="description">Description</label>
    <textarea id="description" name="Description" placeholder="Type your message here.. " style="height:100px"></textarea>        
        

    <input type="submit" value="Submit" >
  </form>
    </div>
    </body></html>
