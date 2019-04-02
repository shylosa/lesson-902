<?php
namespace serhii;

class SmartForm extends FormCreator
{

    public function input($attr){

        if (isset($attr['name']) && isset($_REQUEST[$attr['name']])){
            $attr['value'] = $_REQUEST[$attr['name']];
        }
        return parent::input($attr);
    }

    public function textarea($attr)
    {
        $text = parent::getAttribute($attr);
        $valtext = !empty($_REQUEST['text']) ? $_REQUEST['text'] : '';
        return '<textarea ' . $text . '>' . $valtext . '</textarea>';
    }


//    public function textarea($attr) {
//        $attr = parent::getAttribute($attr);
//        return '<textarea ' . $attr . '>'.$_REQUEST['description'].'</textarea>';
//    }

}