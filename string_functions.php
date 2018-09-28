<?php
interface MyFunctionsString {
    public function getMyString();
}
abstract class MyAbstractStrings implements MyFunctionsString
{
    public $string;
    public function __construct($string){
        $this->string = $string;
    }
    abstract protected function getStrLen();
    abstract protected function mySubStr($start, $length = 0);

    public function myStrPos($needle, $offset = 0) {
    }

}
  class MyStringsForFunctions extends MyAbstractStrings {

      public function getMyString() {
          return $this->string;
      }
      protected function getStrLen(){
        $strLen = strlen($this->string);
          return $strLen;
    }
     protected function mySubStr($start, $length = 0)
    {
        $strLen = $this->getStrLen();
        if ($length == 0) {
            $lengthNeedle =  $strLen - $start;
        } elseif ($length > 0) {
            $lengthNeedle = $length;
        } else {
            $result = false;
            goto A;
        }
        $result = "";
        for ($i = $start; $i < ($lengthNeedle + $start); $i++) {
            $result .= $this->string[$i];
        }
        A:
        return $result;
    }
      public function getMySubStr($start, $length){
         return $this->mySubStr($start, $length) ;
    }
    public function myStrPos($needle, $offset = 0)
    {
        $result1 = null;
        if (gettype($needle) != "string") {
            $needle = chr($needle);
        }
        if ($offset >= 0) {
            $base = $offset;
        } else {
            $base = $this->getStrLen() + $offset;
        }
        for ($i = $base; $i < $this->getStrLen(); $i++) {
            $mySubStr = $this->mySubStr($i, strlen($needle));
            if ($mySubStr == $needle) {
                $result1 = $i;
                break;
            }
        }
        return $result1;
    }

    function mySubStrCount($needle, $offset = 0)
    {
        $resultStrSubCount = 0;
        $i = $offset;
        while ($i < $this->getStrLen()) {
            if ($this->mySubStr($i, strlen($needle)) == $needle) {
                $resultStrSubCount = ++$resultStrSubCount;
                $i = $i + strlen($needle) - 1;
            }
            $i = $i + 1;
        }
        return $resultStrSubCount;
    }

    function myExplode($delimiter)
    {
        $stringExploding = $this->string;
        $resultString = null;
        $i = 0;
        while ($i < $this->getStrLen()) {
            if ($stringExploding[$i] !== $delimiter) {
                $resultString .= $stringExploding[$i];
            } else {
                $arrayResult[] = $resultString;
                $resultString = null;
            }
            $i = $i + 1;
        }
        $arrayResult[] = $resultString;
        return $arrayResult;
    }
}

$string1 = new MyStringsForFunctions('HTML is not programming language');

$needle = "an";
echo $string1->string;
 var_dump($string1);
var_dump($string1->getMySubStr(5, 2));
var_dump($string1->myStrPos($needle, 6));
var_dump($string1->mySubStrCount($needle, 5));
var_dump($string1->myExplode(" "));