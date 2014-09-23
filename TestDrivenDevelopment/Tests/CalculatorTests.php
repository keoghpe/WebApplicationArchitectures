<?php

require_once '../simpletest/autorun.php';

/**
* 
*/
class CalculatorTests extends UnitTestCase
{
	private $calculator;

	public function setUp()
	{
		require_once '../App/Calculator.php';
		$this->calculator = new Calculator();
	}

	public function tearDown()
	{
		$this->calculator = NULL;
	}
	public function testAdd()
	{
		$equals = $this->calculator->add(1,2);
		$this->assertEqual(3, $equals);

		$equals = $this->calculator->add(1,2,3);
		$this->assertEqual(6, $equals);

		$equals = $this->calculator->add(1,2,3,4);
		$this->assertEqual(10, $equals);

		try {
			$this->calculator->add('hello', 5);
			$this->fail("Exception was expected");
		} catch (Exception $e) {
			$this->pass();
		}

		try {
			$this->calculator->add(NULL, 5);
			$this->fail("Exception was expected");
		} catch (Exception $e) {
			$this->pass();
		}
	}

	public function testSubtract()
	{
		$equals = $this->calculator->subtract(2, 1);
		$this->assertEqual(1, $equals);

		$equals = $this->calculator->subtract(5,2,3);
		$this->assertEqual(0, $equals);

		$equals = $this->calculator->subtract(1,2,3,4);
		$this->assertEqual(-8, $equals);

		try {
			$this->calculator->subtract('hello', 5);
			$this->fail("Exception was expected");
		} catch (Exception $e) {
			$this->pass();
		}

		try {
			$this->calculator->subtract(NULL, 5);
			$this->fail("Exception was expected");
		} catch (Exception $e) {
			$this->pass();
		}
	}

	public function testMultiply()
	{
		$equals = $this->calculator->multiply(5,2);
		$this->assertEqual(10, $equals);

		$equals = $this->calculator->multiply(5,2,3);
		$this->assertEqual(30, $equals);

		$equals = $this->calculator->multiply(10,2,3,4);
		$this->assertEqual(240, $equals);

		try {
			$this->calculator->multiply('hello', 5);
			$this->fail("Exception was expected");
		} catch (Exception $e) {
			$this->pass();
		}

		try {
			$this->calculator->multiply(NULL, 5);
			$this->fail("Exception was expected");
		} catch (Exception $e) {
			$this->pass();
		}
	}

	public function testDivide()
	{
		$equals = $this->calculator->divide(6,2);
		$this->assertEqual(3, $equals);

		$equals = $this->calculator->divide(6,3,4);
		$this->assertEqual(.5, $equals);

		$equals = $this->calculator->divide(16,8,2,4);
		$this->assertEqual(.25, $equals);

		try {
			$this->calculator->divide('hello', 5);
			$this->fail("Exception was expected");
		} catch (Exception $e) {
			$this->pass();
		}

		try {
			$this->calculator->divide(NULL, 5);
			$this->fail("Exception was expected");
		} catch (Exception $e) {
			$this->pass();
		}
	}
}
?>