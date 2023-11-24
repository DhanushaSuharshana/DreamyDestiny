<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

include_once(dirname(__FILE__) . '/../auth.php');

if (isset($_POST['add-visitor'])) {
    $VISITOR = new Visitor(NULL);
    $VALID = new Validator();

    $password = md5(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

    $VISITOR->first_name = filter_input(INPUT_POST, 'first_name');
    $VISITOR->last_name = filter_input(INPUT_POST, 'last_name');
    $VISITOR->email = filter_input(INPUT_POST, 'email');
    $VISITOR->contact_number = filter_input(INPUT_POST, 'contact_number');
    $VISITOR->city = filter_input(INPUT_POST, 'city');
    $VISITOR->address = filter_input(INPUT_POST, 'address');
    $VISITOR->password = $password;

    $dir_dest = '../../upload/visitor/';

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

    $VISITOR->image_name = $imgName;

    $VALID->check($VISITOR, [
        'first_name' => ['required' => TRUE],
        'email' => ['required' => TRUE],
        'contact_number' => ['required' => TRUE],
        'city' => ['required' => TRUE],
        'image_name' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $VISITOR->create();

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

if (isset($_POST['update-visitor'])) {

    $dir_dest = '../../upload/visitor/';

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

    $VISITOR = new Visitor($_POST['id']);

    $VISITOR->first_name = filter_input(INPUT_POST, 'first_name');
    $VISITOR->last_name = filter_input(INPUT_POST, 'last_name');
    $VISITOR->email = filter_input(INPUT_POST, 'email');
    $VISITOR->contact_number = filter_input(INPUT_POST, 'contact_number');
    $VISITOR->city = filter_input(INPUT_POST, 'city');
    $VISITOR->address = filter_input(INPUT_POST, 'address');

    $VALID = new Validator();
    $VALID->check($VISITOR, [
        'first_name' => ['required' => TRUE],
        'email' => ['required' => TRUE],
        'contact_number' => ['required' => TRUE],
        'city' => ['required' => TRUE],
    ]);

    if ($VALID->passed()) {
        $VISITOR->update();
        $VISITOR->ChangeProPic($_POST['id'], $img);

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