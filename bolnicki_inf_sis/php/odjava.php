<?php 

session_start();
session_destroy();
header('Location: ../logovanje.php?success=2');
