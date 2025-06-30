<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Use null coalescing operator to avoid undefined key errors
    $name = mysqli_real_escape_string($conn, $_POST["footer-name"] ?? '');
    $email = mysqli_real_escape_string($conn, $_POST["footer-email"] ?? '');
    $message = mysqli_real_escape_string($conn, $_POST["message"] ?? '');

    // Validate required fields
    if (!empty($name) && !empty($email) && !empty($message)) {
        $sql = "INSERT INTO contact_messages (name, email, message) 
                VALUES ('$name', '$email', '$message')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
        } else {
            echo "<script>alert('Error saving message: " . mysqli_error($conn) . "');</script>";
        }
    } else {
        echo "<script>alert('All fields are required.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Invalid request method.'); window.history.back();</script>";
}
?>

