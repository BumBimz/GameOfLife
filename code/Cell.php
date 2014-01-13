<?php
  class Cell{
    function setUnivers($univers){
      $this->univers = $univers;
    }

    function checkStatusCell($neighbor){
      return $neighbor;
    }

    function sight($x,$y){
      $neighbor = 0;
      $this->setScope($x,$y); 
      for($i = $this->sightX[0];$i <= $this->sightX[1];$i++){
        for($j = $this->sightY[0];$j <= $this->sightY[1];$j++){
          $neighbor += $this->checkNeighbor($i,$j,$x,$y);
        }
      }
      return $neighbor;
    }

    function setScope($x,$y){
      $this->sightX[0] = $this->setFirstPosition($x);
      $this->sightY[0] = $this->setFirstPosition($y);
      $check = $this->checkmore(sizeof($this->univers)-1,$x);
      $this->sightX[1] = $this->setLastposition($x,$check);
      $check = $this->checkmore(sizeof($this->univers[0])-1,$y);
      $this->sightY[1] = $this->setLastposition($y,$check);
    }

    function setFirstPosition($value){
      $check = $this->checkMore($value,0);
      $setFirst = [$value,$value-1];
      return $setFirst[$check*1];
    }

    function checkMore($first,$second){
      return $first > $second;
    }

    function setLastPosition($value,$check){
      $setFirst = [$value,$value+1];
      return $setFirst[$check*1];
    }

    function checkNeighbor($i,$j,$x,$y){
      $resultX = $this->checkEquals($i,$x);
      $resultY = $this->checkEquals($j,$y);
      $resultNand = $this->checkNand($resultX,$resultY);
      return $resultNand == $this->univers[$i][$j];
    }

    function checkEquals($first,$second){
      return $first == $second;
    }

    function checkNand($first,$second){
      return $first*$second == 0;
    }
  }
?>
