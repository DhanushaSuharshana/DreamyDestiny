<?php

include_once(dirname(__FILE__) . '/../../class/include.php');


if (isset($_POST['save-changes'])) {

    $VENUE_FACILITY_DETAILS = new VenueFacilityDetails(NULL);


    $result = $VENUE_FACILITY_DETAILS->getFacilitiesByVenueId($_POST['venue_id']);

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

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['ERRORS'] = $VALID->errors();

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}