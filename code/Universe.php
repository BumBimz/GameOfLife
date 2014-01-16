<?php
  class Universe{ 
    function setHeightUniverse($heightUniverse){
      $this->heightUniverse =$heightUniverse;
    }
    
    function setWidthUniverse($widthUniverse){
      $this->widthUniverse =$widthUniverse;
    }

    function setRandomer($randomer){
      $this->randomer = $randomer;
    }

    function createUniverse(){
      for( $i=0; $i < $this->heightUniverse; $i++ ){
        for( $j=0; $j < $this->widthUniverse; $j++ ){
          $universe[$i][$j] = $this->getCell();
        }
      }
      return $universe;
    }

    function getCell(){
      return $this->randomer->random() == 1;
    }

    function setUniverse($universe){
      $this->universe = $universe;
    }

    function lookAround($x,$y){
      $neighbor = 0;
      for($i=$x-1;$i<=$x+1;$i++){
        for($j=$y-1;$j<=$y+1;$j++){
          if(($i==$x && $j==$y) == FALSE)
            $neighbor += $this->universe[$i][$j];
        }
      }
      return $neighbor;
    }
  }
?>
