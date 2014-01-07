<?php
  class Rule{
    function __construct(){
      $this->checkNeighbor = [FALSE,FALSE,TRUE,TRUE,FALSE,FALSE,FALSE,FALSE,];
    }

    function nextGeneration($statusOfCell,$numberOfNeighbor){
      $this->checkNeighbor[2] = $statusOfCell;
      return $this->checkNeighbor[$numberOfNeighbor];
    }

  }
?>
