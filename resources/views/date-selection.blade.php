<!-- resources/views/date-selection.blade.php -->

<form method="get" action="{{ route('dates') }}">
    @csrf

    <label for="start-date">Start Date:</label>
    <input type="date" id="start-date" name="start_date" required>

    <label for="end-date">End Date:</label>
    <input type="date" id="end-date" name="end_date" required>

    <button type="submit">Generate Graph</button>
</form>
