<?php

class MainTest extends PHPUnit_Framework_TestCase {

  /**
   * @var Main
   */
  protected $object;

  protected function setUp() {
    $this->object = new \Main;
  }

  /**
   * @test
   */
  public function methodReturnTrue() {
    $this->assertTrue($this->object->method());
  }
  
}
