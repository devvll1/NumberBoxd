<?php

namespace App\Controllers;

class MyInfoController extends BaseController
{
    private $firstname = "Dave";
    private $middlename = "Villeza";
    private $lastname = "Villa";
    private $age = 21;

    public function inputfirstName()
    {
        return "Hello! My first name is " . $this->firstname . ".";
    }

    public function inputmiddleName()
    {
        return "My middle name is " . $this->middlename . ".";
    }

    public function inputlastName()
    {
        return "My last name is " . $this->lastname . ".";
    }

    public function inputfullNameandAge()
    {
        return "My name is " . $this->firstname . " " . $this->middlename . " " . $this->lastname . ", and I am " . $this->age . " years old!";
    }
}