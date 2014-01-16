<?php
  class Universe{ 
    function setRandomer($randomer){
      $this->randomer = $randomer;
    }

    function setHeightUniverse($heightUniverse){
      $this->heightUniverse = $heightUniverse-1;
    }

    function setWidthUniverse($widthUniverse){
      $this->widthUniverse = $widthUniverse-1;
    }

    function createUniverse(){
      for( $i=0; $i <= $this->heightUniverse; $i++ ){
        for( $j=0; $j <= $this->widthUniverse; $j++ ){
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
      $scopeX = $this->setScope($x,$this->heightUniverse);
      $scopeY = $this->setScope($y,$this->widthUniverse);
      $neighbor = $this->countNeighbor($x,$y,$scopeX,$scopeY);
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

    function countNeighbor($x,$y,$scopeX,$scopeY){
      $neighbor = 0;
      for($i=$scopeX[0];$i<=$scopeX[1];$i++){
        for($j=$scopeY[0];$j<=$scopeY[1];$j++){
          $checkX = $this->checkEquals($i, $x);
          $checkY = $this->checkEquals($j, $y);
          $checkNand = $this->checkNand($checkX, $checkY);
          $neighbor += $this->checkEquals( $checkNand, $this->universe[$i][$j] );
        }
      }
      return $neighbor;
    }

    function checkEquals($first,$second){
      return $first == $second;
    }

    function checkNand($first,$second){
      return $first*$second == 0;
    }
  }
?>
