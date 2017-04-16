<?php

namespace pattern\abstractFactory;


abstract class AbstractFactory
{
    abstract public function createText($content);
}

class JsonFactory extends AbstractFactory
{
    public function createText($content)
    {
        return new JsonText($content);
    }
}

class HtmlFactory extends AbstractFactory
{
    public function createText($content)
    {
        return new HtmlText($content);
    }
}

abstract class Text
{
    /**
     * @var string
     */
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text . "\n";
    }
}

class JsonText extends Text
{
    // do something here
}

class HtmlText extends Text
{
    // do something here
}

class AbstractFactoryTest
{
    public function testCanCreateHtmlText()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('html text');
        $reflection = new \ReflectionClass($text);
        return $reflection;
    }

    public function testCanCreateJsonText()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('json text');

        echo $text->getText();
    }
}

$a = new AbstractFactoryTest();
var_dump($a->testCanCreateHtmlText());
//$a->testCanCreateJsonText();