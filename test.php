<?php
require 'index.php';
class CalculatorTests extends PHPUnit_Framework_TestCase
{
private $calculator;
protected function setUp()
{
$this->index= new index();
}
public function testAdd()
{
$result=$this->index->add(1,2);
$this->assertEquals(3,$result);
}
}




