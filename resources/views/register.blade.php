<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="id" placeholder="ID">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password_confirmation" placeholder="Confirm Password">
            
            <button type="submit">Register</button>
        </form>
</html>