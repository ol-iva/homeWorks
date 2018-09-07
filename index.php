<?php
/**
 * Created by PhpStorm.
 * User: Oliva
 * Date: 06.09.2018
 * Time: 7:06
 */
//Zero task
//1 variant

$test = [8, 28, 16, 46, 3, -4, 0, 11] ;
$l = count($test) ;
$s = null ;
for($i=0; $i < $l; $i++){
    for($s=$i+1; $s < $l; $s++){
        if($test[$i] < $test[$s]) {
            $d = $test[$s] ;
            $test[$s] = $test[$i] ;
            $test[$i] = $d ;
        }
    }
} ;
echo 'The biggest number in array is '.$test[0] ;

//2 variant

$test1 = [8, 46, 16, 11, 3, -4, 0, 11] ;

$a = null ;
foreach ($test1 as $key => $value) {
    if ($key = 0) {
        $a = $value ;
    } elseif ($a < $value) {
        $a = $value ;
    }
}
echo 'The biggest number in array is '.$a ;

//3 variant

$test2 = [0, 28, 58, 11, 3, -4, 0, 19, 22] ;

function choiceBigNumber($arg) {
    $b = null ;
    foreach ($arg as $key => $value) {
        if ($key = 0) {
            $b = $value ;
        } elseif ($b < $value) {
            $b = $value ;
        }
    }
    return $b ;
}
echo choiceBigNumber($test2) ;


//3 variant

$test3 = [-10, 28, 4.8, 11, 3, -4, 0, 56, 22] ;

function choiceBigNumber1($arg1) {
    $k = count($arg1) ;
    $b = null ;
    $c = null ;
    for ($i = 0; $i < $k; $i++) {
        if ($arg1[$i] > $b) {
            $b = $arg1[$i] ;
            $c = $i ;
        }
    }
    return array($c => $b) ;
}
$biggest = choiceBigNumber1($test3) ;
var_dump($biggest) ;

// 1 task

$test3 = [-10, 28, 4.8, 14, 11, 3, -4, 0, 56, 22] ;
$j = 15 ;

function positiveNumber($arg1, $arg2) {
    foreach($arg1 as $value){
        if ($value >= 0 && $value%2 == 0 && $value < $arg2) {
            $d[] = $value ;
        }
    }
    return $d ;
}
$d = positiveNumber($test3, $j) ;
var_dump($d) ;

// 2 Task

$p = 0 ;
$r = 1 ;
$number = 15 ;

function numberPhybonachi($arg1, $arg2, $arg3) {
    $sum[] = $arg1 ;
    $sum[] = $arg2 ;
    for ($i = 1; $i < $arg3; $i++) {
        $n = $sum[$i] + $sum[$i-1] ;
        $sum[] = $n ;
    }
    return $sum ;
}
$phybon = numberPhybonachi($p, $r, $number) ;
var_dump($phybon) ;

// 3 Task
// First variant
$test4 = [35, 28, 1, 46, 3, -4, 17, 11] ;

function secondNumber ($arg1) {
    sort ($arg1, SORT_NUMERIC) ;
    $k = count($arg1) ;
    $second = $arg1[$k-2] ;
    return $second ;
}
$result = secondNumber ($test4) ;
var_dump ($result) ;

// Second variant

$test4 = [35, 28, 1, 46, 3, -4, 17, 11] ;

function secondNumber ($arg1) {
    $l = count($arg1) ;
    $s = null ;
    for($i=0; $i < $l; $i++){
        for($s=$i+1; $s < $l; $s++){
            if($arg1[$i] < $arg1[$s]) {
                $d = $arg1[$s] ;
                $arg1[$s] = $arg1[$i] ;
                $arg1[$i] = $d ;
            }
        }
    } ;
    $second = $arg1[1] ;
    return $second ;
}
$result = secondNumber ($test4) ;
var_dump ($result) ;

// 4 Task
// First variant
$test4 = [8, 46, 16, 11, 3, -4, 0, 11] ;
$z = 15 ;

