<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!Vendor::authenticate()) {
    redirect('login.php');
}