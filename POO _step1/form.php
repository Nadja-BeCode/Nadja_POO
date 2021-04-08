<?php


class Form{

    public $action;
    public $name;
    public $modified;

    public function __construct($action, $name, $modified){
        $this->action = $action;
        $this->name = $name;
        $this->modified = $modified;
    }

    public function create($action){
        return "<div class='form'><form action= ' '. $action . ' ' method='POST'>";
    }

    public function input($name){
        return "<input type='text' name='' value='".$nom."'>";
    }

    public function radio(){
        return "<input type = 'radio' name='radio' value='option'>";
    }

    public function select(){
        return "<select class='' name=''></select>";
    }

    public function textarea(){
        return "<textarea name="name" cols="30" rows="10"></textarea>";
    }

    public function checkbox(){
        return "<input type='checkbox' name='' value=''>";
    }

    public function submit(){
        return "<input type='submit' name='submit' value='$modified'>";
    }

    public function end(){
        return "</form></div>";
    }
   

}


?>






