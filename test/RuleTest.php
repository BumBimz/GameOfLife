<?php
class RuleTest extends PHPUnit_Framework_TestCase{
    function setUp(){
      $this->rule = new Rule();
    }
    function testRuleOneWhenCallAliveCellHaveNeighborLessTwoThenCellDie(){
      $expected = FALSE;
      $actual = $this->rule->ruleOfGame(TRUE,1);
      $this->assertEquals($expected,$actual);
    }

    function testRuleTwoWhenAliveCellHaveTwoNeighborThenCellAlive(){
      $expected = TRUE;
      $actual = $this->rule->ruleOfGame(TRUE,2);
      $this->assertEquals($expected,$actual);
    }

    function testRuleTwoWhenAliveCellHaveThreeNeighborThenCellAlive(){
      $expected = TRUE;
      $actual = $this->rule->ruleOfGame(TRUE,3);
      $this->assertEquals($expected,$actual);
    }

    function testRuleThreeWhenAliveCellHaveNeighborMoreThreeThenCellDie(){
      $expected = FALSE;
      $actual = $this->rule->ruleOfGame(TRUE,4);
      $this->assertEquals($expected,$actual);
    }
    
    function testRuleFourWhenDeadCellHaveThreeNeighborThenCellReborn(){
      $expected = TRUE;
      $actual = $this->rule->ruleOfGame(FALSE,3);
      $this->assertEquals($expected,$actual);
    }

    function testRuleFourWhenDeadCellHaveTwoNeighborThenCellDie(){
      $expected = FALSE;
      $actual = $this->rule->ruleOfGame(FALSE,2);
      $this->assertEquals($expected,$actual);
    }
  }
?>
