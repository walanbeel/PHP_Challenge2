<?php

session_id("wala");
session_start();
print "My session ID is: " . session_id();
session_destroy();

?>