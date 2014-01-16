<?php
  class Universe{
    function setRandomer($randomer){
      $this->randomer = $randomer;
    } 
    
    function setHeightUniverse($heightUniverse){
      $this->heightUniverse =$heightUniverse;
    }
    
    function setWidthUniverse($widthUniverse){
      $this->widthUniverse =$widthUniverse;
    }

    function createUniverse(){
      for($i=0;$i<$this->heightUniverse;$i++){
        for($j=0;$j<$this->widthUniverse;$j++){
          $this->universe[$i][$j] = $this->getCell();
        }
      }
    }
    function getCell(){
      return $this->randomer->random() == 1;
    }
  }
?>
