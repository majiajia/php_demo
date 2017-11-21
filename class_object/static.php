<?php
/**
 * Created by majiajia.
 * User: Administrator
 * Date: 2017/11/21
 * Time: 16:17
 */

/*
 * 1.静态属性不可通过对象访问，但是静态方法可以通过对象访问
 */


class Foo
{
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$my_static;
    }
}

print Foo::$my_static . "\n";

$foo = new Foo();
print $foo->staticValue() . "\n";
//对象可以访问静态方法但是不可以访问静态属性
print $foo->my_static . "\n";      // Undefined "Property" my_static

print $foo::$my_static . "\n";
$classname = 'Foo';
print $classname::$my_static . "\n"; // As of PHP 5.3.0

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n";

/* 2.可以用一个变量来动态调用类。但该变量的值不能为关键字 self，parent 或 static。*/
class FooNew {
    public static function aStaticMethod() {
        print "aStaticMethod is called\n";
    }
}

FooNew::aStaticMethod();
$classname = 'FooNew';
$classname::aStaticMethod(); // 自 PHP 5.3.0 起
?>