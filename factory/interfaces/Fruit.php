<?php
/**
 * Created by PhpStorm.
 * User: NEOGEEK
 * Date: 25/5/2015
 * Time: 1:20 πμ
 */


//An interface helps to regularize the basic methods for similar classes
interface Fruit {
    public function getColor();
    public function getEssence();
    public function getPrice();
}