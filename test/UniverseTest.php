<?php
  class UniverseTest extends PHPUnit_Framework_TestCase{
    function testGetCellWhenRandomIsOneThenReturnAliveCell(){
      $randomer = $this->getMock('Randomer',array('random'));
      $randomer->expects($this->once())
        ->method('random')
        ->will($this->returnValue(1));
      $universe = new Universe();
      $universe->setRandomer($randomer);
      $actual = $universe->getCell();
      $this->assertTrue($actual);
    }

    function testCreateUniverseWhenUniverseIsFiveXFourThenReturnTwentyCell(){
      $excepted = [[TRUE,TRUE,TRUE,TRUE,TRUE],
       [TRUE,TRUE,TRUE,TRUE,TRUE],
       [TRUE,TRUE,TRUE,TRUE,TRUE],
       [TRUE,TRUE,TRUE,TRUE,TRUE]];
      $randomer = $this->getMock('Randomer',array('random'));
      $randomer->expects($this->exactly(20))
        ->method('random')
        ->will($this->returnValue(1));
      $universe = new Universe();
      $universe->setHeightUniverse(4);
      $universe->setWidthUniverse(5);
      $universe->setRandomer($randomer);
      $universe->createUniverse();
      $this->assertEquals($excepted,$universe->universe);
    }
  }
?>
