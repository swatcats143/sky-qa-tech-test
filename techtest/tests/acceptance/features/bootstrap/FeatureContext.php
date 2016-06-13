<?php

use Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

set_include_path(get_include_path() . PATH_SEPARATOR . "../../lib");

require_once("iCalculator.php");
require_once("iScientificCalculator.php");
require_once("Calculator.php");

class FeatureContext extends BehatContext {
    protected $calculator;

    public function __construct() {
        $this->calculator = new Calculator();
    }

    /**
     * @Given /^I enter "(\d+)" into the calculator$/
     */
    public function iEnterIntoTheCalculator($argument1) {
        $this->calculator->pressNumber($argument1);
    }

    /**
     * @When /^I hit "multiply"$/
     */
    public function iHitMultiply() {
        $this->calculator->pressMultiply();
    }

    /**
     * @When /^I hit "divide"$/
     */
    public function iHitDivide() {
        $this->calculator->pressDivide();
    }

    /**
     * @Given /^I hit "equals"$/
     */
    public function iHitEquals() {
        $this->calculator->pressEquals();
    }

    /**
     * @Then /^I see a result of "(\d+)"$/
     */
    public function iSeeAResultOf($argument1) {
        $result = $this->calculator->readScreen();
        if($result != $argument1) {
            throw new Exception("Wrong result, actual is [$result]");
        }
    }
/**
     * @Given /^I hit "add"$/
     */
    public function iHitAdd()
    {
         $this->calculator->pressAdd();

    }

/**
     * @Given /^I hit "subtract"$/
     */
    public function iHitSubtract()
    {
         $this->calculator->pressSubtract();

    }


	/**
     * @When /^I hit "cuberoot"$/
     */
    public function iHitCubeRoot() {
        $this->calculator->pressCubeRoot();
    }

	/**
     * @When /^I hit "factorial"$/
     */
    public function iHitFactorial() {
        $this->calculator->pressFactorial();
    }

	/**
     * @When /^I hit "decToHex"$/
     */
    public function iHitDecToHex() {
        $this->calculator->pressDecToHex();
    }


}
