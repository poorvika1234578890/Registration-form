<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $webinar = htmlspecialchars($_POST['webinar']);
    
    // Here you could store the data into a database, or send an email

    // For demonstration, we'll just display a success message.
    echo "<h2>Registration Successful</h2>";
    echo "<p>Thank you for registering, $name.</p>";
    echo "<p>A confirmation email has been sent to $email.</p>";
}
?>