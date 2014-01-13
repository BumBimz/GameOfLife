<?php
  class CellTest extends PHPUnit_Framework_TestCase{
    function testCheckStatusCellWhenPositionAliveCellThenReturnAliveCell(){
      $aroundCell=[[TRUE,FALSE],
                  [FALSE,TRUE]];
      $expected = TRUE;
      $cell = new Cell();
      $actual = $cell->checkStatusCell($aroundCell[0][0]);
      $this->assertEquals($expected,$actual);
    }

    function testSetUniverWhenGetUniverThenReturnUnivers(){
      $univers=[[TRUE,TRUE,TRUE,TRUE,TRUE],
                  [TRUE,TRUE,TRUE,TRUE,TRUE],
                  [TRUE,TRUE,TRUE,FALSE,TRUE],
                  [TRUE,FALSE,TRUE,TRUE,FALSE],
                  [TRUE,TRUE,TRUE,TRUE,TRUE]];
      
      $expected=[[TRUE,TRUE,TRUE,TRUE,TRUE],
                  [TRUE,TRUE,TRUE,TRUE,TRUE],
                  [TRUE,TRUE,TRUE,FALSE,TRUE],
                  [TRUE,FALSE,TRUE,TRUE,FALSE],
                  [TRUE,TRUE,TRUE,TRUE,TRUE]];
      $cell = new Cell();
      $cell->setUnivers($univers);
      $actual = $cell->univers;
      $this->assertEquals($expected,$actual);
    }
    function testSightCellWhenMiddleBoardThenReturnEight(){
      $boardCell=[[TRUE,TRUE,TRUE,TRUE,TRUE],
                  [TRUE,TRUE,TRUE,TRUE,TRUE],
                  [TRUE,TRUE,TRUE,FALSE,TRUE],
                  [TRUE,FALSE,TRUE,TRUE,FALSE],
                  [TRUE,TRUE,TRUE,TRUE,TRUE]];
      $expected = 8;
      $cell = new Cell();
      $cell->setUnivers($boardCell);
      $actual = $cell->sight(1,1);
      $this->assertEquals($expected,$actual);
    }
    
    function testSightCellWhenMiddleBoardThenReturnSeven(){
      $boardCell=[[TRUE,TRUE,TRUE,TRUE,TRUE],
                  [TRUE,TRUE,TRUE,TRUE,TRUE],
                  [TRUE,TRUE,TRUE,FALSE,TRUE],
                  [TRUE,FALSE,TRUE,TRUE,FALSE],
                  [TRUE,TRUE,TRUE,TRUE,TRUE]];
      $expected = 7;
      $cell = new Cell();
      $cell->setUnivers($boardCell);
      $actual = $cell->sight(1,2);
      $this->assertEquals($expected,$actual);
    }
  }
?>
