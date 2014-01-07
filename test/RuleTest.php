<?php
class RuleTest extends PHPUnit_Framework_TestCase{
    function setUp(){
      $this->rule = new Rule();
    }
    function testRuleOneGiveAliveCellAndNeighborLessThanTwoWhenCallNextGenerationThenReturnDeadCell(){
      $expected = FALSE;
      $actual = $this->rule->nextGeneration(TRUE,1);
      $this->assertEquals($expected,$actual);
    }

    function testRuleTwoGiveAliveCellAndTwoNeighborWhenCallNextGenerationThenReturnAliveCell(){
      $expected = TRUE;
      $actual = $this->rule->nextGeneration(TRUE,2);
      $this->assertEquals($expected,$actual);
    }
  }
?>
