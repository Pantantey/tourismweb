<?php

    namespace Medoo;
    require "Medoo.php";

    session_start();
    if(isset($_SESSION["status"]))
    {
        $button= "<a id='login-pc' class='login-button_unselected top-nav_item' href='./userprofile.php'>".$_SESSION["usr"]."<i class='fas fa-user'></i></a>";
    }else{
        $button= "<a id='login-pc' class='login-button_unselected top-nav_item' href='./userlogin.php'>Log in <i class='fas fa-user'></i></a>";
    }

    $database = new Medoo([
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'tourismweb',
        'username' => 'root',
        'password' => ''
     
    ]);

    $categories = $database->select("place_category_tb", "*");

    

    

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
    <link rel="stylesheet" href="./css/loginstyle.css">
    <title>Top Travel: Place Submission</title>
</head>

<body>
    <section class="container backgrnd">
        <header class="top-banner">
            <nav class="top-nav top-nav_fix">
                <a class="logo" href="./mainpage.php">Top<br><span class="logo-large">Travel</span><i
                        class="fas fa-globe-africa green"></i></a>
                        <input type="checkbox" name="phone" id="phone">
                        <label for="phone" class="side"><i class="fas fa-ellipsis-v"></i></label>
                <ul class="top-nav_items mrgr-nav">
                    <li class="top-nav_item"><a class="top-nav_link" href="./gallery.php">Gallery</a></li>
                    <li class="top-nav_item"><a class="top-nav_link" href="./placesubmission.php">Submit</a></li>
                    <li class="top-nav_item"><a class="top-nav_link" href="./mainpage.php#top10">Top 10</a></li>
                    <li><a  id="login-phone" class="login-button_unselected top-nav_item" href="./userlogin.php">Log in <i class="fas fa-user"></i></a></li>
                </ul>
                <?php echo $button ?>
            </nav>
            <section>
                <div class="inner-grid login-section">
                    <h1 class="login-title">submit<span class="yel-dot">.</span></h1>
                </div>
            </section>
        </header>
        <section class="bckgd-w inner-grid b-radius">
            <div class="login-flex mrgtb-8">
                <h4 class="login-subtext border">Submit one of your favorite locations.</h2>
                <form action="add_place.php" method="post" enctype="multipart/form-data">
                <div class="login-flex">
                    <label class="input-label " for="title">Title</label>
                    <input type="text" class="input-text" name="title" id="title">
                </div>
                <div class="login-flex">
                    <label class="input-label sz-25"for="cat">Category</label>
                    <select class="input-text sel-cat" name="cat" id="cat">

                        <?php

                            for($i=0; $i<count($categories); $i++){

                                echo "<option value='".$categories[$i]["category_id"]."'>".$categories[$i]["category"]."</option>";

                            }

                        ?>

                        
                    </select>
                </div>
                <div class="login-flex">
                    <label class="input-label " for="desc">Description</label>
                    <textarea class="input-text txt-area" name="desc" id="desc" cols="30" rows="10" maxlength="250"></textarea>
                </div>
                <div class="login-flex mb-1">
                    <label for="image" class="input-label txtal-center">Choose at least one image of the location</label>
                    <div class="btn-config">
                        <button class="btn-upload">Choose File<input id="image" class="select-file" type="file" name="image" onchange="readURL(this)"></button>
                        
                        
                    </div>
                    <div class="pv-img"><img class="pv-img-format" id="pv" src="./imgs/pvimg.png" alt="Preview"></div>
                </div>
                <div class="login-flex border-top">
                    <input class="submit-button" type="submit" value="SUBMIT">
                </div>
                </form>
            </div>
        </section>
        <footer class="footer">
            <p class="mrgr-1">Top Travel© <br> Universidad de Costa Rica <br> Guillermo Guerra B73469 <br> Andrey Fernández B82930</p>
        </footer>
    </section>
    <script src="./js/mainjs.js"></script>
</body>

</html>