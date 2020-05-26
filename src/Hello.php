<?php

namespace Unicate\PackagistTest;

class Hello
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        echo "Hello, " . $this->name . "!";
    }
}