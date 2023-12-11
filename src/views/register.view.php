<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>Register</title>

</head>
<body>

<form method="POST">
    <div class="container">
        <h1>Register or go <a href="/">home</a></h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" id="name" required>
        <span style="color: #ff0300"><?= $errors['name']?></span>
        <br>
        <br>
        <label for="surname"><b>Surname</b></label>
        <input type="text" placeholder="Enter surname" name="surname" id="surname" required>
        <span style="color: #ff0300"><?= $errors['surname']?></span>
        <br>
        <br>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>
        <span style="color: #ff0300"><?= $errors['email']?></span>
        <br>
        <br>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        <span style="color: #ff0300"><?= $errors['psw']?></span>
        <br>
        <br>
        <label for="number"><b>Phone Number</b></label>
        <input type="tel" placeholder="Enter Number" name="number" id="number" required>
        <span style="color: #ff0300"><?= $errors['number']?></span>
        <br>
        <br>
        <label for="birthday"><b>Birth Date</b></label>
        <input type="date" placeholder="Enter Birth Date" name="birthday" id="birthday" required>
        <span style="color: #ff0300"><?= $errors['birthday']?></span>
        <br>
        <br>

        <hr>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit" name="pressed" value="1" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="/login">Log in</a>.</p>
    </div>
</form>
</body>
</html>

