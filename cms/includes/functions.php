<?php
// Sanitize user input
function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Save contact form submission to DB
function saveContact($connection, $name, $email, $subject, $message) {
    if (!$connection) return false;
    $name    = mysqli_real_escape_string($connection, $name);
    $email   = mysqli_real_escape_string($connection, $email);
    $subject = mysqli_real_escape_string($connection, $subject);
    $message = mysqli_real_escape_string($connection, $message);

    $sql = "INSERT INTO contacts (name, email, subject, message, created_at)
            VALUES ('$name', '$email', '$subject', '$message', NOW())";
    return mysqli_query($connection, $sql);
}
?>