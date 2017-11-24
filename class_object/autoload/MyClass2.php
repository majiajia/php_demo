<?php
/**
 * Created by php_demo
 * User: majiajia 1014970572@qq.com
 * Date: 2017/11/22
 * Time: 11:38
 */
class MyClass2 {
    public function __construct()
    {
        $class_method = __CLASS__.'-'.__METHOD__;
        print "$class_method called\n";
    }
}