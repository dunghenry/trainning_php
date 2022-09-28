<?php
    declare(strict_types=1);
    echo '<h1>OOP in PHP</h1>';
    class User{
        private string $name;
        public string $email;
        public int $age;
        public function __construct(string $name,string $email, int $age){
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
        }
        public function set_name($name){
            $this->name = $name;
        }
        public function get_name(){
            return $this->name;
        }
    };
    $user = new User("Dung", "dung@gmail.com", 22);
    $user->set_name("Henry");
    echo  $user->get_name();
    class Employee extends User{
        public function __construct(string $name, string $email, int $age, string $title){
            parent::__construct($name, $email, $age);
            $this->title = $title;
        }
        public function get_title(){
            return $this->title;
        }
    }
    echo "<br>";
    $ep = new Employee("Dung", "dung@gmail.com", 22, 'Project Manager');
    echo $ep->get_title();
?>