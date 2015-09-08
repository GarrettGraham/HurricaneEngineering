<?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'Contact Form'; //from whom?
    $to =  'ganderson7197@icloud.com';//'inquiry@hurricanegroup.com' Hurricane email address
    $subject = 'Project Inquiry for Hurricane Design Build Group';

    $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Message: \n $message";

    //check if name has been entered
    if (!$_POST['name']) {
      $errName ='Please enter your name';
    }

    //check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }

    //check if phone has been entered
    // may need to add a script to check if a valid telephone #
    if (!$_POST['phone']) {
      $errPhone = 'Please enter a valid phone number';
    }

    //check if a message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }

//if there are no errors, send the email
if (!$errName && !$errName && !$errPhone && !$errMessage) {
  if (mail ($to, $subject, $body, $from)) {
    $result = '<div class="alert alert-success">Thank you for your interest! </div>';
  } else {
    $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
  }
}
  }
 ?> */
