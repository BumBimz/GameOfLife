<?php
  class Cell{
    function setUnivers($univers){
      $this->univers = $univers;
    }

    function checkStatusCell($neighbor){
      return $neighbor;
    }

    function sight($x,$y){
      $neighbor =0 ;
      for($i=$x-1;$i<=$x+1;$i++){
        for($j=$y-1;$j<=$y+1;$j++){
          if(($i==$x&&$j==$y) == False)
            $neighbor+= $this->checkStatusCell($this->univers[$i][$j]);
        }
      }
      return $neighbor;
    }
  }
?>
