<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccommodationType
 *
 * @author HP
 */
class VenueFacilityDetails {

    public $id;
    public $venue;
    public $facility;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`venue`,`facility` FROM `venue_facility_details` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->venue = $result['venue'];
            $this->facility = $result['facility'];
            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `venue_facility_details` (`venue`,`facility`) VALUES  ('"
                . $this->venue . "','"
                . $this->facility . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `venue_facility_details`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `venue_facility_details` SET "
                . "`venue` ='" . $this->venue . "', "
                . "`facility` ='" . $this->facility . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `venue_facility_details` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getFacilitiesByAccommodationId($venue) {

        $query = "SELECT `id`,`venue`,`facility` FROM `venue_facility_details` WHERE `venue`= '" . $venue . "'";

        $db = new Database();

        $result = mysql_fetch_array($db->readQuery($query));

        if (!$result) {
            return FALSE;
        } else {
            return $result;
        }
    }

}
