<?php
/**
 * Created by PhpStorm.
 * User: Danil
 * Date: 23.09.2018
 * Time: 23:57
 */

namespace calc3;


class VectorSquare extends ComplexSquare
{
    public function kvadrat($a, $b, $c)
    {
        $z = [];
        foreach ($a as $key=>$value) {
            $z[$key] = parent::kvadrat($a, $b, $c);
        }
        return $z;
    }
} 