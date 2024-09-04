<!-- resources/views/user.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User Welcome</title>
</head>
<body>
    <h1>{{ $message }}</h1>
    <form action="{{ route('redirect-to-home') }}" method="POST">
        @csrf
        <button type="submit">Continue</button>
    </form>
</body>
</html>
