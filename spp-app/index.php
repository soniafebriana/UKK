<?php require 'admin/fungsi/fungsi.php'; ?>
<?php require 'assets/portal/section.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <link rel="icon" type="image/png" href="assets/images/icon.png">

    <!-- Title Page-->
    <title>𝐋𝐨𝐠𝐢𝐧 | 𝐒𝐏𝐏</title>

    <!-- Fontfaces CSS-->
    <link href="assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">


    <!-- Main CSS-->
    <link href="assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                           <p><b><font size="6">𝐅𝐨𝐫𝐦 𝐥𝐨𝐠𝐢𝐧</font></b></p><br>
                           
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>𝐔𝐬𝐞𝐫𝐧𝐚𝐦𝐞</label>
                                    <input class="au-input au-input--full" required="" type="username" autocomplete="off" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>𝐏𝐚𝐬𝐬𝐰𝐨𝐫𝐝</label>
                                    <input class="au-input au-input--full" required="" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                </div>
                                <button name="submit" class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">𝐒𝐈𝐆𝐍 𝐈𝐍</button>
                                <label>
                                        <a href="admin/fungsi/forgot-password/forgot-password.php" target="_BLANK">𝐋𝐮𝐩𝐚 𝐏𝐚𝐬𝐬𝐰𝐨𝐫𝐝 ?
</a>
                                    </label>

                              
                            </form>
                           
                            
                         <!-- Login -->
                         <?php $pro->login("username", "password", "submit"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


<!--     <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-5">
                    <h1></h1>                    
                </div>
                <div class="col-md-7">
                    <h1></h1>
                </div>

            </div>
        </div>
    </div> -->

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- assets/Vendor JS       -->
    <script src="assets/vendor/slick/slick.min.js">
    </script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/animsition/animsition.min.js"></script>
    <script src="assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
