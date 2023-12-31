<?php

include_once(dirname(__FILE__) . '/../../class/include.php');


if (isset($_POST['create'])) {

    $VENUE_FACILITY_DETAILS = new VenueFacilityDetails(NULL);


    $result = $VENUE_FACILITY_DETAILS->getFacilitiesByAccommodationId($_POST['venue_id']);

    $ResultAccomodationID = $result['venue'];

    if ($ResultAccomodationID == $_POST['venue_id']) {

        $VENUE_FACILITY_DETAILS = new VenueFacilityDetails($result['id']);

        $VENUE_FACILITY_DETAILS->facility = implode(",", $_POST['facility']);


        $VALID = new Validator();
        $VALID->check($VENUE_FACILITY_DETAILS, [
            'facility' => ['required' => TRUE]
        ]);

        if ($VALID->passed()) {
            $VENUE_FACILITY_DETAILS->update();

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
    } else {

        $VENUE_FACILITY_DETAILS->venue = mysql_real_escape_string($_POST['venue_id']);
        $VENUE_FACILITY_DETAILS->facility = implode(",", $_POST['facility']);

        $VALID = new Validator();
        $VALID->check($VENUE_FACILITY_DETAILS, [
            'venue' => ['required' => TRUE],
            'facility' => ['required' => TRUE],
        ]);

        if ($VALID->passed()) {
            $VENUE_FACILITY_DETAILS->create();

            if (!isset($_SESSION)) {
                session_start();
            }
            $VALID->addError("Your data was saved successfully", 'success');
            $_SESSION['ERRORS'] = $VALID->errors();

            header("location: ../view-venue-photos.php?id=". $VENUE_FACILITY_DETAILS->venue);
        } else {

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['ERRORS'] = $VALID->errors();

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/activity/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ACTIVITY = new Activities($_POST['id']);

    $ACTIVITY->image_name = $_POST['oldImageName'];
    $ACTIVITY->title = mysql_real_escape_string($_POST['title']);
    $ACTIVITY->short_description = mysql_real_escape_string($_POST['short_description']);
    $ACTIVITY->description = mysql_real_escape_string($_POST['description']);

    $VALID = new Validator();
    $VALID->check($ACTIVITY, [
        'title' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'image_name' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $ACTIVITY->update();

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

        $ACTIVITY = Activities::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}















