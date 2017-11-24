<?php
/**
 * how to use autoload
 * User: majiajia 1014970572@qq.com
 * Date: 2017/11/22
 * Time: 11:28
 */

spl_autoload_register(function ($class_name){
    require_once $class_name.'.php';
});

$my_obj1 = new MyClass1();
$my_obj2 = new MyClass2();