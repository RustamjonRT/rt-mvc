<?php
class User {
    public $name;
    public $age;

    public function __construct($name, $age) {
        echo __CLASS__ . " is created.<br />";
        $this->name = $name;
        $this->age = $age;
    }

    // called when no other references to certain object to clean up
    public function __destruct() {

    }

    public function say_hello() {
        return $this->name . " says hello";
    }
}

$user1 = new User("Brad", 36);
$user2 = new User("RT", 28);

echo $user1->name . " is {$user1->age} years old.<br />";
echo $user1->say_hello() . "<br />";
?>
