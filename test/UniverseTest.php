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
  }
?>
