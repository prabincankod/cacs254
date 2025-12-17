<?php

include "Person.php";
include "hello.php";
class Student extends Person
{
    use hello;
    const COLLEGE = "HDC";
    public $reg_no;

    public function  __construct($name, $address, $reg_no)
    {

        // $this->name = $name;
        // $this->address = $address;

        parent::__construct($name, $address);
        $this->reg_no = $reg_no;
    }

    public function display_info()
    {


        parent::display_info();
        echo "registration: $this->reg_no " . Student::COLLEGE . " \n";
        $this->hello_tanchohang();
    }

    public static function hello()
    {
        echo "Hello Student ";

        echo Student::COLLEGE;
    }
}
$student = new Student("Prabin Subedi", "BRT-2", 22);
$student->display_info();

// Student::hello();
