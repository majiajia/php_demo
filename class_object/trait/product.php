<?php
/**
 * how to use trait
 * User: majiajia 1014970572@qq.com
 * Date: 2017/11/22
 * Time: 11:14
 */

class Product {
    protected $brand ;
    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    public function getBrand() {
        return $this->brand;
    }
}

class TV extends Product {
    use Sellable;
    public function play() {
        echo "$this->brand tv playing\n";
    }
}

class Compute extends Product {
    use Sellable;

    protected $cores = 8;

    public function getNumOfCores() {
        return $this->cores;
    }
}