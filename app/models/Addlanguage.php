<?php

class Addlanguage extends Eloquent
{


public $table = 'addlanguage';


public static $rules = array(

    'first_name' => 'required|min:2'
    );



    public static function validate($data)
    {

        return Validator::make($data, static::$rules);
    }



}


?>