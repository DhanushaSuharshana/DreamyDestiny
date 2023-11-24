<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

include_once(dirname(__FILE__) . '/../auth.php');

if (isset($_POST['add-venue-type'])) {
    $VENUE_TYPE = new VenueType(NULL);
    $VALID = new Validator();

    $VENUE_TYPE->name = filter_input(INPUT_POST, 'name');

    $VALID->check($VENUE_TYPE, ['name' =>
            ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
       $VENUE_TYPE->create();

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

if (isset($_POST['edit-venue-type'])) {
    $VENUE_TYPE = new VenueType(NULL);

    $VENUE_TYPE->id = $_POST['id'];
    $VENUE_TYPE->name = $_POST['name'];

    $VALID = new Validator();
    $VALID->check($VENUE_TYPE, ['name' =>
            ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $VENUE_TYPE->update();

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