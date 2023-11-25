<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');


if ($_POST['option'] == 'delete') {
    $VENUE_GENERAL_FACILITY = new VenueGeneralFacilities($_POST['id']);
    unlink('../../../upload/venue-facilities-icons/' . $VENUE_GENERAL_FACILITY->image_name);
    $result = $VENUE_GENERAL_FACILITY->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}