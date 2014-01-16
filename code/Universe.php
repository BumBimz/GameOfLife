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
      $this->setHeightUniverse(sizeOf($universe));
      $this->setWidthUniverse(sizeOf($universe[0]));
      $this->universe = $universe;
    }

    function lookAround($x,$y){
      $neighbor = 0;
      $maxX = $this->heightUniverse-1;
      $maxY = $this->widthUniverse-1;
      $scopeX = $this->setScope($x,$maxX);
      $scopeY = $this->setScope($y,$maxY);
      for($i=$scopeX[0];$i<=$scopeX[1];$i++){
        for($j=$scopeY[0];$j<=$scopeY[1];$j++){
         $checkPosition = $this->checkPosition($i,$j,$x,$y);
         $neighbor += $this->checkEquals($checkPosition,$this->universe[$i][$j]);
        }
      }
      return $neighbor;
    }

    function setScope($position,$max){
      $scope[0] = $this->setFirstPosition($position);
      $scope[1] = $this->setLastPosition($position,$max);
      return $scope;
    }

    function setFirstPosition($position){
      $check = $this->checkMore($position,0);
      $setFirstPosition = [$position,$position-1];
      return $setFirstPosition[$check];
    }
    
    function setLastPosition($position,$max){
      $check = $this->checkMore($max,$position);
      $setLastPosition = [$position,$position+1];
      return $setLastPosition[$check];
    }

    function checkMore($first,$second){
      return $first>$second;
    }

    function checkPosition($i,$j,$x,$y){
      $checkX = $this->checkEquals($i,$x);
      $checkY = $this->checkEquals($j,$y);
      $checkNand = $this->checkNand($checkX,$checkY);
      return $checkNand;
    }    
    function checkEquals($first,$second){
      return $first == $second;
    }

    function checkNand($first,$second){
      return $first*$second == 0;
    }
  }
?>
