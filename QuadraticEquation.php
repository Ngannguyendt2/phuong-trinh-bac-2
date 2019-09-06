<?php


class QuadraticEquation
{
    protected $a;
    protected $b;
    protected $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function getA()
    {
        return $this->a;
    }

    function getB()
    {
        return $this->b;
    }

    function getC()
    {
        return $this->c;
    }

    function getDiscriminant()
    {
        $delta = pow($this->b, 2) - (4 * $this->a * $this->c);
        return $delta;
    }

    function getRoot1()
    {
        $root1 = (-$this->b + $this->getDiscriminant()) / (2 * $this->a);
        return $root1;
    }
    function getRoot2(){
        $root2=(-$this->b - $this->getDiscriminant()) / (2 * $this->a);
        return $root2;
    }
}