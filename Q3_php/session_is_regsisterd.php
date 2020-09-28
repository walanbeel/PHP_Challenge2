<?php

function __construct($new = false)
 {
     if ($new) {
         $sessID = isset($_COOKIE['sessID']) ? $_COOKIE['sessID'] : '';
         if ($sessID) {
             session_id($sessID);
             session_start();
             if (array_key_exists('userId', $_SESSION) && $_SESSION['userId'] > -1) {
                 $this->id = $_SESSION['userId'];
                 $this->load();
             } else {
                 $this->id = -1;
             }
         } else {
             mt_srand((double) microtime() * 100000);
             $sessID = md5(uniqid(mt_rand()));
             setcookie('sessID', $sessID, time() + 6 * 3600, '/');
             session_id($sessID);
             session_name($sessID);
             @session_start();
             session_register('userId', 'userTime');
             $_SESSION['userId'] = -1;
             $this->id = -1;
             $_SESSION['userTime'] = time();
         }
         $this->sessionId = $sessID;
     }
 }

?>