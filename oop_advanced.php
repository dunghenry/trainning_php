<?php
    class User
    {
        const PI = 3.14;
        public static $msg = "MSG";
        private string $name;
        public string $email;
        public int $age;
        public function __construct(string $name, string $email, int $age)
        {
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
        }
        public static function sayHello(){
            echo "Hello";
        }
    };
    $user = new User("Dung", "dung@gmail.com", 22);
    class Employee extends User{
        public function display(){
            parent::sayHello();
        }
    }
    echo User::PI;
    echo "<br>";
    echo User::$msg;
    echo "<br>";
    $ep = new Employee("Dung", "dung@gmail.com", 22);
    echo  $ep->display();
?>