<?php
  class Universe{
    function setRandomer($randomer){
      $this->randomer = $randomer;
    } 

    function getCell(){
      return $this->randomer->random() == 1;
    }
  }
?>
