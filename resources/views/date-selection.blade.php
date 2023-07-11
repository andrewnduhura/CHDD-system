<!DOCTYPE html>
<html>
<head>
    <title>Date and Location Selection</title>
    
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
</head>
<body>

<div>
<h1>Date Selection</h1>

<form id="date-form" method="POST" action="{{ route('dates.generate')  }}">

    @csrf

    <label for="startdate">Start Date:</label>
    <input type="date" id="startdate" name="start_date" required>

    <label for="enddate">End Date:</label>
    <input type="date" id="enddate" name="end_date" required>

    <label for="location">Location:</label>
            <select id="location" name="location">
                <option value="">All Locations</option>
                <!-- Retrieve locations from your database and populate the options -->
                @foreach ($locations as $location)
                    <option value="{{ $location }}">{{ $location }}</option>
                @endforeach
            </select>
    <br>       
    <br>
    <button type="submit">Generate Graph</button>

    
</form>
</div>





</body>
</html>

            
        


