<?php
/**
 * Author: Konstantinos Tsatsarounos
 *
 */

class singleton {

    //Define a new static property
    //With the static property, the value is stored as long the application is running,
    //and this way is possible to have a stored instance of the class object
    private static $instance = null;

    public function __construct() {

        //An example to test if a value is the same, this line generates a random number,
        //if the instance is the same, then the number will be the same

        $this->SomeVariable = mt_rand(1, 150);
    }

    public static function getInstace(){


        //If instance is Null (initial value) then return a new instance.
        //Else, it will be returned the stored instance
        if(self::$instance === null){
            self::$instance = new singleton();
        }
        return self::$instance;
    }
}


//Now let's see if the pattern working...


//First try
$instance1 = singleton::getInstace();
echo $instance1->SomeVariable.', ';

//Second try
$instance2 = singleton::getInstace();
echo $instance2->SomeVariable.', ';

//Third try
$instance3 = singleton::getInstace();
echo $instance3->SomeVariable;


//You see!!! It's easy!
