<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle event creation
    // In a real application, save the event to the database
    header('Location: dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event - EventEase UTM</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Create Event</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="event_name">Event Name:</label>
                <input type="text" id="event_name" name="event_name" required>
            </div>
            <div class="form-group">
                <label for="event_date">Event Date:</label>
                <input type="date" id="event_date" name="event_date" required>
            </div>
            <div class="form-group">
                <label for="event_time">Event Time:</label>
                <input type="time" id="event_time" name="event_time" required>
            </div>
            <div class="form-group">
                <label for="event_description">Event Description:</label>
                <textarea id="event_description" name="event_description" required></textarea>
            </div>
            <div class="form-group">
                <label for="event_venue">Event Venue:</label>
                <select id="event_venue" name="event_venue" required>
                    <option value="Auditorium">Auditorium</option>
                    <option value="Conference Hall">Conference Hall</option>
                    <option value="Sports Complex">Sports Complex</option>
                </select>
            </div>
            <button type="submit">Create Event</button>
        </form>
    </div>
</body>
</html>
