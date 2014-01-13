<?php
  class CellTest extends PHPUnit_Framework_TestCase{
    function testCheckStatusCellWhenPositionAliveCellThenReturnAliveCell(){
      $aroundCell=[[TRUE,FALSE],
                  [FALSE,TRUE]];
      $expected = TRUE;
      $cell = new Cell();
      $actual= $cell->checkStatusCell($aroundCell[0][0]);
      $this->assertEquals($expected,$actual);
    }
  }
?>
