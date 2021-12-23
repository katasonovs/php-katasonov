<?php
$a=rand(-10,10);
$b=rand(-10,10);


$Z=pow(cos(f($a,$b)),3)+f($a+$b,$a-$b);
echo "a=".$a." b=".$b."<br/>";
echo "Z=".$Z;

function f($u, $t) {
    if ( $u*$u > abs(4*$u*$t) ){
        return log10(abs($u+$t));
    }elseif ( $u*$u < abs(4*$u*$t)){
        return tan(1/$u/$t);
    }else
        return pow(M_E,($u*$t+sqrt(sin($u))));
}
?>