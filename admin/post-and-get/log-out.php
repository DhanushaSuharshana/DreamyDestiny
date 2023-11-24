<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

$ADMIN = new Admin(NULL);

if ($ADMIN->logOut()) {
    header('Location: ../login.php');
} else {
    header('Location: ./?error=2');
}

