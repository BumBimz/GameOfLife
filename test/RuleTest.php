<?php
  class RuleTest extends PHPUnit_Framework_TestCase{
    function testRuleOneGiveAliveCellAndNeighborLessThanTwoWhenCallNextGenerationThenReturnDeadCell(){
      $expected = FALSE;
      $rule = new Rule();
      $actual = $rule->nextGeneration(TRUE,1);
      $this->assertEquals($expected,$actual);
    }

    function testRuleTwoGiveAliveCellAndTwoNeighborWhenCallNextGenerationThenReturnAliveCell(){
      $expected = TRUE;
      $rule = new Rule();
      $actual = $rule->nextGeneration(TRUE,2);
      $this->assertEquals($expected,$actual);
    }
  }
?>
