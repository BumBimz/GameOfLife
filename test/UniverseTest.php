<?php
class UniverseTest extends PHPUnit_Framework_TestCase{
    function setUp(){
      $this->universe = new Universe();
      $this->randomer = $this->getMock('Randomer',array('random'));

      $univers=[[TRUE,TRUE,TRUE,TRUE,TRUE],
                [TRUE,TRUE,TRUE,TRUE,TRUE],
                [TRUE,TRUE,TRUE,FALSE,TRUE],
                [TRUE,FALSE,TRUE,TRUE,FALSE],
                [TRUE,TRUE,TRUE,TRUE,TRUE]];
      $this->universe->setUniverse($univers);
    }

    function providerLookAround(){
     $input = [[1,1,8],
               [1,2,7],
               [0,0,3]];
     return $input;
    }

    function testGetCellWhenRandomIsOneThenReturnAliveCell(){
      $this->randomer->expects($this->once())
        ->method('random')
        ->will($this->returnValue(1));
      $this->universe->setRandomer($this->randomer);
      $actual = $this->universe->getCell();
      $this->assertTrue($actual);
    }

    function testCreateUniverseWhenUniverseIsFiveXFourThenReturnTwentyCell(){
      $expected = [[TRUE,TRUE,TRUE,TRUE,TRUE],
       [TRUE,TRUE,TRUE,TRUE,TRUE],
       [TRUE,TRUE,TRUE,TRUE,TRUE],
       [TRUE,TRUE,TRUE,TRUE,TRUE]];
      $this->randomer->expects($this->exactly(20))
        ->method('random')
        ->will($this->returnValue(1));
      $this->universe->setHeightUniverse(4);
      $this->universe->setWidthUniverse(5);
      $this->universe->setRandomer($this->randomer);
      $actual = $this->universe->createUniverse();
      $this->assertEquals($expected,$actual);
    }

    function testSetUniverseWhenPositionAliveCellThenReturnAliveCell(){
      $univers=[[TRUE,TRUE,TRUE,TRUE,TRUE],
                [TRUE,TRUE,TRUE,TRUE,TRUE],
                [TRUE,TRUE,TRUE,FALSE,TRUE],
                [TRUE,FALSE,TRUE,TRUE,FALSE],
                [TRUE,TRUE,TRUE,TRUE,TRUE]];
      $actual = $this->universe->universe[0][0];
      $this->assertTrue($actual);
    }

    /**
     * @dataProvider providerLookAround
     */
    function testCellLookAroundWhenAddPositionOneOneUniverseThenReturnEightNeighbor($x,$y,$expected){
      $actual = $this->universe->lookAround($x,$y);
      $this->assertEquals($expected,$actual);
    }

  }
?>
