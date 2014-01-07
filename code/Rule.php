<?php
  class Rule{
    function nextGeneration($statusOfCell,$numberOfNeighbor){
      if( $numberOfNeighbor == 2 && $statusOfCell == TRUE )
        return TRUE;
      if( $numberOfNeighbor == 3 )
        return TRUE;
    }
  }
?>
