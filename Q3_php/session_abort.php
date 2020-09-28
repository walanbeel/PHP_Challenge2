<?php
    
    session_start();
    $_SESSION['country']="Yemen";
    echo session_encode();
    session_abort();
    session_start();
    echo "<br>".session_encode();
    

   
?>


