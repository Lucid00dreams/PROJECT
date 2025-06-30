<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $speciality = mysqli_real_escape_string($conn, $_POST["speciality"]);
    $doctor = mysqli_real_escape_string($conn, $_POST["doctors"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $time = mysqli_real_escape_string($conn, $_POST["time"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $number = mysqli_real_escape_string($conn, $_POST["number"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    $sql = "INSERT INTO appointments (speciality, doctor, appointment_date, appointment_time, full_name, phone, email, message)
            VALUES ('$speciality', '$doctor', '$date', '$time', '$name', '$number', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
