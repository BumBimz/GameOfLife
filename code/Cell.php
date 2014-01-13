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
