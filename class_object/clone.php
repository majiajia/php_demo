<?php
/**
 * Created by php_demo
 * User: majiajia 1014970572@qq.com
 * Date: 2017/11/22
 * Time: 9:48
 */
    /*
     * 深复制 是什么意思
     */
    class SubClass {
        static $instances = 0;
        public $instance ;
        public function __construct()
        {
            $this->instance = ++ self::$instances;
        }

        // clone $obj 对所有属性执行浅复制,但是所有的引用属性仍然会是指向原来的变量的引用
        public function __clone()
        {
            $this->instance = ++ self::$instances;
        }
    }

    class MyCloneClass {
        public $obj1;
        public $obj2;

        //只复制了obj1 所以只有obj1 的值发生了变化
        public function __clone()
        {
            $this->obj1 = clone $this->obj1;
        }
    }

    $obj = new MyCloneClass();
    $obj->obj1 = new SubClass();
    $obj->obj2 = new SubClass();

    $obj2 = clone $obj;

    print "origin object\n";
    print_r($obj);

    print "cloned object\n";
    print_r($obj2);