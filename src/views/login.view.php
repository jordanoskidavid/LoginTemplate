<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>Login</title>

</head>
<body>

<form action="">
    <div class="container">
        <h1>Login or go <a href="/">home</a></h1>
        <hr>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>
        <br>
        <br>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        <hr>

        <button type="submit" class="loginbtn">Login</button>
    </div>

    <div class="container signing">
        <p>You do not have an account? <a href="/register">Register Here</a>.</p>
    </div>
</form>
</body>
</html>

