<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $VENUE = new Venue(NULL);
    $VALID = new Validator();

    $VENUE->name = mysql_real_escape_string($_POST['name']);
    $VENUE->address = mysql_real_escape_string($_POST['address']);
    $VENUE->map = mysql_real_escape_string($_POST['map']);
    $VENUE->email = mysql_real_escape_string($_POST['email']);
    $VENUE->phone = mysql_real_escape_string($_POST['phone']);
    $VENUE->website = mysql_real_escape_string($_POST['website']);
    $VENUE->city = mysql_real_escape_string($_POST['city']);
    $VENUE->type = mysql_real_escape_string($_POST['type']);
    $VENUE->vendor = mysql_real_escape_string($_POST['vendor']);
    $VENUE->description = mysql_real_escape_string($_POST['description']);

    $dir_dest = '../../upload/venue/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;
    $img = Helper::randamId();

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 500;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }
    $VENUE->image = $imgName;

    $VALID->check($VENUE, [
        'name' => ['required' => TRUE],
        'address' => ['required' => TRUE],
        'phone' => ['required' => TRUE],
        'city' => ['required' => TRUE],
        'type' => ['required' => TRUE],
        'address' => ['required' => TRUE],
        'description' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $VENUE->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header("location: ../view-venue-facilities.php?id=" . $VENUE->id);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['update'])) {

    $dir_dest = '../../upload/venue/';
    $handle = new Upload($_FILES['image']);

    $img = $_POST ["oldImageName"];

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 500;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $img = $handle->file_dst_name;
        }
    }

    $VENUE = new Venue($_POST['id']);

    $VENUE->image = $img;
    $VENUE->name = mysql_real_escape_string($_POST['name']);
    $VENUE->address = mysql_real_escape_string($_POST['address']);
    $VENUE->map = mysql_real_escape_string($_POST['map']);
    $VENUE->email = mysql_real_escape_string($_POST['email']);
    $VENUE->phone = mysql_real_escape_string($_POST['phone']);
    $VENUE->website = mysql_real_escape_string($_POST['website']);
    $VENUE->city = mysql_real_escape_string($_POST['city']);
    $VENUE->type = mysql_real_escape_string($_POST['type']);
    $VENUE->vendor = mysql_real_escape_string($_POST['vendor']);
    $VENUE->description = mysql_real_escape_string($_POST['description']);

    $VALID = new Validator();
    $VALID->check($VENUE, [
        'name' => ['required' => TRUE],
        'address' => ['required' => TRUE],
        'email' => ['required' => TRUE],
    ]);

    if ($VALID->passed()) {
        $VENUE->update();

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

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $VENUE = Accommodation::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}