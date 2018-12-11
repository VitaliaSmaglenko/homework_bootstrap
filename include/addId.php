<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 10.12.18
 * Time: 18:00
 */
    class addId
{
   public static $identificator=0;

    public static function getId(){
        return self::$identificator;

    }

    public static function setId($id){

        self::$identificator = $id;

    }

}