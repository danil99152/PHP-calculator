<?php
/**
 * Created by PhpStorm.
 * User: Danil
 * Date: 23.09.2018
 * Time: 22:50
 */

namespace calc3;


class ComplexSquare
{
    public $re;
    public $im;

    function __construct($a, $b, $c, $z1, $z2)
    {
        $this->re = $a;
        $this->re = $b;
        $this->re = $c;
        $this->im = $z1;
        $this->im = $z2;

    }

    function kvadrat($a, $b, $c)
    {
        if ($a == 0) return false;

        if ($b == 0) {
            if ($c < 0) {
                $z1 = sqrt(abs($c / $a));
                $z2 = sqrt(abs($c / $a));
            } elseif ($c == 0) {
                $z1 = $z2 = 0;
            } else {
                $z1 = sqrt($c / $a) . 'i';
                $z2 = -sqrt($c / $a) . 'i';
            }
        } else {
            $d = $b * $b - 4 * $a * $c;
            if ($d > 0) {
                $z1 = (-$b + sqrt($d)) / 2 * $a;
                $z2 = (-$b - sqrt($d)) / 2 * $a;
            } elseif ($d == 0) {
                $z1 = $z2 = (-$b) / 2 * $a;
            } else {
                $z1 = -$b . '+' . sqrt(abs($d)) . 'i';
                $z2 = -$b . '-' . sqrt(abs($d)) . 'i';
            }
        }
        return new Complex($this->im = $z1, $this->im = $z2);
    }
}