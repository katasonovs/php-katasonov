<?php
$a=rand(-10,10);
$b=rand(-10,10);


$Z=cos(f12($a*$a,$b))+sin(pow(f12($b,$a),2));
echo "a=".$a." b=".$b."<br/>";
echo "Var 12: Z=".$Z."<br/><br/>";

$Z=pow(cos(f($a*$a,$b)),3)+f($a+$b,$a-$b);
echo "Var 15: Z=".$Z;

function f($u, $t) {
    if ( $u*$u > abs(4*$u*$t) ){
        return log10(abs($u+$t));
    }elseif ( $u*$u < abs(4*$u*$t)){
        return tan(1/$u/$t);
    }else
        return pow(M_E,($u*$t+sqrt(sin($u))));
}
function f12($u, $t) {
    if ( $u<=-$t ){
        return $u*log10($u)+pow(M_E,$t-1);
    }elseif ( -$t<$u && $u<$t){
        return 2*$u*$t;
    }else
        return pow(cos($u+$t*$t/5),2);
}
?>