function removeNuber($arg1, $arg2) {
    $g = null ;
    for($i = 0; $i < count($arg1); $i++) {
        if ($arg1[$i] > $arg2) {
            $arg1[$i] = $arg2 ;
            $g = $g + 1 ;
        }
        $result[] = $arg1[$i] ;
    }
    echo 'Amount of replacing is '.$g."</br>" ;
    return $result ;
}
$remove = removeNuber($test4, $z) ;
var_dump($remove) ;

// Second variant

$test5 = [8, 46, 16, 11, 3, -4, 0, 11] ;
$h = -2 ;

function removeNuber1($arg1, $arg2) {
    $l = null ;
    foreach ($arg1 as $key => $value) {
        if ($value > $arg2) {
            $arg1[$key] = $arg2 ;
            $l = $l + 1 ;
        }
        $res1[] = $arg1[$key] ;
    }
    echo 'Amount of replacing is '.$l."</br>" ;
    return $res1 ;
}
$remove1 = removeNuber1($test5, $h) ;
var_dump($remove1) ;

// 5 Task ARRAY_SUM

function myArraySum(arg1) {
    $test5 = [8, 46, 16, 11, 3, -4, 0, 11] ;
    $test6 = [] ;
    function myArraySum($arg1) {
        $s = null ;
        if (empty($arg1)) {
            $s = 0 ;
        } else {
            foreach($arg1 as $value) {
                $s = $s + $value ;
            }
        }
        return $s ;
    }
    echo myArraySum($test5).' ' ;
    echo myArraySum($test6) ;
}

// 6 Task IN_ARRAY

$test7 = [8, 46.2, "match", 11, 3, -4, 0, 11] ;

function myInArray($needle, $haystack , $strict = false) {
    $s = null ;
    foreach($haystack as $value) {
        if (($strict = true && $value === $needle) || ($strict = false && $value == $needle)) {
            $s = true ;
        } else  {
            $s = false ;
        }
    }
    return $s ;
}
$need = 11.0 ;
if (myInArray ($need, $test7, true)) {
    echo $need." was found\n" ;
    } else {
        echo $need." is absent in array\n" ;
    } ;

// 7 Task ARRAY_DIFF
// In case there are only two arrays

$test9 = [28, 37, "sort", "wine", 3, -24, 10, 11] ;
$test10 = [28, "army", "53a", 3, 11, 24, 21, 10, 30] ;

function myArrayDiff($array1, $array2) {
    foreach($array1 as $key => $value) {
       foreach ($array2 as $value2) {
            if ($value == $value2){
                unset($array1[$key]) ;
                break ;
            }
       }
    }
    return $array1 ;
}
$result1 = myArrayDiff($test9, $test10) ;
var_dump($result1) ;

// In case there are undetermined number of arrays - I need help

$test9 = [28, 37, "sort", "wine", 3, -24, 10, 11] ;
$test10 = [28, "army", "53a", 3, 11, 24, 21, 10, 30] ;
$test11 = ["house", 37, 2, 10, 12, 11, "sort"] ;

function myArrayDiff1($array1, $array2, ...$arrays) {
    $s = func_num_args() ;
    var_dump ($s) ;
    foreach($array1 as $key1 => $value1) {
        for ($i = 1; $i < $s; $i++) {
            $array[] = func_get_arg($i) ;
            foreach ($array as $value) {
                if ($value1 == $value){
                    unset($array1[$key1]) ;
                    break ;
                }
            }
        }
    }
    return $array1 ;
}
$result2 = myArrayDiff1($test9, $test10, $test11) ;
var_dump($result2) ;

// 8 TASK (BUBBLE SORTING)

$test12 = [29, 37, 2, 10, 12, 11, 0] ;

function mySortFunction(&$array1, $decrease = false) {
    $d = null ;
    $length = count($array1) ;
    for($i=0; $i < $length; $i++){
        for($s=$i+1; $s < $length; $s++){
            if ($decrease == true) {
                if($array1[$i] < $array1[$s]){
                    $d = $array1[$s] ;
                    $array1[$s] = $array1[$i] ;
                    $array1[$i] = $d ;
                }
            } else {
                if($array1[$i] > $array1[$s]){
                    $d = $array1[$i] ;
                    $array1[$i] = $array1[$s] ;
                    $array1[$s] = $d ;
                }
            }
        }
    }
    return $array1 ;
}
$result3 = mySortFunction($test12) ;
var_dump($result3) ;

?>

