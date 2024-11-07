<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Simple validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        echo "<div class='message'>";
        echo "<h2>Thank you for contacting us, $name!</h2>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Message:</strong> $message</p>";
        echo "</div>";
    } else {
        echo "<p class='message' style='color: red;'>All fields are required!</p>";
    }
} else {
    echo "<p class='message' style='color: red;'>Please submit the form.</p>";
}
?>
