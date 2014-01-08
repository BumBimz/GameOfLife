<?php
class RuleTest extends PHPUnit_Framework_TestCase{
    function setUp(){
      $this->rule = new Rule();
    }
    function testRuleOneGiveAliveCellAndNeighborLessThanTwoWhenCallNextGenerationThenReturnDeadCell(){
      $expected = FALSE;
      $actual = $this->rule->ruleOfGame(TRUE,1);
      $this->assertEquals($expected,$actual);
    }

    function testRuleTwoGiveAliveCellAndTwoNeighborWhenCallNextGenerationThenReturnAliveCell(){
      $expected = TRUE;
      $actual = $this->rule->ruleOfGame(TRUE,2);
      $this->assertEquals($expected,$actual);
    }

    function testRuleTwoGiveAliveCellAndThreeNeighborWhenCallNextGenerationThenReturnAliveCell(){
      $expected = TRUE;
      $actual = $this->rule->ruleOfGame(TRUE,3);
      $this->assertEquals($expected,$actual);
    }

    function testRuleThreeGiveAliveCellAndNeighborMoreThreeWhenCallNextGenerationThenReturnDeadCell(){
      $expected = FALSE;
      $actual = $this->rule->ruleOfGame(TRUE,4);
      $this->assertEquals($expected,$actual);
    }
    
    function testRuleFourGiveDeadCellAndThreeNeighborWhenCallNextGenerationThenReturnAliveCell(){
      $expected = TRUE;
      $actual = $this->rule->ruleOfGame(FALSE,3);
      $this->assertEquals($expected,$actual);
    }

    function testRuleFourGiveDeadCellAndTwoNeighborWhenCallNextGenerationThenReturnDeadCell(){
      $expected = FALSE;
      $actual = $this->rule->ruleOfGame(FALSE,2);
      $this->assertEquals($expected,$actual);
    }
  }
?>
