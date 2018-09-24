<?php

namespace calc3;


class ComplexCalc
{
    public $a;
    public $b;

    public function _construct ($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    function add($a, $b){
        $re=$a->re+$b->re;
        $im=$a->im+$b->im;
        return new Complex($re,$im);
    }

    function mult($a,$b)
    {
        $re = $a->re * $b->re;
        $im = $a->im * $b->im;
        return new Complex($re, $im);
    }

    function divide($a, $b){
        $re=$a->re/$b->re;
        $im=$a->im/$b->im;
        return new Complex($re,$im);
    }
    function minus($a, $b){
        $re=$a->re-$b->re;
        $im=$a->im-$b->im;
        return new Complex($re,$im);
    }
}