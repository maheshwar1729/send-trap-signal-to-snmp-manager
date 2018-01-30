<?php
   class a extends SQLite3 {
      function __construct() {
         $this->open('macho.db');
      }
   } 
?>
