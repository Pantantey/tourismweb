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
    <link rel="stylesheet" href="./css/loginstyle.css">
    <title>Top Travel: Password Reset</title>
</head>

<body>
    <section class="container backgrnd">
        <header class="top-banner h-30 ">
            <nav class="top-nav top-nav_fix">
                <a class="logo" href="./mainpage.html">Top<br><span class="logo-large">Travel</span><i
                        class="fas fa-globe-africa green"></i></a>
                        <input type="checkbox" name="phone" id="phone">
                        <label for="phone" class="side"><i class="fas fa-ellipsis-v"></i></label>
                <ul class="top-nav_items mrgr-nav">
                    <li class="top-nav_item"><a class="top-nav_link" href="./gallery.html">Gallery</a></li>
                    <li class="top-nav_item"><a class="top-nav_link" href="./placesubmission.html">Submit</a></li>
                    <li class="top-nav_item"><a class="top-nav_link" href="./mainpage.html#top10">Top 10</a></li>
                    <li><a  id="login-phone" class="login-button_unselected top-nav_item" href="./userlogin.html">Log in <i class="fas fa-user"></i></a></li>
                </ul>
                <a id="login-pc" class="login-button_unselected top-nav_item" href="./userlogin.html">Log in <i class="fas fa-user"></i></a>
            </nav>
            <section>
                <div class="inner-grid login-section">
                    <h1 class="login-title fontsize">Password reset<span class="yel-dot">.</span></h1>
                </div>
            </section>
        </header>
        <section class="bckgd-w inner-grid b-radius">
            <div class="login-flex mrgtb-15">
                <h4 class="login-subtext border">Enter your email, and you'll be sent a link to change your password.</h2>
                <div class="login-flex">
                    <label class="input-label " for="user">Email</label>
                    <input type="text" class="input-text" name="user" id="user">
                </div>
                <div class="login-flex">
                    <input class="submit-button" type="submit" value="SEND LINK">
                </div>
            </div>
        </section>
        <footer class="footer mrgt-10">
            <p class="mrgr-1">Top Travel© <br> Universidad de Costa Rica <br> Guillermo Guerra B73469 <br> Andrey Fernández B82930</p>
        </footer>
    </section>
    <script>
        AOS.init();
      </script>
</body>

</html>