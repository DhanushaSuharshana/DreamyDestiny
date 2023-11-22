<?php
$USER = New User(NULL);

if (!isset($_SESSION)) {
    session_start();
} 
if (!$USER->authenticate()) {
    redirect('login.php'); 
}