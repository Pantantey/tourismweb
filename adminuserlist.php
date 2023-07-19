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
    <title>Admin users</title>
</head>

<body>
    <section class="container">
        <header class="top-section">
            <p class="logo">Top<br><span class="logo-large">Travel</span><i class="fas fa-globe-africa green"></i></p>
        </header>
        <section class="inner-grid">
            <h1 class="admin-title">Admin</h1>
            <p class="user-list">User List</p>
            <div>
                <div class="inner-row" data-aos="fade-down">
                    <img class="img" src="./imgs/user.jpg" alt="user">
                    <h4 class="element-txt">Username</h4>
                    <h4 class="element-txt">Email</h4>
                    <h4 class="element-txt">Fullname</h4>
                </div>
                <?php

                $data = $database->select("users_tb", "*");
                
                    for($i=0; $i<count($data); $i++){
                        if($data[$i]["username"] != ""){
                            echo "<div class='inner-row' data-aos='fade-down'>
                                <img class='img' src='./imgs/user.jpg' alt='user'>
                                <h4 class='element-txt'>"; echo $data[$i]["username"]; echo "</h4>
                                <h4 class='element-txt'>"; echo $data[$i]["email"]; echo "</h4>
                                <h4 class='element-txt'>"; echo $data[$i]["name"]." ".$data[$i]["lastname"]; echo "</h4>
                                </div>";
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