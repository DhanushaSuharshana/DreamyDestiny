<?php

class Visitor {

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $authToken;
    public $address;
    public $city;
    public $contact_number;
    public $image_name;
    public $googleID;
    public $resetcode;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`first_name`,`last_name`,`email`,`password`,`authToken`,`address`,`city`,`contact_number`,`image_name`,`googleID`,`resetcode` FROM `visitor` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->first_name = $result['first_name'];
            $this->last_name = $result['last_name'];
            $this->email = $result['email'];
            $this->password = $result['password'];
            $this->authToken = $result['authToken'];
            $this->address = $result['address'];
            $this->city = $result['city'];
            $this->contact_number = $result['contact_number'];
            $this->image_name = $result['image_name'];
            $this->googleID = $result['googleID'];
            $this->resetcode = $result['resetcode'];
            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `visitor` (`first_name`,`last_name`,`email`,`password`,`address`,`city`,`contact_number`,`image_name`) VALUES  ('"
                . $this->first_name . "','"
                . $this->last_name . "','"
                . $this->email . "','"
                . $this->password . "','"
                . $this->address . "','"
                . $this->city . "','"
                . $this->contact_number . "','"
                . $this->image_name . "')";

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

        $query = "SELECT * FROM `visitor`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `visitor` SET "
                . "`first_name` ='" . $this->first_name . "', "
                . "`last_name` ='" . $this->last_name . "', "
                . "`email` ='" . $this->email . "', "
                . "`address` ='" . $this->address . "', "
                . "`city` ='" . $this->city . "', "
                . "`contact_number` ='" . $this->contact_number . "' "
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

        $query = 'DELETE FROM `visitor` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }
    
        public function ChangeProPic($visitor, $file) {

        $query = "UPDATE  `visitor` SET "
                . "`image_name` ='" . $file . "' "
                . "WHERE `id` = '" . $visitor . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

//    public function login($email, $password) {
//
//        $query = "SELECT * FROM `visitor` WHERE `email`= '" . $email . "' AND `password`= '" . $password . "'";
//
//        $db = new Database();
//
//        $result = mysql_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//
//            $this->id = $result['id'];
//            $visitor = $this->__construct($this->id);
//
//            if (!isset($_SESSION)) {
//                session_start();
//                session_unset($_SESSION);
//            }
//
//            $_SESSION["vislogin"] = TRUE;
//
//            $_SESSION["id"] = $visitor->id;
//            $_SESSION["first_name"] = $visitor->first_name;
//            $_SESSION["last_name"] = $visitor->last_name;
//            $_SESSION["email"] = $visitor->email;
//            $_SESSION["isPhoneVerified"] = $visitor->isPhoneVerified;
//            return TRUE;
//        }
//    }
//
//    public function authenticate() {
//
//        if (!isset($_SESSION)) {
//            session_start();
//        }
//
//        $id = NULL;
//        $authToken = NULL;
//
//        if (isset($_SESSION["id"])) {
//            $id = $_SESSION["id"];
//        }
//
//        if (isset($_SESSION["authToken"])) {
//            $authToken = $_SESSION["authToken"];
//        }
//
//        $query = "SELECT `id` FROM `visitor` WHERE `id`= '" . $id . "' AND `authToken`= '" . $authToken . "'";
//
//        $db = new Database();
//
//        $result = mysql_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//
//            return TRUE;
//        }
//    }
//
//    public function logOut() {
//
//        if (!isset($_SESSION)) {
//            session_start();
//        }
//
//        unset($_SESSION["id"]);
//        unset($_SESSION["first_name"]);
//        unset($_SESSION["image_name"]);
//        unset($_SESSION["email"]);
//        unset($_SESSION["vislogin"]);
//        unset($_SESSION["authToken"]);
//        unset($_SESSION["isPhoneVerified"]);
//
//        return TRUE;
//    }
//

//
//    public function checkOldPass($id, $password) {
//
//        $enPass = md5($password);
//
//        $query = "SELECT `id` FROM `visitor` WHERE `id`= '" . $id . "' AND `password`= '" . $enPass . "'";
//
//        $db = new Database();
//
//        $result = mysql_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//            return TRUE;
//        }
//    }
//
//    public function changePassword($id, $password) {
//
//        $enPass = md5($password);
//
//        $query = "UPDATE  `visitor` SET "
//                . "`password` ='" . $enPass . "' "
//                . "WHERE `id` = '" . $id . "'";
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        if ($result) {
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }
//
//    public function GenarateCode($email) {
//
//        $rand = rand(10000, 99999);
//
//        $query = "UPDATE  `visitor` SET "
//                . "`resetcode` ='" . $rand . "' "
//                . "WHERE `email` = '" . $email . "'";
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        if ($result) {
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }
//
//    public function SelectForgetMember($email) {
//
//        if ($email) {
//
//            $query = "SELECT `email`,`resetcode` FROM `visitor` WHERE `email`= '" . $email . "'";
//
//            $db = new Database();
//
//            $result = mysql_fetch_array($db->readQuery($query));
//
//            $this->email = $result['email'];
//            $this->restCode = $result['resetcode'];
//
//            return $result;
//        }
//    }
//
//    public function SelectResetCode($code) {
//
//        $query = "SELECT `id` FROM `visitor` WHERE `resetcode`= '" . $code . "'";
//
//        $db = new Database();
//
//        $result = mysql_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//
//            return TRUE;
//        }
//    }
//
//    public function updatePassword($password, $code) {
//
//        $enPass = md5($password);
//
//        $query = "UPDATE  `visitor` SET "
//                . "`password` ='" . $enPass . "' "
//                . "WHERE `resetcode` = '" . $code . "'";
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        if ($result) {
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }
//
//    public function checkEmail($email) {
//
//        $query = "SELECT `email` FROM `visitor` WHERE `email`= '" . $email . "'";
//
//        $db = new Database();
//
//        $result = mysql_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//            return $result;
//        }
//    }
//
//    public function isFbIdIsEx($userID) {
//
//        $query = "SELECT * FROM `visitor` WHERE `facebookID` = '" . $userID . "'";
//
//        $db = new Database();
//
//        $result = mysql_fetch_array($db->readQuery($query));
//
//        if ($result === false) {
//            return false;
//        } else {
//            return true;
//        }
//    }
//
//    public function createByFB($name, $email, $picture, $fbID, $password) {
////        date_default_timezone_set('Asia/Colombo');
////
////        $createdAt = date('Y-m-d H:i:s');
//
//        $query = "INSERT INTO `visitor` (`first_name`,`email`,`image_name`,`facebookID`,`password`) VALUES  ('" . $name . "', '" . $email . "', '" . $picture . "', '" . $fbID . "', '" . $password . "')";
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        $last_id = mysql_insert_id();
//
//        if ($result) {
//
//            $this->loginByFB($fbID, $password);
//
//            return $this->__construct($last_id);
//        } else {
//            return FALSE;
//        }
//    }
//
//    public function loginByFB($FbId, $password) {
//
//        $query = "SELECT * FROM `visitor` WHERE `facebookID`= '" . $FbId . "'";
//
//        $db = new Database();
//
//        $result = mysql_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//            $this->setAuthToken($result['id']);
//            $visitor = $this->__construct($result['id']);
//            $this->setUserSession($visitor);
//
//            if (!isset($_SESSION)) {
//                session_start();
//                session_unset($_SESSION);
//            }
//
//            $_SESSION["vislogin"] = TRUE;
//
//            $_SESSION["id"] = $visitor->id;
//
//            return TRUE;
//        }
//    }
//
//    private function setAuthToken($id) {
//
//        $authToken = md5(uniqid(rand(), true));
//
//        $query = "UPDATE `visitor` SET `authToken` ='" . $authToken . "' WHERE `id`='" . $id . "'";
//
//        $db = new Database();
//
//        if ($db->readQuery($query)) {
//
//            return $authToken;
//        } else {
//            return FALSE;
//        }
//    }
//
//    private function setUserSession($visitor) {
//
//        if (!isset($_SESSION)) {
//            session_start();
//            session_unset($_SESSION);
//        }
//        unset($_SESSION["id"]);
//        unset($_SESSION["first_name"]);
//        unset($_SESSION["image_name"]);
//        unset($_SESSION["email"]);
//        unset($_SESSION["vislogin"]);
//        unset($_SESSION["authToken"]);
//        unset($_SESSION["isPhoneVerified"]);
//
//        $_SESSION["vislogin"] = TRUE;
//        $_SESSION["id"] = $visitor->id;
//        $_SESSION["first_name"] = $visitor->first_name;
//        $_SESSION["email"] = $visitor->email;
//        $_SESSION["image_name"] = $visitor->image_name;
//        $_SESSION["authToken"] = $visitor->authToken;
//        $_SESSION["isPhoneVerified"] = $visitor->isPhoneVerified;
//    }
//
//    public function isGoogleIdIsEx($visitorID) {
//
//        $query = "SELECT * FROM `visitor` WHERE `googleID` = '" . $visitorID . "'";
//
//        $db = new Database();
//
//        $result = mysql_fetch_array($db->readQuery($query));
//
//        if ($result === false) {
//            return false;
//        } else {
//            return true;
//        }
//    }
//
//    public function createByGoogle($name, $email, $picture, $visitorID, $password) {
////        date_default_timezone_set('Asia/Colombo');
////
////        $createdAt = date('Y-m-d H:i:s');
//
//        $query = "INSERT INTO `visitor` (`first_name`,`email`,`image_name`,`googleID`,`password`) VALUES  ('" . $name . "', '" . $email . "', '" . $picture . "', '" . $visitorID . "', '" . $password . "')";
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        $last_id = mysql_insert_id();
//
//        if ($result) {
//
//            $this->loginByGoogle($visitorID, $password);
//
//            return $this->__construct($last_id);
//        } else {
//            return FALSE;
//        }
//    }
//
//    public function loginByGoogle($googleID, $password) {
//
//        $query = "SELECT * FROM `visitor` WHERE `googleID`= '" . $googleID . "'";
//
//        $db = new Database();
//
//        $result = mysql_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//            $this->id = $result['id'];
//            $this->setAuthToken($result['id']);
//            $visitor = $this->__construct($this->id);
//            $this->setUserSession($visitor);
//
//            if (!isset($_SESSION)) {
//                session_start();
//                session_unset($_SESSION);
//            }
//
//            $_SESSION["vislogin"] = TRUE;
//
//            $_SESSION["id"] = $visitor->id;
//
//            return TRUE;
//        }
//    }
//
//    public function generatePhoneNoVerifyCode($id) {
//
//        $rand = rand(10000, 99990);
//
//        $query = "UPDATE  `visitor` SET "
//                . "`phone_verification_code` ='" . $rand . "' "
//                . "WHERE `id` = '" . $id . "'";
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        if ($result) {
//            return $rand;
//        } else {
//            return FALSE;
//        }
//    }
//
//    public function updateVerifiedStatus() {
//
//        $query = "UPDATE  `visitor` SET "
//                . "`isPhoneVerified` = 1 "
//                . "WHERE `id` = '" . $this->id . "'";
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//        if (!isset($_SESSION)) {
//            session_start();
//        }
//        if ($result) {
//            unset($_SESSION["isPhoneVerified"]);
//            $_SESSION["isPhoneVerified"] = 1;
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }
//
//    public function updateContactNumber() {
//
//        $query = "UPDATE  `visitor` SET "
//                . "`contact_number` = '" . $this->contact_number . "' "
//                . "WHERE `id` = '" . $this->id . "'";
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        if ($result) {
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }

}
