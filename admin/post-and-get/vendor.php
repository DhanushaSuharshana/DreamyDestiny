<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

include_once(dirname(__FILE__) . '/../auth.php');

if (isset($_POST['create'])) {
    $VENDOR = new Vendor(NULL);
    $VALID = new Validator();

    $password = md5(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

    $VENDOR->name = filter_input(INPUT_POST, 'name');
    $VENDOR->email = filter_input(INPUT_POST, 'email');
    $VENDOR->date_of_birthday = filter_input(INPUT_POST, 'date_of_birthday');
    $VENDOR->contact_number = filter_input(INPUT_POST, 'contact_number');
    $VENDOR->home_address = filter_input(INPUT_POST, 'home_address');
    $VENDOR->city = filter_input(INPUT_POST, 'city');
    $VENDOR->password = $password;

    $dir_dest = '../../upload/vendor/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 500;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $VENDOR->profile_picture = $imgName;

    $VALID->check($VENDOR, [
        'name' => ['required' => TRUE],
        'email' => ['required' => TRUE],
        'contact_number' => ['required' => TRUE],
        'password' => ['required' => TRUE],
        'profile_picture' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $VENDOR->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
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

if (isset($_POST['update'])) {

    $dir_dest = '../../upload/vendor/';

    $handle = new Upload($_FILES['image']);

    if (empty($_POST ["oldImageName"])) {
        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = Helper::randamId();
            $handle->image_x = 500;
            $handle->image_y = 500;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }
        $img = $imgName;
    } else {
        $imgName = null;
        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $_POST ["oldImageName"];
            $handle->image_x = 500;
            $handle->image_y = 500;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }
        $img = $_POST ["oldImageName"];
    }

    $VENDOR = new Vendor($_POST['id']);

    $VENDOR->profile_picture = $img;
    $VENDOR->name = filter_input(INPUT_POST, 'name');
    $VENDOR->email = filter_input(INPUT_POST, 'email');
    $VENDOR->date_of_birthday = filter_input(INPUT_POST, 'date_of_birthday');
    $VENDOR->contact_number = filter_input(INPUT_POST, 'contact_number');
    $VENDOR->home_address = filter_input(INPUT_POST, 'home_address');
    $VENDOR->city = filter_input(INPUT_POST, 'city');
    $VENDOR->status = mysql_real_escape_string($_POST['active']);

    $VALID = new Validator();
    $VALID->check($VENDOR, [
        'profile_picture' => ['required' => TRUE],
        'name' => ['required' => TRUE],
        'email' => ['required' => TRUE],
        'contact_number' => ['required' => TRUE]
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