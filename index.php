<?php
class User {
    public $name;
    public $age;
    public static $minPassLength = 6;

    public static function validate_password($password) {
        if(strlen($password >= self::$minPassLength)) {
            return true;
        } else {
            return false;
        }
    }
}

$password = "Hello";
if(User::validate_password($password)) {
    echo "Valid Password<br/>";
} else {
    echo "Invalid Password<br />";
}

?>