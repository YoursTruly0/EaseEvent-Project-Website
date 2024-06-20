<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle venue reservation
    // In a real application, save the reservation to the database
    header('Location: dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve Venue - EventEase UTM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Reserve Venue</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="venue">Venue:</label>
                <select id="venue" name="venue" required>
                    <option value="Auditorium">Auditorium</option>
                    <option value="Conference Hall">Conference Hall</option>
                    <option value="Sports Complex">Sports Complex</option>
                </select>
            </div>
            <div class="form-group">
                <label for="reserve_date">Reservation Date:</label>
                <input type="date" id="reserve_date" name="reserve_date" required>
            </div>
            <div class="form-group">
                <label for="reserve_time">Reservation Time:</label>
                <input type="time" id="reserve_time" name="reserve_time" required>
            </div>
            <button type="submit">Reserve Venue</button>
        </form>
    </div>
</body>
</html>
