<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['changePassword'])) {

    $OldPassOk = Admin::checkOldPass($_POST["id"], $_POST["oldPass"]);

    if ($_POST["newPass"] === $_POST["confPass"]) {
        if ($OldPassOk) {
            $result = Admin::changePassword($_POST["id"], $_POST["newPass"]);
            if ($result == 'TRUE') {
                header('location: log-out.php');
                exit();
            } else {
                header('location: ../change-password.php?id=' . $_POST["id"] . '&&message=14');
                exit();
            }
        } else {
            header('location: ../change-password.php?id=' . $_POST["id"] . '&&message=18');
            exit();
        }
    } else {
        header('location: ../change-password.php?id=' . $_POST["id"] . '&&message=17');
        exit();
    }
}

if (isset($_POST['PasswordReset'])) {
    $ADMIN = new Admin(NULL);
    $code = $_POST["code"];
    $password = $_POST["password"];
    $confpassword = $_POST["confirmpassword"];

    if ($password === $confpassword && $password != NULL && $confpassword != NULL) {
        if ($ADMIN->SelectResetCode($code)) {
            $ADMIN->updatePassword($password, $code);
            header('Location: ../login.php?message=15');
        } else {
            header('Location: ../reset-password.php?message=16');
        }
    } else {
        header('Location: ../reset-password.php?message=17');
    }


//    $OldPassOk = Admin::ChecknewReset($_POST["code"], $_POST["password"]);
//
//    header('Location: ../reset-password.php?message=3');
}

