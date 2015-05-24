<?php
/**
 * Created by PhpStorm.
 * User: NEOGEEK
 * Date: 25/5/2015
 * Time: 1:20 πμ
 */

require_once "Orange.php";
require_once "Lemon.php";
require_once "Apple.php";

//The FruitFactory class is a basic Factory class

//A grocery store may have hundreds of fruits and vegetables and it will be very difficult to maintain
//a software with so many classes without a middle class, to do the instantiation for you,
//and of course checking if the class exists

class FruitFactory {

    //If someone wants to create a fruit with instantiate the factory class
    //you must create a static method for this task
    public static function createFruit($fruit_name, $options){

        //Check if class exists
        if(class_exists($fruit_name)){

            //instantiate the fruit class
            $fruit = new $fruit_name($options);

            //return it
            return $fruit;
        }
        else {

            //If class, not exists throw an error
            throw new Exception("There is no such class!");
        }
    }
}