<?php
namespace serhii;

class FormCreator
{

    protected function getAttribute($attr){

        $str = "";
        foreach ($attr as $key => $item) {
            $str .= $key ."=".$item;
        }
        return $str;
    }

    public function input($attr){

        $attr = $this->getAttribute($attr);
        return '<input ' . $attr . '><br><br>';
    }

    public function password($attr){

        $attr = $this->getAttribute($attr);
        return "<input type = 'password' " . $attr. "><br><br>";
    }

    public function textarea($attr) {
        $attr = $this->getAttribute($attr);
        return '<textarea ' . $attr . '></textarea><br><br>';
    }

    public function submit($attr =[]){

        $attr = $this->getAttribute($attr);
        return "<input type='submit'".$attr.">";
    }

    public function open($attr){

        $attr = $this->getAttribute($attr);
        return "<form".$attr."><br>";
    }

    public function close(){

        return "</form>";
    }
}

