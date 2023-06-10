<?php
include "conn.php";

// Get the appointment ID from the AJAX request
$appointmentId = $_COOKIE['id'];

// Remove the appointment from the database
$sql3 = "update appointments set booking='booked' where appointment_id='".$appointmentId. "';";
if ($conn->query($sql3) === TRUE) {
    echo 'success';
} else {
    echo 'error';
}

$conn->close();
echo '<script>window.location.href="doctor.php";</script>'
?>
