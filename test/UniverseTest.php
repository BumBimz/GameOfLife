<?php
class UniverseTest extends PHPUnit_Framework_TestCase{
    function setUp(){
      $this->universe = new Universe();
      $this->randomer = $this->getMock('Randomer',array('random'));
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
      $excepted = [[TRUE,TRUE,TRUE,TRUE,TRUE],
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
      $this->assertEquals($excepted,$actual);
    }
  }
?>
