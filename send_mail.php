<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $name = $_POST['name'];
  $email = $_POST['email'];   // je mail pathaibo tar mail ta aikhane hobe
  
    $recipient = "webd0011@gmail.com";   // amar mail ta ami nije
  
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Basic validation (more can be added)
  if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo "Please fill out all fields.";
    exit;
  }

  // Send the email using PHP mail function (configure your mail server settings)
  $headers = "From: $name <$email>";
  $success = mail($recipient, $subject, $message, $headers);     // recipient holo ami nije

  if ($success) {
    echo "Email sent successfully!";
  } else {
    echo "Error sending email. Please try again.";
  }

} else {
  // Redirect or show an error message if accessed directly
  echo "Invalid request.";
}

?>