<?php

namespace calc3;


class CompVect extends ComplexCalc
{
    public function add($a, $b)
    {
        $c=[];
        foreach ($a as $key=>$value){
            $c[$key]=parent::add($a[$key],$b[$key]);
        }
        return $c;
    }

    public function Mult($a, $b){
        $c = [];
        foreach ($a as $key=>$value){
            $c[$key] = parent::Mult($a[$key] , $b[$key]);
        }
        return $c;
    }

    public function Divide($a, $b){
        $c = [];
        foreach ($a as $key=>$value){
            $c[$key] = parent::Divide($a[$key] , $b[$key]);
        }
        return $c;
    }

    public function Minus($a, $b){
        $c = [];
        foreach ($a as $key=>$value){
            $c[$key] = parent::Minus($a[$key] , $b[$key]);
        }
        return $c;
    }

}