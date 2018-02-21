<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 11.01.18
 * Time: 9:30
 */
/*class A
{
    private $a;

    public function __construct()
    {
        $this->a = 'a';
    }

    public function getA()
    {
        return $this->a;
    }

    public function setA($value)
    {
        $this->a = $value;
    }
}

class B extends A
{

}

class C extends A
{

}

$b = new B();
$c = new B();

echo $b->getA().PHP_EOL;
echo $c->getA().PHP_EOL;
$c->setA('xyii');
echo $b->getA().PHP_EOL;
echo $c->getA().PHP_EOL;*/

/*class a
{
    private $svoistvo = 1;

    protected function setSvoistvo($var)
    {
        $this->svoistvo = $var;
    }

    public function getSvoistvo()
    {
        print $this->svoistvo;
    }
}

class b extends a
{
    public function yaVseMogu($var)
    {
        $this->setSvoistvo($var);
    }
}

$obj = new b();
$obj->getSvoistvo();
$obj->yaVseMogu(2);
$obj->getSvoistvo();*/

//class A
//{
//    private $a = 'не хочу наследоваться никуда';
//    public $b = 'хочу наследоваться';
//    protected $c = 'cccc';
//}
//
//class B extends A
//{
//    public function test()
//    {
//        var_dump(get_object_vars($this));
//    }
//}
//
//$b = new B();
//$a = new A();
////$b->test();
//var_dump(get_object_vars($a));
//var_dump(get_object_vars($b));
//$testB = new ReflectionClass($b);
//$testA = new ReflectionClass($a);
//var_dump($testA->getProperties());
//var_dump($testB->getProperties());

/*class A
{
    private $a = 'не хочу наследоваться никуда';
    public function getA() {
        print 'Переменная '.$this->a.' в контексте '.get_class($this).PHP_EOL;
    }
}

class B extends A
{
    public function test()
    {
        (new A)->getA();
    }

    public function test2()
    {
        $this->getA();
    }
}

$cl = new B();
$cl->getA();
$cl->test();
$cl->test2();*/

/*class A {
    private $a = 2;
}
$obj = new A();
$property = (new ReflectionClass($obj))->getProperty('a');
$property->setAccessible(true);


var_dump($obj);
var_dump($obj->a);
echo $property->getValue($obj);*/


class A {
    private $a = 1;
}

$objct = new A();
$prop = new ReflectionProperty($objct, 'a');
$prop->setAccessible(true);
var_dump($prop->getValue($objct));


$prop->setValue($objct, 100500);
var_dump($objct);
var_dump($prop->getValue($objct));

class Devushka
{
    private $status = 'nedotroga';
}

$devushka = new Devushka();

$matcho = Closure::bind(function & (Devushka $devushka) {
    return $devushka->status;
}, null, 'Devushka');
$nupashalusta = & $matcho($devushka);
$nupashalusta = 'dam';
var_dump($devushka);