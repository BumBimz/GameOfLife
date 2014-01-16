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
      $scopeX = [$x-1,$x+1];
      $scopeY = [$y-1,$y+1];
      if($scopeX[0]<0) $scopeX[0] = $x;
      if($scopeY[0]<0) $scopeY[0] = $y;
      for($i=$scopeX[0];$i<=$scopeX[1];$i++){
        for($j=$scopeY[0];$j<=$scopeY[1];$j++){
          if(($i==$x && $j==$y) == FALSE)
            $neighbor += $this->universe[$i][$j];
        }
      }
      return $neighbor;
    }
  }
?>
