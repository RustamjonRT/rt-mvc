<?php
    class User {
        protected $name;
        protected $age;

        public function set_name($name) {
            $this->name = $name;
        }
        public function get_name() {
            return $this->name;
        }
    }

    class Customer extends User {
        public function pay($amount) {
            return $this->name . " paid $" . $amount;
        }
    }

    $c = new Customer;
    $c->set_name("Brad");
    echo $c->pay(100);
?>