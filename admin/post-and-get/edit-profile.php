<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['submit'])) {
     
    $dir_dest = '../images/profile/';
    $handle = new Upload($_FILES['picture']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_ext = 'jpg';
        $handle->file_new_name_body = $_POST['id'];
        $handle->image_x = 250;
        $handle->image_y = 250;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ADMIN = new Admin(NULL);

    $ADMIN->id = $_POST['id'];
    $ADMIN->name = $_POST['name'];
    $ADMIN->username = $_POST['username'];
    $ADMIN->email = $_POST['email'];
    $ADMIN->isActive = 1;

    $result = $ADMIN->update();

    if ($result) {
        header("location: ../edit-profile.php?id=" . $ADMIN->id."&&message=9");
    } else {
        
    }
}