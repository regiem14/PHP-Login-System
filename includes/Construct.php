<?php
class App{
    public $model;
    public $color;
    
    function setModel($model){
        $this->model=$model;
    }

    
    function setColor($color){
        $this->model=$color;
    }

    function getModel(){
        return $this->model;
    }

    function getColor(){
        return $this->color;
    }

}

$CM = new App();
$CM->setModel('CM');

$golden = new App();
$CM->setColor('golden');
