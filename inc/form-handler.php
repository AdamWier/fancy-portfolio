<?php 
require("./config/db.php");

$msg = "";

if (filter_has_var(INPUT_POST, "submit")) {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlentities($_POST["message"]);

  if (!empty($name) && !empty($email) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL === false)) {
      $msg = "Merci de revérifier votre email";
    } else {
      $toEmail = "wier.adam@gmail.com";
      $subject = "Contact Form";
      $body = "<h2>Contact form submitted</h2>
      <h4>Name</h4><p>$name</p>
      <h4>Email</h4><p>$email</p>
      <h4>Message</h4><p>$message</p>";

      $header = "MIME-Version: 1.0" . "\r\n";
      $header .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
      $header .= "From: " . $name . "<" . $email . ">" . "\r\n";

      if (mail($toEmail, $subject, $body, $header)) {
        $msg = "Votre email a été enovyé sans problème!";
        
        $sqlName = mysqli_real_escape_string($conn, $_POST["name"]);
        $sqlEmail = mysqli_real_escape_string($conn, $_POST["email"]);
        $sqlMessage = mysqli_real_escape_string($conn, $_POST["message"]);

        $query = "INSERT INTO submissions(name, email, message) VALUES('$sqlName', '$sqlEmail', '$sqlMessage')";

        mysqli_query($conn, $query);
      }
    }
  } else {
    $msg = "Merci de remplir tout le formulaire";
  }
}
?>