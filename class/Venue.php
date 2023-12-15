<?php

class Venue {

    public $id;
    public $name;
    public $address;
    public $map;
    public $email;
    public $phone;
    public $website;
    public $city;
    public $type;
    public $vendor;
    public $image;
    public $description;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`name`,`address`,`map`,`email`,`phone`,`website`,`city`,`type`,`vendor`,`image`,`description` FROM `venue` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->address = $result['address'];
            $this->map = $result['map'];
            $this->email = $result['email'];
            $this->phone = $result['phone'];
            $this->website = $result['website'];
            $this->city = $result['city'];
            $this->type = $result['type'];
            $this->vendor = $result['vendor'];
            $this->image = $result['image'];
            $this->description = $result['description'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `venue` (`name`,`address`,`map`,`email`,`phone`,`website`,`city`,`type`,`vendor`,`image`,`description`) VALUES  ('"
                . $this->name . "','"
                . $this->address . "','"
                . $this->map . "','"
                . $this->email . "','"
                . $this->phone . "','"
                . $this->website . "','"
                . $this->city . "','"
                . $this->type . "','"
                . $this->vendor . "','"
                . $this->image . "','"
                . $this->description . "')";

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

        $query = "SELECT * FROM `venue`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `venue` SET "
                . "`name` ='" . $this->name . "', "
                . "`address` ='" . $this->address . "', "
                . "`map` ='" . $this->map . "', "
                . "`phone` ='" . $this->phone . "', "
                . "`email` ='" . $this->email . "', "
                . "`website` ='" . $this->website . "', "
                . "`city` ='" . $this->city . "', "
                . "`type` ='" . $this->type . "', "
                . "`vendor` ='" . $this->vendor . "', "
                . "`image` ='" . $this->image . "', "
                . "`description` ='" . $this->description . "' "
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

//        $this->deletePhotos();
//        $this->deleteRoom();
//        $this->deleteAccommodationFacilities();

        $query = 'DELETE FROM `venue` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getVenueByVendorId($vendor) {

        $query = "SELECT * FROM `venue` WHERE `vendor`= $vendor";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }
    
        public function getVenueByType($type) {

        $query = "SELECT * FROM `venue` WHERE `type`= $type";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

//    public function deletePhotos() {
//
//        $ACCMMODATION_PHOTO = new AccommodationPhoto(NULL);
//
//        $allPhotos = $ACCMMODATION_PHOTO->getAccommodationPhotosById($this->id);
//
//        foreach ($allPhotos as $photo) {
//
//            $IMG = $ACCMMODATION_PHOTO->image_name = $photo["image_name"];
//            unlink(Helper::getSitePath() . "upload/venue/" . $IMG);
//            unlink(Helper::getSitePath() . "upload/venue/thumb/" . $IMG);
//
//            $ACCMMODATION_PHOTO->id = $photo["id"];
//            $ACCMMODATION_PHOTO->delete();
//        }
//    }
//    public function deleteRoom() {
//
//        $ROOM = new Room(NULL);
//
//        $allrooms = $ROOM->getAccommodationRoomsById($this->id);
//
//        foreach ($allrooms as $room) {
//
//            $ROOM->id = $room["id"];
//            $ROOM->delete();
//        }
//    }
//
//    public function deleteAccommodationFacilities() {
//
//        $FACILITIES = new AccommodationFacilityDetails(NULL);
//        $Facility = $FACILITIES->getFacilitiesByAccommodationId($this->id);
//        $FACILITIES->id = $Facility["id"];
//        $FACILITIES->delete();
//    }
//
}
