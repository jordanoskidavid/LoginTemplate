<?php
require BASE_PATH . 'Validator.php';
$config = require BASE_PATH . 'config.php';
$db = new Database($config['database']);
$functions = new Functions();


require_once BASE_PATH . ('views/login.view.php');