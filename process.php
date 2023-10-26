<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Your email ($email) has been received, and we've recorded your message:</p>";
    echo "<blockquote>$message</blockquote>";
}
?>