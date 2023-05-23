<?php
    class User {
        private $name;
        private $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
    }

    class Customer extends User {

    }
    echo $user1->name;
    $user1 = new User("John", 40)
?>