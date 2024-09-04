<!DOCTYPE html>
<html>
<head>
    <title>Enter Username</title>
</head>
<body>
    <h1>Enter Your Username</h1>
    <form action="{{ route('submit-username') }}" method="POST">
        @csrf
        <input type="text" name="username" placeholder="Enter username">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
