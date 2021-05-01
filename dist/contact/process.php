<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "info@gesundheit-kg.de";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $counsel = $_POST['counsel'];
    
    //send email
    mail($admin_email, "Neue Kontaktaufnahme", $counsel, $subject . ' - ' . $message . ' - ' . $phone, "From:" . $email . $name);
    
    header('Location: http://gesundheit-kg.de/success.html');
  }