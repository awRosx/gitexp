<?php
    function math($a, $b, $c)
    {
        $k = (100 * 109.24 * $a) / ($b - $c) ** 3;
        if ( $a < 0 or $b < 0 or $c < 0 or $b < $c){
            return null;
        }
        else{
            return $k;
        }
    }
echo math(16, 18, 17);
echo 'New world';