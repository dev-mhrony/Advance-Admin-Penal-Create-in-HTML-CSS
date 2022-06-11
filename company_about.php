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
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">User
                                    Pages</span> - Profile Cover</h4>
                        </div>

                        <div class="heading-elements">
                            <div class="heading-btn-group">
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li><a href="user_pages_profile_cover.html">User pages</a></li>
                            <li class="active">Profile cover</li>
                        </ul>

                        <ul class="breadcrumb-elements">
                            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear position-left"></i>
                                    Settings
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                                    <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                                    <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                                </ul>
                            </li>
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
                                        Cover image</a></li>
                                <li><a href="#" class="btn btn-default"><i class="icon-file-stats position-left"></i>
                                        Statistics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /cover area -->


                <!-- Toolbar -->
                <div class="navbar navbar-default navbar-xs content-group">
                    <ul class="nav navbar-nav visible-xs-block">
                        <li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i
                                    class="icon-menu7"></i></a></li>
                    </ul>

                    <div class="navbar-collapse collapse" id="navbar-filter">
                        <ul class="nav navbar-nav element-active-slate-400">
                            <li class="active"><a href="#activity" data-toggle="tab"><i
                                        class="icon-menu7 position-left"></i> Activity</a></li>
                            <li><a href="#schedule" data-toggle="tab"><i class="icon-calendar3 position-left"></i>
                                    Schedule <span class="badge badge-success badge-inline position-right">32</span></a>
                            </li>
                            <li><a href="#settings" data-toggle="tab"><i class="icon-cog3 position-left"></i>
                                    Settings</a></li>
                        </ul>

                        <div class="navbar-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="icon-stack-text position-left"></i> Notes</a></li>
                                <li><a href="#"><i class="icon-collaboration position-left"></i> Friends</a></li>
                                <li><a href="#"><i class="icon-images3 position-left"></i> Photos</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-gear"></i>
                                        <span class="visible-xs-inline-block position-right"> Options</span> <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-image2"></i> Update cover</a></li>
                                        <li><a href="#"><i class="icon-clippy"></i> Update info</a></li>
                                        <li><a href="#"><i class="icon-make-group"></i> Manage sections</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-three-bars"></i> Activity log</a></li>
                                        <li><a href="#"><i class="icon-cog5"></i> Profile settings</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /toolbar -->


                <!-- Content area -->
                <div class="content">


                    <h2>Welcome to About Section</h2>

                    <!-- Footer -->
                    <div class="footer text-muted">
                        &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a
                            href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
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