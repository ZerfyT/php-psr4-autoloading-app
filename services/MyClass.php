<?php

namespace Services;

use Services\MyInterface;

class MyClass implements MyInterface
{
    public function foo()
    {
        error_log('my-class');
        // throw new \Exception('foo');
    }
}