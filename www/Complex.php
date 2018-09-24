<?php

namespace calc3;


class Complex extends ComplexCalc
{
    public $re;
    public $im;

    public function _construct ($re, $im){
        $this->re = $re;
        $this->im = $im;
    }

}