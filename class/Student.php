<?php


class Student
{
    public $name;
    public $birth;
    public $phone;
    public $email;
    public $address;

    public function __construct($name, $birth, $phone, $email, $address)
    {
        $this->name = $name;
        $this->birth = $birth;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
    }
}