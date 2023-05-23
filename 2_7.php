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

    echo User::$minPassLength . "<br />";
    echo User::validate_password() . "<br />";
?>