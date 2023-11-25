<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');

if ($_POST['option'] == 'delete') {

   $VENUE_PHOTO = new VenuePhoto($_POST['id']);

    unlink('../../../upload/venue/' .$VENUE_PHOTO->image_name);
    unlink('../../../upload/venue/thumb/' .$VENUE_PHOTO->image_name);

    $result =$VENUE_PHOTO->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}