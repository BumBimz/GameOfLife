<?php
class CellTest extends PHPUnit_Framework_TestCase{
    function setUp(){
      $this->cell = new Cell();
      $univers=[[TRUE,TRUE,TRUE,TRUE,TRUE],
                  [TRUE,TRUE,TRUE,TRUE,TRUE],
                  [TRUE,TRUE,TRUE,FALSE,TRUE],
                  [TRUE,FALSE,TRUE,TRUE,FALSE],
                  [TRUE,TRUE,TRUE,TRUE,TRUE]];
      $this->cell->setUnivers($univers);
    }

    function testCheckStatusCellWhenPositionAliveCellThenReturnAliveCell(){
      $expected = TRUE;
      $actual = $this->cell->checkStatusCell($this->cell->univers[0][0]);
      $this->assertEquals($expected,$actual);
    }

    function testSightCellWhenMiddleBoardThenReturnEight(){
      $expected = 8;
      $actual = $this->cell->sight(1,1);
      $this->assertEquals($expected,$actual);
    }
    
    function testSightCellWhenMiddleBoardThenReturnSeven(){
      $expected = 7;
      $actual = $this->cell->sight(1,2);
      $this->assertEquals($expected,$actual);
    }
  }
?>
