<?php
   if (!function_exists('session_register')) {
    function session_register($name){
       global $$name;
       if (!isset($_SESSION[$name])) {
           $_SESSION[$name] = $$name;
         }
         $$name = &$_SESSION[$name];
     }
   }
?>
