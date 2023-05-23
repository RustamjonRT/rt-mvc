<?php
    class User {
        public $name = "Brad";

        public function say_hello() {
            return $this->name . " says Hello to everyone";
        }

    }

    $user1 = new User;
    echo $user1->name . "<br />";
    echo $user1->say_hello();

    echo "<br />";

    $user2 = new User;
    $user2->name = "Traverse";
    echo $user2->name;
    echo "<br />";
    echo $user2->say_hello()
?>
