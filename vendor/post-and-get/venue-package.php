<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

include_once(dirname(__FILE__) . '/../auth.php');

if (isset($_POST['create'])) {
    $VENUE_PACKAGE = new VenuePackage(NULL);
    $VALID = new Validator();

    $VENUE_PACKAGE->venue = $_POST['id'];
    $VENUE_PACKAGE->name = mysql_real_escape_string($_POST['name']);
    $VENUE_PACKAGE->description = mysql_real_escape_string($_POST['description']);
    $VENUE_PACKAGE->pax = mysql_real_escape_string($_POST['pax']);
    $VENUE_PACKAGE->price = mysql_real_escape_string($_POST['price']);
  
    $VALID->check($VENUE_PACKAGE, ['name' =>
            ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $RESULT = $VENUE_PACKAGE->create();

        foreach ($_POST["package-images"] as $key => $photos) {

            $PACKAGE_PHOTO = new VenuePackagePhoto(NULL);
            $PACKAGE_PHOTO->package = $VENUE_PACKAGE->id;
            $PACKAGE_PHOTO->image_name = $photos;
            $PACKAGE_PHOTO->caption = '';
            $key++;
            $PACKAGE_PHOTO->sort = $key;
            $PACKAGE_PHOTO->create();
        }
     
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

//if (isset($_POST['update'])) {
//    $VENUE_PACKAGE = new Room($_POST['id']);
//
//    $VENUE_PACKAGE->name = mysql_real_escape_string($_POST['name']);
//    $VENUE_PACKAGE->description = mysql_real_escape_string($_POST['description']);
//    $VENUE_PACKAGE->number_of_room = mysql_real_escape_string($_POST['number_of_room']);
//    $VENUE_PACKAGE->number_of_adults = mysql_real_escape_string($_POST['number_of_adults']);
//    $VENUE_PACKAGE->number_of_children = mysql_real_escape_string($_POST['number_of_children']);
//    $VENUE_PACKAGE->number_of_extra_bed = mysql_real_escape_string($_POST['number_of_extra_bed']);
//    $VENUE_PACKAGE->extra_bed_price = mysql_real_escape_string($_POST['extra_bed_price']);
//
//    $VALID = new Validator();
//    $VALID->check($VENUE_PACKAGE, ['name' =>
//            ['required' => TRUE]
//    ]);
//
//    if ($VALID->passed()) {
//        $VENUE_PACKAGE->update();
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

//if (isset($_POST['save-data'])) {
//
//    foreach ($_POST['sort'] as $key => $img) {
//        $key = $key + 1;
//
//        $VENUE_PACKAGE = Room::arrange($key, $img);
//
//        header('Location: ' . $_SERVER['HTTP_REFERER']);
//    }
//}    