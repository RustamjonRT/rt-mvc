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

    }

    $user1 = new User("John", 40);
    echo $user1->set_name("Brad");
    echo $user1->get_name();
?>
