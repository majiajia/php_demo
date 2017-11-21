<?php
/**
 * how to use magic method
 * User: majiajia 1014970572@qq.com
 * Date: 17-11-21
 * Time: 21:31
 */


class CallableClass {
    //当以调用函数的方式调用一个对象时,会被执行
    public function __invoke($x) {
        var_dump($x);
    }

    public function __toString()
    {
        return "this is __tostring\n";
    }
}

$obj = new CallableClass;
//以调用函数的方式调用一个对象
$obj(5);
var_dump(is_callable($obj));
//当一个类被当成字符串的时候会按　__toString 输出
echo $obj;

