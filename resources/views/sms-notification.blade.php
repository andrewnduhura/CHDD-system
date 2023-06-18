<form action="/send-sms-notification" method="POST">
    @csrf
    <label for="phone_number">Recipient's Phone Number:</label>
    <input type="tel" id="phone_number" name="phone_number" required><br>


    <label for="notification-time">Notification Time:</label>
    <input type="time" id="notification-time" name="notification_time"><br>

    <label for="notification-content">Notification Content:</label>
    <textarea id="notification-content" name="notification_content"></textarea><br>

    <input type="submit" value="Send Notification">
</form>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
