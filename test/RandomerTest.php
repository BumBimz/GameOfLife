<?php
  class RandomerTest extends PHPUnit_Framework_TestCase{
    function testRandomWhenRandomThenReturnZeroOrOne(){
      $random = new Randomer();
      $actual = $random->random();
      $this->assertGreaterThanOrEqual(0,$actual);
      $this->assertLessThanOrEqual(1,$actual);
    }
  }
?>
