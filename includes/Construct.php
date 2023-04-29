<?php
class App{
    public $model;
    public $color;

    function getModel(){
        return $this->model;
    }

    function getColor(){
        return $this->color;
    }

}

$CM = new App('CM' ,'golden');
// $golden = new App('golden');
