<?php
    namespace Medoo;
    require "Medoo.php";
    
    session_start();
    
    $database = new Medoo([
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'tourismweb',
        'username' => 'root',
        'password' => ''
     
    ]);
    


    function generateCode($len=15){
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($len/strlen($x)))),1,$len);
    }

    date_default_timezone_set("America/Costa_Rica");
    $date = date('Y-m-d');
    if(isset($_SESSION["status"])){
    if(isset($_FILES["image"])){
        $errors = array();
        $file_name = $_FILES["image"]["name"];
        $file_size = $_FILES["image"]["size"];
        $file_tmp = $_FILES["image"]["tmp_name"];
        $file_type = $_FILES["image"]["type"];
        $file_ext_arr = explode(".", $_FILES["image"]["name"]);

        $file_ext = end($file_ext_arr);
        $img_ext = array("jpeg", "jpg", "png");

        if(in_array($file_ext, $img_ext) === false){
            $errors[] = "Only JPEG, JPG and PNG formats are allowed.";

            echo "<script>alert('".$errors[0]."'); window.location.href='placesubmission.php</script>";
        }

        if(empty($errors)){
            $img = "submission-img-".$_SESSION["usr"]."-".generateCode().".".$file_ext;
            move_uploaded_file($file_tmp, "submitted-imgs/".$img);

            $user = $_SESSION["id"];

            $database->insert("place_submissions_tb", [
                "category" => $_POST["cat"],
                "title" => $_POST["title"],
                "description" => $_POST["desc"],
                "img" => $img,
                "user" => $user,
                "votes" => 0,
                "date" => $date,
                "status" => 0
            ]);
            
            echo "<script>alert('Your location has been submitted successfully. Now its waiting for approval.'); window.location.href='placesubmission.php'</script>";
            

        }
    }
    }else{
        echo "<script>alert('You have to log in to be able to submit.'); window.location.href='userlogin.php'</script>";
    }
?>