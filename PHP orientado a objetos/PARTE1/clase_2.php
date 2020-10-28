<?php
     class Person{
         public $age;
         public $name;

         //METODO
         public function run(){
             echo "Estoy Corriendo";
         }

         public function __construct($name, $age){
             $this->name=$name;
             $this->age=$age;
         }   
     } 
    
     $person = new Person('Jorge Coto', 10);
     echo $person->name;
     $person->run();
     echo "\n";
     $person2 = new Person('Maribel', 20);
     echo $person2->name;
     $person2->run();
?>