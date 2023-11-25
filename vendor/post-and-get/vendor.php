<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['login'])) {

    $VENDOR = new Vendor(NULL);

    $useremail = filter_var($_POST['useremail'], FILTER_SANITIZE_STRING);
    $password = md5(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

    if ($VENDOR->login($useremail, $password)) {
        header('Location: ../index.php?message=5');
        exit();
    } else {
        header('Location: ../login.php?message=23');
        exit();
    }
}

if (isset($_POST['update'])) {

    $VENDOR = new Vendor($_POST['id']);
    
  

    $VENDOR->name = mysql_real_escape_string($_POST['name']);
    $VENDOR->email = mysql_real_escape_string($_POST['email']);
    $VENDOR->date_of_birthday = filter_input(INPUT_POST, 'date_of_birthday');
    $VENDOR->contact_number = filter_input(INPUT_POST, 'contact_number');
    $VENDOR->home_address = filter_input(INPUT_POST, 'home_address');
    $VENDOR->city = filter_input(INPUT_POST, 'city');
    $VENDOR->about_me = $_POST['about_me'];

    $VALID = new Validator();

    $VALID->check($VENDOR, [
        'name' => ['required' => TRUE],
        'email' => ['required' => TRUE],
        'contact_number' => ['required' => TRUE],
        'city' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $VENDOR->update();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your changes saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

//if (isset($_POST['resendCode'])) {
//    $VENDOR = new Member($_POST['id']);
//
//    $contct_number = $VENDOR->contact_number;
//    $code = Member::generatePhoneNoVerifyCode($VENDOR->id);
//    $messge = "Your Sri Lanka Tourism Verification code is " . $code;
//
//    $sendmsg = Helper::sendSMS($contct_number, $messge);
//
//    if ($sendmsg) {
//        header('Location: ../phone-verification-page.php?message=31');
//    } else {
//        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?message=14');
//    }
//};

