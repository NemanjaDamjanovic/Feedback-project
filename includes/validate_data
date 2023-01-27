<?php

$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

if(isset($_POST['submit'])) {
  
  // Validate name
  if(empty($_POST['name'])) {
    $nameErr = 'Name is required';
  } else {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  // Validate email
  if(empty($_POST['email'])) {
    $emailErr = 'Email is required';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  // Validate body
  if(empty($_POST['body'])) {
    $bodyErr = 'Feedback is required';
  } else {
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }


if(empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
  
  // Add to database
  $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";

  if(mysqli_query($connect, $sql)) {

    // Pass
    header('Location: feedback.php');
  } else {
    echo 'Error: ' . mysqli_error($conn);
  }
}
}

?>
