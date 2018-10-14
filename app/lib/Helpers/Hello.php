<?php

namespace Lyt\lib\Helpers;

class Hello
{

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        return "Hello {$this->name}!";
    }
}
