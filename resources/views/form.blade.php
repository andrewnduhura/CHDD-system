<h1>User Login</h1>

<form action="form" method="POST">
    
    {{ csrf_field() }}
    <input type="text" name="username" placeholder="Username" /><br>
    <span style="color:red">@error('username'){{$message}}@enderror</span> 
    <br>

    <input type="password" name="password" placeholder="Password"/><br>
    <span style="color:red">@error('password'){{$message}}@enderror</span>
     <br> 
    <br>
    <button type="submit">Login</button>
</form>