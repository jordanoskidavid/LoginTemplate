<?php
require BASE_PATH . 'Validator.php';
$config = require BASE_PATH . 'config.php';
$db = new Database($config['database']);
$functions = new Functions();

$date_now = date("m/d/Y");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['pressed'] == 1) {

        $eMail = $_POST['email'];

        $emailCheck = ($db->query1("SELECT Email FROM UserData WHERE Email='" . $eMail . "'"))->fetchAll();

        foreach ($emailCheck as $userEmail) {
            $tempUserEmail = htmlspecialchars($userEmail['Email']);
        }
        $emailCheck = $tempUserEmail;

        if (!Validator::string($_POST['name'], 3, 255)) {
            $errors['name'] = 'You have less than 3 or more than 255 characters, please enter valid input .';
        }
        if (!Validator::string($_POST['surname'], 3, 255)) {
            $errors['surname'] = 'You have less than 3 or more than 255 characters, please enter valid input .';
        }
        if (!Validator::email($emailCheck)) {
            $errors['email'] = 'User with this email already exist, please provide another email address or login.';
        }
        if (!Validator::password($_POST['psw'], 8, 255)) {
            $errors['psw'] = 'You have to enter minimum 8 characters';
        }
        if (!Validator::string($_POST['number'], 9, 9)) {
            $errors['number'] = 'You have less or more than 9 digits in your phone number.';
        }
        if (empty($_POST['birthday'])) {
            $errors['birthday'] = 'You have not entered your birth date';
        }

        $hashedpsw = password_hash($_POST['psw'], PASSWORD_DEFAULT);


        if (empty($errors)) {
            $db->query("INSERT INTO UserData(Name,Surname,Email,Password,PhoneNumber,BirthDate) VALUES (:Name,:Surname,:Email,:Password,:PhoneNumber,:BirthDate)", [
                'Name' => $_POST['name'],
                'Surname' => $_POST['surname'],
                'Email' => $_POST['email'],
                'Password' => $hashedpsw,
                'PhoneNumber' => $_POST['number'],
                'BirthDate' => $_POST['birthday'],
            ]);
        }
    }
}


require_once BASE_PATH . ('views/register.view.php');