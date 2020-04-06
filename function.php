<?php
function sum($number1, $number2)
{
    if ($number1 + $number2 > PHP_INT_MAX ||$number1 + $number2 < PHP_INT_MIN){
        throw new Exception("Input Number is over limit!!!");
    }
    return $number1 + $number2;
}

function sub($number1, $number2)
{
    if($number1 - $number2 < PHP_INT_MIN ||$number1 - $number2 > PHP_INT_MIN){
        throw new Exception("Input Number is over limit!!!");
    }
    return $number1 - $number2;
}

function multi($number1, $number2)
{
    if ($number1 * $number2 > PHP_INT_MAX ||$number1 * $number2 < PHP_INT_MIN){
        throw new Exception("Input Number is over limit!!!");
    }
    return $number1 * $number2;
}

function div($number1, $number2)
{
    if ($number2 ==0){
        throw new Exception("Can't not divide 0!");
    }else {
        if ($number1/$number2 > PHP_INT_MAX || $number1/$number2 < PHP_INT_MIN){
            throw new Exception("Input Number is over limit!!!");
        }
    }
    return $number1 / $number2;
}

function printResult($num1, $num2, $operator,$result){
    echo $num1 . " " . $operator . " " . $num2 . " = " . $result;
}