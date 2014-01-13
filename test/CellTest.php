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

    function ProviderSight(){
      $input = [[1,1,8],
        [1,2,7],
        [0,0,3],
        [0,4,3],
        [4,4,2]];
      return $input;
    }
    function testCheckStatusCellWhenPositionAliveCellThenReturnAliveCell(){
      $expected = TRUE;
      $actual = $this->cell->checkStatusCell($this->cell->univers[0][0]);
      $this->assertEquals($expected,$actual);
    }

    /**
     * @dataProvider ProviderSight
     */
    function testSightCellWhenAddPositionThenReturnExpected($x,$y,$expected){
      $actual = $this->cell->sight($x,$y);
      $this->assertEquals($expected,$actual);
    }
  }
?>
