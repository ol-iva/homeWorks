<?php
interface PublicFunctionsArray
{
    public function getMyArray() ;
}
abstract class MyAbstractArray implements PublicFunctionsArray
{
    protected $arr ;

    function __construct(array $arr)
    {
        $this->arr = $arr ;
    }
    public function getMyArray() {
        return $this->arr ;
    }
    abstract protected function getCountArray();
    }

    class MyArrayBor extends MyAbstractArray
    // class for question: What would be better:
        //array as property or
        //aray as argument of function??
    {
        public function getMyArraySumBor($array) {
            $result = 0;
            foreach ($array as $value) {
                $result = $result + $value;
            }
            return $result;
        }
        protected function getCountArray(){

        }
        function __construct()
        {
            echo " ";
        }
    }
    class MyArray extends MyAbstractArray
{
     protected function getCountArray() {
        return count($this->arr) ;
    }

    public function getMyArraySum() {
        $sum = null ;
        if (empty($this->arr)) {
            $sum = 0 ;
        } else {
            foreach($this->arr as $value) {
                $sum = $sum + $value ;
            }
        }
        return $sum ;
    }


    public function myInArray($needle, $arr , $strict = 0) {
        $resultInArray = null ;
        foreach($this->arr as $value) {
            if (($strict = 1 && $value === $needle) || ($strict = 0 && $value == $needle)) {
                $resultInArray = true ;
                break ;
            } else  {
                $resultInArray = false ;
            }
        }
        return $resultInArray ;
    }
    public function myArrayDiff($arr, $secondArrayDiff) {
        $firstArrayDiff = $this->arr ;
        foreach($firstArrayDiff as $key => $value1) {
            foreach ($secondArrayDiff as $value2) {
                if ($value1 == $value2){
                    unset($firstArrayDiff[$key]) ;
                    break ;
                }
            }
        }
        return $firstArrayDiff ;
    }
    public function mySortFunction($arr, $decrease = 0) {
        $length = $arr->getCountArray() ;
        $firstArraySort = $this->arr ;
        $intermediary = null ;
        $flag = true;
        if ($decrease) {
            while ($flag) {
                $flag = false;
                for ($i = 0; $i < $length - 1; $i++) {
                    if ($firstArraySort[$i] < $firstArraySort[$i + 1]) {
                        $intermediary = $firstArraySort[$i + 1];
                        $firstArraySort[$i + 1] = $firstArraySort[$i];
                        $firstArraySort[$i] = $intermediary;
                        $flag = true;
                    }
                }
            }
        } else {
            while ($flag) {
                $flag = false;
                for ($i = 0; $i < $length - 1; $i++) {
                    if ($firstArraySort[$i] > $firstArraySort[$i + 1]) {
                        $intermediary = $firstArraySort[$i + 1];
                        $firstArraySort[$i + 1] = $firstArraySort[$i];
                        $firstArraySort[$i] = $intermediary;
                        $flag = true;
                    }
                }
            }
        }
        return $firstArraySort ;
    }
}



$array1 = new MyArray([2, 13, 0, 18, 226, 48]) ;

var_dump($array1->getMyArray()) ;

echo ($array1->getMyArraySum()) ;

$needle = 2 ;
var_dump($needle);

var_dump ($array1->myInArray($needle, $array1, 0));

$arrayCompare = [2, 11, 81, 18, 226] ;
var_dump($array1->myArrayDiff($array1, $arrayCompare)) ;

var_dump($array1->mySortFunction($array1, 1)) ;

//Second variant when array as an argument of function
echo "<hr>";
$test = new MyArrayBor;
$array2 = [1, 5, 6];
$array3 = [8, 9, 10];
echo $test->getMyArraySumBor($array2);

// вопрос: как лучше передавать массив как свойство объекта или аргументом в функцию?
//в каких случаях лучше использовать конструктор, а в каких аргумент?