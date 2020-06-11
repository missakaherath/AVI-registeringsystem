<?php
if(isset($_FILES["image"]["name"])){
    $target_dir = "uploads/";
    $target_file = $target_dir . md5(time()) . '.' . $_POST['ext'];

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check!==false){
        if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)){
            echo json_encode(['response' => "The image has been uploaded"]);
        } else {
            echo json_encode(['response' => "sorry, there was an error uploading your file"])
        }
    } else {
        echo json_encode(["error" => "file is not an image"]);
    }
} else {
    echo json_encode(["error" => "please provide an image to upload"]);
}
?>