<?php
/**
 * how to use interface
 * User: Administrator
 * Date: 2017/11/21
 * Time: 16:36
 */

    interface iTempate {
        public function setVal($name,$val);
        public function getHtml($template);
    }

    class Template implements iTempate {
        private $vars = [];
        public function setVal($name, $val) {
            $vars[$name] = $val;
        }
        public function getHtml($template) {
            foreach ($this->vars as $name=>$val) {
                $template = str_replace('{'.$name.'}',$val,$template);
            }
            return $template;
        }

    }
