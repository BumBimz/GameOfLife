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
      $scopeX = $this->setScope($x);
      $scopeY = $this->setScope($y);
      for($i=$scopeX[0];$i<=$scopeX[1];$i++){
        for($j=$scopeY[0];$j<=$scopeY[1];$j++){
          if(($i==$x && $j==$y) == FALSE)
            $neighbor += $this->universe[$i][$j];
        }
      }
      return $neighbor;
    }

    function setScope($position){
      $scope = [$position-1,$position+1];
      if($scope[0]<0)
        $scope[0] = $position;
      return $scope;
    }
  }
?>
