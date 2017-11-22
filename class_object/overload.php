<?php
/**
 * how to use overload
 * User: majiajia 1014970572@qq.com
 * Date: 2017/11/22
 * Time: 10:44
 */

/*
 * 1、动态的创建类的属性和方法需要通过魔术方法实现
 * 2、未定义或者不可见的属性和方法的时候会被调用
 * 3、重载方法只能是public
 */
class PropertyClass {
    //给不可访问的属性赋值的时候会被调用
    public function __set($name, $value)
    {
        print "__set $name $value\n";
    }
    //读取不可访问的属性时候被调用
    public function __get($name)
    {
        print "__get $name  \n";
    }
    //当对不可访问的属性调用 isset empty 时候会被调用
    public function __isset($name)
    {
        print "__isset $name  \n";
    }
    //对不可访问的属性调用 unset 的时候会被调用
    public function __unset($name)
    {
        print "__unset $name  \n";
    }

    public function __call($name, $arguments)
    {
        if(is_array($arguments)) {
            $arguments = implode(',',$arguments);
        }
        print "__call $name, $arguments \n";
    }

    public static function  __callStatic($name, $arguments)
    {
        print "__callStatic is called\n";
    }
}

$property_obj = new PropertyClass();
$property_obj->name = 'mjj';
echo $property_obj->var1;
isset($property_obj->var1);
unset($property_obj->age);

$property_obj->get_user_info(1,'a','b','c');
$property_obj::get_static_info(2);
