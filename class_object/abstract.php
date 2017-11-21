<?php
    /**
     * how to use abstract class
     * User: Administrator
     * Date: 2017/11/21
     * Time: 16:28
     */

    abstract class AbstractClass {
        abstract protected function getVal();
        abstract protected function prefixVal($prefix);

        public function printVal() {
            print $this->getVal()."\n";
        }
    }

    class ClaasA extends AbstractClass {
        protected function getVal() {
            return "classA getVal\n";
        }

        public function prefixVal($prefix) {
            return "classA {$prefix}\n";
        }
    }


    class ClaasB extends AbstractClass {
        protected function getVal() {
            return "ClaasB getVal\n";
        }

        public function prefixVal($prefix) {
            return "ClaasB {$prefix}\n";
        }
    }

    $classA = new ClaasA();
    $classA->printVal();
    $classA->prefixVal('11');

