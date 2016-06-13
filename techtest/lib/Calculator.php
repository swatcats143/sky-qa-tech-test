<?php

class Calculator implements iCalculator {

    protected $stack;
    protected $op;
    protected $result;

    public function add($a, $b) {
        return ($a + $b);
    }

    public function subtract($a, $b) {
        return ($a - $b);
    }

    public function multiply($a, $b) {
        return ($a * $b);
    }
    
    public function divide($a, $b) {
        return ($a / $b);
    }

    public function cubeRoot($a) {
		return (pow($a, 1/3));
	}

    public function factorial($a) {
		$fact = 1;
    	for($i = 1; $i <= $a ;$i++)
        	$fact = $fact * $i;
    	return $fact;
	}

	public function decToHex($a) {
		return dechex ($a);
	}

    public function pressNumber($number) {
        $this->stack[] = $number;
    }

    public function pressAdd() {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "+";
    }

    public function pressSubtract() {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "-";
    }

    public function pressMultiply() {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "*";
    }

    public function pressDivide() {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "/";
    }
    public function pressCubeRoot() {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "∛";
    }
    public function pressDecToHex() {
         if(count($this->stack) > 1) {
             $this->evaluateStack();
         }
         $this->op = "Nn";
    }
    public function pressFactorial() {
         if(count($this->stack) > 1) {
             $this->evaluateStack();
         }
         $this->op = "!";
    }


    public function pressEquals() {
        return $this->evaluateStack();
    }

    protected function evaluateStack() {
        switch($this->op) {
            case "+":
                $result = $this->add(array_shift($this->stack), array_shift($this->stack));
                break;
            case "-":
                $result = $this->subtract(array_shift($this->stack), array_shift($this->stack));
                break;
            case "*":
                $result = $this->multiply(array_shift($this->stack), array_shift($this->stack));
                break;
            case "/":
                $result = $this->divide(array_shift($this->stack), array_shift($this->stack));
                break;

            case "∛":
                $result = $this->cubeRoot(array_shift($this->stack), array_shift($this->stack));
                break;
            case "!":
                $result = $this->factorial(array_shift($this->stack), array_shift($this->stack));
                break;
            case "Nn":
                $result = $this->decToHex(array_shift($this->stack), array_shift($this->stack));
                break;
        }
        $this->clearStack();
        $this->stack[] = $result;
    }

    protected function clearStack() {
        $this->stack = array();
    }

    public function readScreen() {
        $value = array_shift($this->stack);
        return $value;

}

}