<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if ($_POST['action'] == 'GETCITYSBYDISTRICT') {

    $CITY = new City(NULL);
  
    $result = $CITY->GetCitiesByDistrict($_POST["district"]);
    echo json_encode($result);
  
    exit();
}