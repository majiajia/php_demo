<?php
/**
 * how to use exception
 * User: majiajia 1014970572@qq.com
 * Date: 2017/11/22
 * Time: 13:44
 */
/*
 * try  catch finally throw
 */
class MyException extends Exception {
    public function __toString()
    {
        parent::__toString();
        echo "__toString \n";
    }
}
$my_exception = new MyException();
try {
    $a = 1;
    throw $my_exception;
} catch (LogicException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
} catch (MyException $e) {
    echo $e->getMessage();
}
