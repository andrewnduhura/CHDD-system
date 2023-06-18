<!DOCTYPE html>
<html>
<head>
    <title>Reminder Scheduler</title>
</head>
<body>
    <h1>Reminder Scheduler</h1>
    <form action="/schedule-reminder" method="POST">
        @csrf
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" id="phone" required><br><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea><br><br>

        <label for="time">Scheduled Time:</label>
        <input type="datetime-local" name="time" id="time" required><br><br>

        <input type="submit" value="Schedule Reminder">
    </form>
</body>
</html>
