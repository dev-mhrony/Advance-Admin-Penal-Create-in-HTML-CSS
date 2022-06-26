<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>themelock.com - Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/visualization/echarts/echarts.js"></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/user_pages_profile.js"></script>
    <!-- /theme JS files -->

</head>

<body>

    <?php 
    include "main_nav.php";
    ?>
    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">




                    <?php
                    include "nav_user.php";
                    include "navigation.php";
                    ?>

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header no-margin">

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <h4>Welcome to About Section</h4>
                        </ul>


                    </div>
                </div>
                <!-- /page header -->


                <!-- Cover area -->
                <div class="profile-cover">
                    <div class="profile-cover-img" style="background-image: url(assets/02.jpg)"></div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#" class="profile-thumb">
                                <img src="assets/me.jpg" class="img-circle" alt="">
                            </a>
                        </div>

                        <div class="media-body">
                            <h1>MH RONY <small class="display-block">Web Developer</small></h1>
                        </div>

                        <div class="media-right media-middle">
                            <ul class="list-inline list-inline-condensed no-margin-bottom text-nowrap">
                                <li><a href="#" class="btn btn-default"><i class="icon-file-picture position-left"></i>
                                        Profile Photo</a></li>
                                <li><a href="#" class="btn btn-default"><i class="icon-file-stats position-left"></i>
                                        Cover Photo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /cover area -->





                <!-- Content area -->
                <div class="content">




                    <!-- Footer -->
                    <div class="footer text-muted">
                        &copy; 2022. <code>Ghasful</code> by <a href="developerrony.com" target="_blank">MH RONY</a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>

</html>