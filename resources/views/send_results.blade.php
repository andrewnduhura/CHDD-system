<form method="POST" action="{{ route('send_results') }}">
    @csrf

    <div>
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" id="phone_number" required>
    </div>

    <button type="submit">Send Results</button>
</form>
