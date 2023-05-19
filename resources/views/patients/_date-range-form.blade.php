<form action="{{ route('patients.chart') }}" method="GET">
    <label for="start_date">Start Date:</label>
    <input type="date" id="start_date" name="start_date" required>
    <br><br>
    <label for="end_date">End Date:</label>
    <input type="date" id="end_date" name="end_date" required>
    <br><br>
    <button type="submit">Generate Chart</button>
</form>