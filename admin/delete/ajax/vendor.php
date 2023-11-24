<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');


if ($_POST['option'] == 'delete') {
    $VENDOR = new Vendor($_POST['id']);
    if(empty($VENDOR->googleID)) {
        unlink(Helper::getSitePath() . "upload/vendor/" . $VENDOR->profile_picture);
    }
    $result = $VENDOR->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}