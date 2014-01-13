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
      $sightX = [$x-1,$x+1];
      $sightY = [$y-1,$y+1];
      if($x==0) $sightX[0] = $x;
      if($y==0) $sightY[0] = $y;
      if($x==sizeof($this->univers)-1) $sightX[1] = $x;
      if($y==sizeof($this->univers[0])-1) $sightY[1] = $y;
      for($i = $sightX[0];$i <= $sightX[1];$i++){
        for($j = $sightY[0];$j <= $sightY[1];$j++){
          if($i!=$x||$j!=$y)
            $neighbor+= $this->checkStatusCell($this->univers[$i][$j]);
        }
      }
      return $neighbor;
    }
  }
?>
