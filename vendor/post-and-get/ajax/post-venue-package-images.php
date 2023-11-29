<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');

if (isset($_POST['upload-package-image'])) {

    $folder = '../../../upload/venue/packages/';
    $imgName = Helper::randamId();

    $handle = new Upload($_FILES['package-picture']);

    if ($handle->uploaded) {

        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imgName;
//        $handle->image_watermark = '../../assets/img/logo-watermark.png';

        $handle->image_x = 900;
        $handle->image_y = 675;

        $handle->Process($folder);

        if ($handle->processed) {

            $handle1 = new Upload($_FILES['package-picture']);

            if ($handle1->uploaded) {

                $handle1->image_resize = true;
                $handle1->file_new_name_ext = 'jpg';
                $handle1->image_ratio_crop = 'C';
                $handle1->file_new_name_body = $imgName;
                $handle1->image_x = 600;
                $handle1->image_y = 450;

                $handle1->Process($folder . '/thumb');

                if ($handle1->processed) {

                    $handle1->Clean();

                    header('Content-Type: application/json');

                    $result = [
                        "filename" => $handle1->file_dst_name,
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