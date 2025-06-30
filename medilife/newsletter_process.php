<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST["newsletterEmail"]);

    $sql = "INSERT INTO newsletter_subscribers (email) VALUES ('$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Subscribed successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
