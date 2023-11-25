<?php

include_once(dirname(__FILE__) . '/Setting.php');
include_once(dirname(__FILE__) . '/Helper.php');
include_once(dirname(__FILE__) . '/Upload.php');
include_once(dirname(__FILE__) . '/Database.php');
include_once(dirname(__FILE__) . '/Admin.php');
include_once(dirname(__FILE__) . '/Message.php');
include_once(dirname(__FILE__) . '/Validator.php');
include_once(dirname(__FILE__) . '/City.php');
include_once(dirname(__FILE__) . '/District.php');
include_once(dirname(__FILE__) . '/Vendor.php');
include_once(dirname(__FILE__) . '/Visitor.php');
include_once(dirname(__FILE__) . '/VenueType.php');
include_once(dirname(__FILE__) . '/VenueGeneralFacilities.php');
include_once(dirname(__FILE__) . '/Venue.php');
include_once(dirname(__FILE__) . '/VenueFacilityDetails.php');
include_once(dirname(__FILE__) . '/VenuePhoto.php');
include_once(dirname(__FILE__) . '/VenuePackage.php');

function dd($data) {
    var_dump($data);
    exit();
}

function redirect($url) {
    $string = '<script type="text/javascript">';
    $string .= 'window.location = "' . $url . '"';
    $string .= '</script>';

    echo $string;
    exit();
}
