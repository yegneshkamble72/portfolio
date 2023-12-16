<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Process and send the email (you'll need to configure your email settings here)
    $to = "contact@example.com";
    $subject = "Contact Form Submission";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Redirect the user to a thank you page
    header("Location: thank_you.html");
} else {
    // Handle invalid form submission
    echo "Invalid request";
}
?>
