<?php
class User {
    protected $name;
    protected $age;

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
}

class Customer extends User {
    private $balance;

    public function __construct($name, $age, $balance) {
        parent::__construct($name, $age);
        $this->balance = $balance;
    }
    public function pay($amount) {
        return $this->name . " paid $" . $amount;
    }
    public function get_balance() {
        return $this->balance;
    }
}

$c = new Customer("John", 35, 550);
$c->set_name("Brad");
echo $c->pay(100) . "<br />";
echo "Balance: " . $c->get_balance() . "<br />";

?>