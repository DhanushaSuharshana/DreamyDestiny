<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $VENUE = new Venue(NULL);
    $VALID = new Validator();

    $VENUE->name = $_POST['name'];
    $VENUE->address = $_POST['address'];
    $VENUE->map = $_POST['map'];
    $VENUE->email = $_POST['email'];
    $VENUE->phone = $_POST['phone'];
    $VENUE->website = $_POST['website'];
    $VENUE->city = $_POST['city'];
    $VENUE->type = $_POST['type'];
    $VENUE->vendor = $_POST['vendor'];
    $VENUE->description = $_POST['description'];

    $VALID->check($VENUE, [
        'name' => ['required' => TRUE],
        'address' => ['required' => TRUE],
        'phone' => ['required' => TRUE],
        'city' => ['required' => TRUE],
        'type' => ['required' => TRUE],
        'vendor' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $VENUE->create();

        foreach ($_POST["venue-images"] as $key => $photos) {

            $VENUE_PHOTO = new VenuePhoto(NULL);
            $VENUE_PHOTO->venue = $VENUE->id;
            $VENUE_PHOTO->image_name = $photos;
            $VENUE_PHOTO->caption = '';
            $key++;
            $VENUE_PHOTO->sort = $key;
            $VENUE_PHOTO->create();
        }
        if (isset($_POST["facility"])) {
            $VENUE_FACILITY_DETAILS = new VenueFacilityDetails(NULL);
            $VENUE_FACILITY_DETAILS->venue = mysql_real_escape_string($VENUE->id);
            $VENUE_FACILITY_DETAILS->facility = implode(",", $_POST['facility']);
            $VENUE_FACILITY_DETAILS->create();
        }
        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

//        header('Location: ' . $_SERVER['HTTP_REFERER']);
        header('Location: ../venue-packages.php?id=' . $VENUE->id);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

//if (isset($_POST['update'])) {
//
//    $VENUE = new Accommodation($_POST['id']);
//
//    $VENUE->name = $_POST['name'];
//    $VENUE->address = $_POST['address'];
//    $VENUE->email = $_POST['email'];
//    $VENUE->phone = $_POST['phone'];
//    $VENUE->website = $_POST['website'];
//    $VENUE->city = $_POST['city'];
//    $VENUE->type = $_POST['type'];
//    $VENUE->member = $_POST['member'];
//    $VENUE->description = $_POST['description'];
//
//    $VALID = new Validator();
//    $VALID->check($VENUE, [
//        'name' => ['required' => TRUE],
//        'address' => ['required' => TRUE],
//        'email' => ['required' => TRUE],
//    ]);
//
//    if ($VALID->passed()) {
//        $VENUE->update();
//
//        if (!isset($_SESSION)) {
//            session_start();
//        }
//        $VALID->addError("Your changes saved successfully", 'success');
//        $_SESSION['ERRORS'] = $VALID->errors();
//
//        header('Location: ' . $_SERVER['HTTP_REFERER']);
//    } else {
//
//        if (!isset($_SESSION)) {
//            session_start();
//        }
//
//        $_SESSION['ERRORS'] = $VALID->errors();
//
//        header('Location: ' . $_SERVER['HTTP_REFERER']);
//    }
//}
//
//if (isset($_POST['save-data'])) {
//
//    foreach ($_POST['sort'] as $key => $img) {
//        $key = $key + 1;
//
//        $VENUE = Accommodation::arrange($key, $img);
//
//        header('Location: ' . $_SERVER['HTTP_REFERER']);
//    }
//}