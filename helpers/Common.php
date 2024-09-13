<?php 

namespace Helpers;

class Common
{
    public static function foo() {
        error_log('foo');
        echo 'foo';
    }
    
    public static function bar() {
        error_log('bar');
        echo 'bar';
    }
}
