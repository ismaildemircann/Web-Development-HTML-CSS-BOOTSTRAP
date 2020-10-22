<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "ismaildemircann98@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = 'message';
    // $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);
    
    header('Location: https://ismaildemircann.github.io/Web-Development-HTML-CSS-BOOTSTRAP/EdgeLedger%20Website/success.html');
  }