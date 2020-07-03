<?php
function check($sym)
{
    $stack1 = new SplStack();
    $stack2 = new SplStack();
    $str = str_split($sym);
    for ($i = 0; $i < count($str); $i++) {
        if ($str[$i] === '(') $stack1->push($str[$i]);
        else if ($str[$i] === ')') {
            if ($stack2 === NULL) return false;
            else $stack2->push($str[$i]);
        }
    }
    if (count($stack1) === count($stack2)) echo 'right';
    else echo 'wrong';
}

$sym1 = '(– b + (b^2 – 4*a*c)^(0.5/ 2*a))';
$sym2 = 's * (s – a) * (s – b * (s – c) ';
$sym3 = 's * (s – a) * (s – b) * (s – c) ';
check($sym1);
check($sym2);
check($sym3);
