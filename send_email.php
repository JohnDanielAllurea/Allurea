<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form fields data
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // Email address to send the form submission
  $to = "johndaniel.at.allurea@gmail.com";

  // Email subject
  $subject = "New Contact Form Submission";

  // Email content
  $email_content = "First Name: $firstname\n";
  $email_content .= "Last Name: $lastname\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Phone: $phone\n";
  $email_content .= "Message:\n$message\n";

  // Email headers
  $headers = "From: $firstname $lastname <$email>";

  // Send email
  mail($to, $subject, $email_content, $headers);

  // Redirect to thank you page
  header("Location: thank_you.html");
}
?>
