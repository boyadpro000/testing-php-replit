<?php
//calculator-subtract-test.php
require_once 'simpletest/autorun.php';
include 'Calculator.php';

class TestOfCalculator extends UnitTestCase {
	function testSubtract() {
	  $myCalc = new Calculator();
	  $this->assertEqual($myCalc->add(4.2,2.1), 2.1, "4.2 - 2.1");
	  $this->assertEqual($myCalc->add(4,2), 2, "4 - 2");
	}
	
