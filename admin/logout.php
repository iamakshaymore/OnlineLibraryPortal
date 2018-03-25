<?php
session_start();
session_destroy();
header('Location: http://testadmin.akshaymore.in/');
exit;
?>