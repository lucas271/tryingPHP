<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/


class User{
  private $name;
  protected $email; // can only be accessed inside the class or in classes that inheret this class.
  private $password; // can only be accessed inside class

  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->password = $password;
    $this->email = $email;
  }

  function set_name($name){
    $this->name = $name;
  }

  function get_name(){
    echo $this->name;
  }
}

$user1 = new User('brad', 'brad@gmail.com', '24321312312');

$user1->set_name('bradNew');


var_dump($user1);


class Employee extends User{
  public function __construct($name, $email, $password, $title){
    parent::__construct($name, $email, $password);
  }
}