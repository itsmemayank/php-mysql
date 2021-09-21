<?php
    class Person {
        // Access Specifiers <=> Class Variables
        private $name;
        private $age;

        // Constructor
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        // Setter Method
        public function setPerson($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        // Getter Method
        public function getPerson() {
            return "$this->name => $this->age";
        }
    }
    
    // Object Instantiation
    $person1 = new Person('Jon Doe', 21);
    $person2 = new Person('Jane Doe', 21);

    // Accessing Methods
    $person1->setPerson("John Doe", 21);
    $person2->setPerson("Jane Doe", 25); 

    echo $person1->getPerson() . "\n";
    echo $person2->getPerson() . "\n";
?>