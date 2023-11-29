<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');

if (isset($_POST['upload-venue-photo'])) {

    $folder = '../../../upload/venue/';
    $imgName = Helper::randamId();

    $handle = new Upload($_FILES['venue-picture']);

    if ($handle->uploaded) {

        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imgName;
        $handle->image_watermark = '../../../images/watermark/watermark.png';

        $handle->image_x = 600;
        $handle->image_y = 450;

        $handle->Process($folder);

        if ($handle->processed) {

            $handle1 = new Upload($_FILES['venue-picture']);

            if ($handle1->uploaded) {

                $handle1->image_resize = true;
                $handle1->file_new_name_ext = 'jpg';
                $handle1->image_ratio_crop = 'C';
                $handle1->file_new_name_body = $imgName;
                $handle1->image_x = 300;
                $handle1->image_y = 225;

                $handle1->Process($folder . '/thumb');

                if ($handle1->processed) {

                    $VENUE_PHOTO = new VenuePhoto(NULL);
                    $VENUE_PHOTO->venue = $_POST["venue"];
                    $VENUE_PHOTO->image_name = $handle1->file_dst_name;
                    $VENUE_PHOTO->caption = "";

                    $VENUE_PHOTO->create();

                    $handle1->Clean();

                    header('Content-Type: application/json');

                    $result = [
                        "filename" => $handle1->file_dst_name,
                        "id" => $VENUE_PHOTO->id,
                        "message" => 'success'
                    ];
                    echo json_encode($result);
                    exit();
                } else {

                    header('Content-Type: application/json');

                    $result = [
                        "message" => 'error'
                    ];
                    echo json_encode($result);
                    exit();
                }
            } else {

                header('Content-Type: application/json');

                $result = [
                    "message" => 'error'
                ];
                echo json_encode($result);
                exit();
            }
        } else {

            header('Content-Type: application/json');

            $result = [
                "message" => 'error'
            ];
            echo json_encode($result);
            exit();
        }
    } else {

        header('Content-Type: application/json');

        $result = [
            "message" => 'error'
        ];
        echo json_encode($result);
        exit();
    }
}