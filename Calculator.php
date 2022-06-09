<?php

class Calculator
{
  function add($a=0, $b=0) {
		return $a + $b;
  }

   function subtract($a, $b) {
		return $a - $b;
  }

  
  function multiply($a, $b) {
		return $a * $b;
  }
  
 function divide($a, $b) {
	if($b==0){return "ERR";}
   	 return $a / $b;
  }

}