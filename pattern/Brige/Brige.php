<?php

namespace pattern\Brige;

abstract class Program
{
    protected $developer;

    public function __construct($developer)
    {
        $this->developer = $developer;
    }

    public abstract function developerProgram();
}

interface Developer {
    public function writeCode();
}

class PHPDeveloper implements Developer {
    public function writeCode() {
        return "I am PHP Developer.";
    }
}

class JavaDeveloper implements Developer {
    public function writeCode() {
        return "I am Java Developer.";
    }
}

class BankSystem extends Program {

    public function __construct(Developer $developer)
    {
        $this->developer = $developer;
    }

    public function developerProgram()
    {
        return "Bank System development in progress....\n" . $this->developer->writeCode();

    }
}

class StockExchange extends Program {

    public function __construct(Developer $developer)
    {
        $this->developer = $developer;
    }

    public function developerProgram()
    {
        return "Stock Exchange development in progress....\n" . $this->developer->writeCode();
    }
}

$a = new BankSystem(new JavaDeveloper());
var_dump($a->developerProgram());