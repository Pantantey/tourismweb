<?php    

    namespace Medoo;
    require "Medoo.php";
    
    /*session_start();
    if(isset($_SESSION["isLoggedIn"]))
    {
        header("location:mainpage.php");
    }*/
    
    $database = new Medoo([
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'tourismweb',
        'username' => 'root',
        'password' => ''
     
    ]);    
            
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Poppins:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/adminstyle.css">
    <title>Admin Approval</title>
</head>

<body>
    <section class="container">
        <header class="top-section">
            <p class="logo">Top<br><span class="logo-large">Travel</span><i class="fas fa-globe-africa green"></i></p>
        </header>
        <section class="inner-grid">
            <h1 class="admin-title">Admin</h1>
            <p class="user-list">List of places for approval</p>
            <div data-aos="fade-down">
                <div class="inner-row">
                    <h4 class="element-txt">Photo</h4>
                    <h4 class="element-txt">Title</h4>
                    <h4 class="element-txt">Category</h4>
                    <h4 class="element-txt">Submitted by</h4>
                    <h4 class="element-txt">Date</h4>
                    <div class="div-size">
                        <h4 class="element-txt">Add or<br>Remove</h4>
                    </div>
                </div>

                <?php

                $data = $database->select("place_submissions_tb", "*");
                $user = $database->select("users_tb", "*");
                $category = $database->select("place_category_tb", "*");
                
                
                    for($i=0; $i<count($data); $i++){
                        if(!$data[$i]["status"]){
                            echo "<div class='inner-row'>
                                <img class='img' src='./imgs/".$data[$i]["img"]; echo "' alt='user'>
                                <h4 class='element-txt'>"; echo $data[$i]["title"]; echo "</h4>
                                <h4 class='element-txt'>"; for($c=0; $c<=count($category); $c++){ 
                                                                if($data[$i]["category"] == $c){
                                                                echo $category[$c-1]["category"];
                                                            }     
                                } echo "</h4>
                                <h4 class='element-txt'>"; for($u=0; $u<count($user); $u++){ 
                                                                if($data[$i]["user"] == $user[$u]["user_id"]){
                                                                echo $user[$u]["username"];
                                                            } 
                                } echo "</h4>
                                <h4 class='element-txt'>"; echo $data[$i]["date"]; echo "</h4>
                                <div class='div-size'>
                                
                                <form action='adminrevision.php' method='post'>

                                <input class='btn-check fas fa-check' type='submit' name='add".$i."' value='✔' />
                                <input class='btn-time fas fa-times' type='submit' name='delete".$i."' value='X' />

                                </form>
                                </div>
                            </div>";
                            
                        }
                        if(isset($_POST["add".$i])){
                            $database->update("place_submissions_tb", [
                                "status" => true
                            ],[
                                "place_id"=> $data[$i]["place_id"]
                            ]);
                            header("location:adminrevision.php");
                        }
                        if(isset($_POST["delete".$i])){
                            $database->delete("place_submissions_tb",[
                                "place_id"=> $data[$i]["place_id"]
                            ]);

                            header("location:adminrevision.php");
                        }
                    }

                    
                ?>
            </div>
        </section>
        <footer class="footer">
            <p>Top Travel© <br> Universidad de Costa Rica <br> Guillermo Guerra B73469 <br> Andrey Fernández B82930</p>
        </footer>
        
    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>

</html>