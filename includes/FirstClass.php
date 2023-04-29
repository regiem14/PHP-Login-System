<?php

class FirstClass{
    public $information = "This is an example of a class that contain some information.";
}

class OFW{
    public $OFW= "Otherworld Foreign Worker";
}

$information2 = new FirstClass();
$OFW = new OFW();  

var_dump($information2, $OFW);