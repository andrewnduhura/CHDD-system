<!DOCTYPE html>
<html>
<head>
    <title>Date Selection and Graph Display</title>
    
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
</head>
<body>

<div>
<h1>Date Selection</h1>

<form id="date-form" method="POST" action="{{ route('dates.submit')  }}">

    @csrf

    <label for="startdate">Start Date:</label>
    <input type="date" id="startdate" name="start_date" required>

    <label for="enddate">End Date:</label>
    <input type="date" id="enddate" name="end_date" required>

    <button type="submit">Generate Graph</button>
</form>
</div>





</body>
</html>

            
        


