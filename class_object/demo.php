<?php
    /**
     * how to use class and object
     * User: majiajia 1014970572@qq.com
     * Date: 2017/11/21
     * Time: 15:36
     */
    /*
     * 如果不定义  __construct 的话，就会调用与类同名的函数,可以将 __construct 注释掉进行测试：输出结果会改变\
     * 但是在namespace 中，与类名同名的方法不再作为构造函数(php > 5.3.3)
     */
    class BaseClass {
        //每次创建新对象的时候都会调用,主要是使用对象前的初始化
        function __construct($a) {
            $this->a = $a;
            print "in base class __construct  ".$a."\n";
        }
        function BaseClass() {
            print "in base class BaseClass\n";
        }
        //析构函数 在对象的所有引用都被删除或者对象显示销毁时执行 在脚本关闭时执行
        function __destruct() {
            print 'in base class __destruct is called '.$this->a."\n";
        }
    }

    class SubClass extends BaseClass {
        function __construct() {
            parent::__construct(1);
            print "in subclass __construct\n";
        }

        function __destruct() {
            parent::__destruct();
            print "in subclass __destruct\n";
        }
    }

    class OtherClass extends BaseClass {

    }

    $obj_base = new BaseClass(1);
    //    in base class __construct
    $obj_sub = new SubClass();
    //in base class __construct
    //in subclass __construct

    $obj_other = new OtherClass(2);
    //in base class __construct
