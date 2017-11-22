<?php
/**
 * how to use trait
 * User: majiajia 1014970572@qq.com
 * Date: 2017/11/22
 * Time: 11:07
 * http://overtrue.me/articles/2016/04/about-php-trait.html
 */



trait Sellable {
    protected  $price = 0;
    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
}