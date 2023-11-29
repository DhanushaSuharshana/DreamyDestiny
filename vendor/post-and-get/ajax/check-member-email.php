<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');

if ($_POST['save']) {

    header('Content-Type: application/json; charset=UTF8');

    if (empty($_POST['name'])) {
        $response['status'] = 'error';
        $response['message'] = "Please enter your name.";
        echo json_encode($response);
        exit();
    } else if (empty($_POST['email'])) {
        $response['status'] = 'error';
        $response['message'] = "Please enter your email.";
        echo json_encode($response);
        exit();
    } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $response['status'] = 'error';
        $response['message'] = "Please enter valid email.";
        echo json_encode($response);
        exit();
    } else if (empty($_POST['cnfemail'])) {
        $response['status'] = 'error';
        $response['message'] = "Please confirm your email.";
        echo json_encode($response);
        exit();
    } else if (!filter_var($_POST['cnfemail'], FILTER_VALIDATE_EMAIL)) {
        $response['status'] = 'error';
        $response['message'] = "Please enter valid email.";
        echo json_encode($response);
        exit();
    } else if ($_POST['email'] !== $_POST['cnfemail']) {
        $response['status'] = 'error';
        $response['message'] = "Your email and confirm email does not match.";
        echo json_encode($response);
        exit();
    } else if (empty($_POST['contact_number'])) {
        $response['status'] = 'error';
        $response['message'] = "Please enter your contact number.";
        echo json_encode($response);
        exit();
    } else if (substr_count($_POST['contact_number'], '-') > 0 || substr_count($_POST['contact_number'], ' ') > 0 || substr_count($_POST['contact_number'], '(') > 0 || substr_count($_POST['contact_number'], ')') > 0) {
        $response['status'] = 'error';
        $response['message'] = "Please enter contact number without any characters except + as +123456789";
        echo json_encode($response);
        exit();
    } else if (empty($_POST['password'])) {
        $response['status'] = 'error';
        $response['message'] = "Please enter the password.";
        echo json_encode($response);
        exit();
    } else {
        $VENDOR = new Vendor(NULL);
        
        $result = $VENDOR->checkEmail($_POST['email']);
        if ($result) {
            $response['status'] = 'registered';
            $response['message'] = "The email address you entered is already in use.";
            echo json_encode($response);
            exit();
        } else {

            $VENDOR = new Vendor(NULL);

            $pw = md5($_POST['password']);
            $email = $_POST['email'];
            $cemail = $_POST['cnfemail'];

            $VENDOR->name = filter_input(INPUT_POST, 'name');
            $VENDOR->email = $email;
            $VENDOR->contact_number = filter_input(INPUT_POST, 'contact_number');
            $VENDOR->password = $pw;
            $VENDOR->status = 1;
            $VENDOR->create();

            $login = $VENDOR->login($VENDOR->email, $VENDOR->password);
            if ($login) {
                $response['status'] = 'success';
                echo json_encode($response);
                exit();
            }
        }
    }
}


