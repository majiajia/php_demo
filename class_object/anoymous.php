<?php
/**
 * how to use anoymous class
 * User: majiajia 1014970572@qq.com
 * Date: 2017/11/22
 * Time: 11:03
 *
 * 如何使用匿名类
 * php7 支持
 */

class SomeClass {}
interface SomeInterface {}
trait SomeTrait {}

var_dump(new class(10) extends SomeClass implements SomeInterface {
    private $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    use SomeTrait;
});