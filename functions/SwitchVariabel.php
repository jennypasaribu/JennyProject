<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class SwitchVariabel{
      var $a;
      var $b;
      public function __construct($y,$z) {
		  $this->a=$y;
		  $this->b=$z;
	  }
      function ubahVariabel() {
         $this->a = $this->a+$this->b;
		 $this->b = $this->a-$this->b;
		 $this->a = $this->a-$this->b;
      } 
   }
?>
