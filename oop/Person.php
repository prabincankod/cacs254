<?php


class Person
{

    public $name;
    public $address;


    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
        echo "Person Created \n";
    }

    public function __destruct()
    {
        // this will be shown at last 
        echo "Person Destroyed\n";
    }
    public function display_info()
    {

        echo "Name: $this->name, address: $this->address ";
    }
}
