<?php

class VenuePackage {

    public $id;
    public $venue;
    public $name;
    public $description;
    public $pax;
    public $price;
    public $sort;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`venue`,`name`,`description`,`pax`,`price`,`sort` FROM `venue_packages` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->venue = $result['venue'];
            $this->name = $result['name'];
            $this->description = $result['description'];
            $this->pax = $result['pax'];
            $this->price = $result['price'];
            $this->sort = $result['sort'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `venue_packages` (`venue`,`name`,`description`,`pax`,`price`,`sort`) VALUES  ('"
                . $this->venue . "','"
                . $this->name . "', '"
                . $this->description . "', '"
                . $this->pax . "', '"
                . $this->price . "', '"
                . $this->sort . "')";

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

        $query = "SELECT * FROM `venue_packages` ORDER BY sort ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `venue_packages` SET "
                . "`venue` ='" . $this->venue . "', "
                . "`name` ='" . $this->name . "', "
                . "`description` ='" . $this->description . "', "
                . "`pax` ='" . $this->pax . "', "
                . "`price` ='" . $this->price . "', "
                . "`sort` ='" . $this->sort . "' "
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

        $this->deletePhotos();
        $this->deleteRoomFacilities();

        $query = 'DELETE FROM `venue_packages` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

//    public function deletePhotos() {
//
//        $ROOM_PHOTO = new RoomPhoto(NULL);
//
//        $allPhotos = $ROOM_PHOTO->getRoomPhotosById($this->id);
//
//        foreach ($allPhotos as $photo) {
//
//            $IMG = $ROOM_PHOTO->image_name = $photo["image_name"];
//            unlink(Helper::getSitePath() . "upload/venue/venue_packages/" . $IMG);
//            unlink(Helper::getSitePath() . "upload/venue/venue_packages/thumb/" . $IMG);
//
//            $ROOM_PHOTO->id = $photo["id"];
//            $ROOM_PHOTO->delete();
//        }
//    }
//    public function deleteRoomFacilities() {
//
//        $FACILITIES = new RoomFaciliityDetails(NULL);
//        $Facility = $FACILITIES->getFacilitiesByRoomId($this->id);
//        $FACILITIES->id = $Facility["id"];
//        $FACILITIES->delete();
//    }

    public function getPackagesByVenueId($id) {

        $query = "SELECT * FROM `venue_packages` WHERE `venue`= $id ORDER BY sort ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function arrange($key, $img) {
        $query = "UPDATE `venue_packages` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
