<?php 
class Person{
    private $name = "Sor Visal";
    public function Show(){
        echo "My name is ".$this->name;
    }
}
$person = new Person();
$person->Show();

?>