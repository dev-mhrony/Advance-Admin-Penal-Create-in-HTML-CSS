<!DOCTYPE html>
<html lang="en">

<header>
    <?php

include "header.php";

?>
</header>

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

                    <!-- User menu -->
                    <div class="sidebar-user">
                        <div class="category-content">
                            <div class="media">
                                <a href="#" class="media-left"><img src="assets/me.jpg" class="img-circle img-sm"
                                        alt=""></a>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">MH RONY</span>
                                    <div class="text-size-mini text-muted">
                                        <i class="icon-pin text-size-small"></i> &nbsp;Bogura, Bangladesh.
                                    </div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-cog3"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->


                    <?php 
					include "navigation.php";
					?>

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header">
                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li class="active">Dashboard</li>
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


                <!-- Content area -->
                <div class="content">

                    <!-- Main charts -->
                    <!-- Main charts -->
                    <div class="row">


                        <!-- Highlighting rows and columns -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title">Welcome to Contact From Section</h5>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <table class="table table-bordered table-hover datatable-highlight">
                                <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>abc@gmail.com</td>
                                        <td>01608445456</td>
                                        <td>Sonatola, Puraton Bondor, Bogura.</td>
                                        <td class="text-center">
                                            <ul class="icons-list">
                                                <li><a href="#"><i class="icon-pencil7"></i></a></li>
                                            </ul>
                                        </td>

                                </tbody>
                            </table>
                        </div>
                        <!-- /highlighting rows and columns -->
                    </div>

                </div>
                <!-- /main charts -->

                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2022. <a href="#">Dhanvi</a> by <a href="http://developerrony.com" target="_blank">MH
                        RONY</a>
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