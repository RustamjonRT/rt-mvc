<?php
class User {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function set_name($name) {
        $this->name = $name;
    }
    public function get_name() {
        return $this->name;
    }
    // __get MAGIC method
    public function __get($property) {
        if(property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if(property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }

}

$user1 = new User("John", 40);

$user1->__set('name', 'Brad');
echo $user1->__get('name');
?>
