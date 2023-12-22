<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data
    $name = htmlspecialchars($_POST["landing-enquiry-name"]);
    $email = htmlspecialchars($_POST["landing-enquiry-email"]);
    $projectDetails = htmlspecialchars($_POST["landing-enquiry-additional-requirements"]);

    // Set the recipient email address
    $to = "saravanan200189@gmail.com";

    // Set the subject of the email
    $subject = "New Project Estimate Request";

    // Compose the email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Project Details:\n$projectDetails";

    // Set additional headers
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $message, $headers);

    // For demonstration purposes, you can also echo a success message
    echo "<h2>Thank you for your submission, $name!</h2>";
    echo "<p>Your email address: $email</p>";
    echo "<p>Project details: $projectDetails</p>";
    exit();
}
?>
