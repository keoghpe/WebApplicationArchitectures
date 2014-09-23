<?php

/**
* 
*/
class Calculator
{
	
	public function add()
	{
		$sum = 0;
		$args = func_get_args();

		foreach ($args as $num) {
			if (!is_numeric($num)) {
				throw new Exception("Error Processing Request; " . $num . " is not numeric." , 1);
			} else {
				$sum += $num;
			}
		}
		return $sum;
	}

	public function subtract()
	{
		$args = func_get_args();
		$first = false;
		$total = 0;

		foreach ($args as $num) {
			if (!is_numeric($num)) {
				throw new Exception("Error Processing Request; " . $num . " is not numeric." , 1);
			} else {
				if (!$first) {
					$total = $num;
					$first = true;
				} else {
					$total -= $num;
				}
			}
		}
		return $total;
	}

	public function multiply()
	{
		$total = 1;
		$args = func_get_args();

		foreach ($args as $num) {
			if (!is_numeric($num)) {
				throw new Exception("Error Processing Request; " . $num . " is not numeric." , 1);
			} else {
				$total *= $num;
			}
		}
		return $total;
	}

	public function divide()
	{
		$args = func_get_args();
		$first = false;
		$total = 0;

		foreach ($args as $num) {
			if (!is_numeric($num)) {
				throw new Exception("Error Processing Request; " . $num . " is not numeric." , 1);
			} else {
				if (!$first) {
					$total = $num;
					$first = true;
				} else {
					$total /= $num;
				}
			}
		}
		return $total;
	}
}
?>