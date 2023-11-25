<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

$VENDOR = new Vendor(NULL);

if ($VENDOR->logOut()) {
    header('Location: ../login.php');
} else {
    header('Location: ./?error=2');
}

