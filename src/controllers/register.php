<?php
require BASE_PATH . 'Validator.php';
$config = require BASE_PATH . 'config.php';
$db = new Database($config['database']);
$functions = new Functions();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['pressed'] == 1) {

       // if (empty($errors)) {
            $db->query("INSERT INTO UserData(Name,Surname,Email,Password,PhoneNumber,BirthDate,IdentityCardNumber) VALUES (:Name,:Surname,:Email,:Password,:PhoneNumber,:BirthDate,:IdentityCardNumber)", [
                'Name' => $_POST['name'],
                'Surname'=>$_POST['surname'],
                'Email'=>$_POST['email'],
                'Password'=>$_POST['psw'],
                'PhoneNumber'=>$_POST['number'],
                'BirthDate'=>$_POST['birthday'],
                'IdentityCardNumber'=>$_POST['identity']
            ]);
        //}
    }
}


require_once BASE_PATH . ('views/register.view.php');