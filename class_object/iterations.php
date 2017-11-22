<?php
/**
 *  how to iterate an object
 *
 * Created by php_demo.
 * User: majiajia 1014970572@qq.com
 * Date: 17-11-21
 * Time: 下午9:43
 */

    /*
     * foreach 默认所有可见属性都被用于遍历
     */

    class MyClass {
        public $var1 = 'value 1';
        public $var2 = 'value 2';
        public $var3 = 'value 3';

        protected $protected = 'protected val';
        private $private = 'private val';

        public function iterateVisible( ) {
            echo "MyClass::iterateVisible\n";
            foreach ($this as $key=>$val) {
                print "$key=>$val\n";
            }
        }
    }

    $my_obj = new MyClass();
    //通过foreach方式,返回的结果中没有 protected 和 private 变量
    foreach ($my_obj as $my_obj_key=>$my_obj_val) {
        print "$my_obj_key=>$my_obj_val\n";
    }

    $my_obj->iterateVisible();

    // Iteratot interface
    class MyCollection implements Iterator {
        public $var = [];

        public function __construct(Array $arrry)
        {
            if(is_array($arrry)) {
                $this->var = $arrry;
            }
        }

        public function current() {
            $var = current($this->var);
            echo "current $var\n";
            return $var;
        }

        public function next(){
            $next = next($this->var);
            print "next:$next\n";
            return $next;
        }

        public function key() {
            $key = key($this->var);
            print "key:$key\n";
            return $key;
        }

        public function valid() {
            $var = $this->current() !== false;
            echo "var:$var\n";
            return $var;
        }

        public function rewind() {
            print "rewind\n";
            reset($this->var);
        }
    }

    $values = [1,2,3];
    $my_iterator = new MyCloneClass($values);