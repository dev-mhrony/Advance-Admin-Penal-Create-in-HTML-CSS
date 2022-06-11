<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "header.php";
    ?>

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
                            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
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
                    <div class="row">
                        <!-- Simple list -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title">Welcome to Clint inbox</h5>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">
                                <ul class="media-list">
                                    <li class="media-header">Team leaders</li>

                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading text-semibold">James Alexander</div>
                                            <span class="text-muted">Development</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <ul class="icons-list icons-list-extended text-nowrap">
                                                <li><a href="#" data-popup="tooltip" title="Call" data-toggle="modal"
                                                        data-target="#call"><i class="icon-phone2"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Chat" data-toggle="modal"
                                                        data-target="#chat"><i class="icon-comment"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Video" data-toggle="modal"
                                                        data-target="#video"><i class="icon-video-camera"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading text-semibold">Jeremy Victorino</div>
                                            <span class="text-muted">Finances</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <ul class="icons-list icons-list-extended text-nowrap">
                                                <li><a href="#" data-popup="tooltip" title="Call" data-toggle="modal"
                                                        data-target="#call"><i class="icon-phone2"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Chat" data-toggle="modal"
                                                        data-target="#chat"><i class="icon-comment"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Video" data-toggle="modal"
                                                        data-target="#video"><i class="icon-video-camera"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading text-semibold">Margo Baker</div>
                                            <span class="text-muted">Marketing</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <ul class="icons-list icons-list-extended text-nowrap">
                                                <li><a href="#" data-popup="tooltip" title="Call" data-toggle="modal"
                                                        data-target="#call"><i class="icon-phone2"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Chat" data-toggle="modal"
                                                        data-target="#chat"><i class="icon-comment"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Video" data-toggle="modal"
                                                        data-target="#video"><i class="icon-video-camera"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading text-semibold">Monica Smith</div>
                                            <span class="text-muted">Design</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <ul class="icons-list icons-list-extended text-nowrap">
                                                <li><a href="#" data-popup="tooltip" title="Call" data-toggle="modal"
                                                        data-target="#call"><i class="icon-phone2"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Chat" data-toggle="modal"
                                                        data-target="#chat"><i class="icon-comment"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Video" data-toggle="modal"
                                                        data-target="#video"><i class="icon-video-camera"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media-header">Office staff</li>

                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading text-semibold">Bastian Miller</div>
                                            <span class="text-muted">Web dev</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <ul class="icons-list icons-list-extended text-nowrap">
                                                <li><a href="#" data-popup="tooltip" title="Call" data-toggle="modal"
                                                        data-target="#call"><i class="icon-phone2"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Chat" data-toggle="modal"
                                                        data-target="#chat"><i class="icon-comment"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Video" data-toggle="modal"
                                                        data-target="#video"><i class="icon-video-camera"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading text-semibold">Jordana Mills</div>
                                            <span class="text-muted">Sales consultant</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <ul class="icons-list icons-list-extended text-nowrap">
                                                <li><a href="#" data-popup="tooltip" title="Call" data-toggle="modal"
                                                        data-target="#call"><i class="icon-phone2"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Chat" data-toggle="modal"
                                                        data-target="#chat"><i class="icon-comment"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Video" data-toggle="modal"
                                                        data-target="#video"><i class="icon-video-camera"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading text-semibold">Buzz Brenson</div>
                                            <span class="text-muted">UX expert</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <ul class="icons-list icons-list-extended text-nowrap">
                                                <li><a href="#" data-popup="tooltip" title="Call" data-toggle="modal"
                                                        data-target="#call"><i class="icon-phone2"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Chat" data-toggle="modal"
                                                        data-target="#chat"><i class="icon-comment"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Video" data-toggle="modal"
                                                        data-target="#video"><i class="icon-video-camera"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading text-semibold">Zachary Willson</div>
                                            <span class="text-muted">Illustrator</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <ul class="icons-list icons-list-extended text-nowrap">
                                                <li><a href="#" data-popup="tooltip" title="Call" data-toggle="modal"
                                                        data-target="#call"><i class="icon-phone2"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Chat" data-toggle="modal"
                                                        data-target="#chat"><i class="icon-comment"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Video" data-toggle="modal"
                                                        data-target="#video"><i class="icon-video-camera"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading text-semibold">William Miles</div>
                                            <span class="text-muted">SEO expert</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <ul class="icons-list icons-list-extended text-nowrap">
                                                <li><a href="#" data-popup="tooltip" title="Call" data-toggle="modal"
                                                        data-target="#call"><i class="icon-phone2"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Chat" data-toggle="modal"
                                                        data-target="#chat"><i class="icon-comment"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Video" data-toggle="modal"
                                                        data-target="#video"><i class="icon-video-camera"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media-header">Partners</li>

                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading text-semibold">Freddy Walden</div>
                                            <span class="text-muted">Microsoft</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <ul class="icons-list icons-list-extended text-nowrap">
                                                <li><a href="#" data-popup="tooltip" title="Call" data-toggle="modal"
                                                        data-target="#call"><i class="icon-phone2"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Chat" data-toggle="modal"
                                                        data-target="#chat"><i class="icon-comment"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Video" data-toggle="modal"
                                                        data-target="#video"><i class="icon-video-camera"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading text-semibold">Dori Laperriere</div>
                                            <span class="text-muted">Google</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <ul class="icons-list icons-list-extended text-nowrap">
                                                <li><a href="#" data-popup="tooltip" title="Call" data-toggle="modal"
                                                        data-target="#call"><i class="icon-phone2"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Chat" data-toggle="modal"
                                                        data-target="#chat"><i class="icon-comment"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Video" data-toggle="modal"
                                                        data-target="#video"><i class="icon-video-camera"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img src="assets/images/placeholder.jpg" class="img-circle" alt="">
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading text-semibold">Vanessa Aurelius</div>
                                            <span class="text-muted">Facebook</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <ul class="icons-list icons-list-extended text-nowrap">
                                                <li><a href="#" data-popup="tooltip" title="Call" data-toggle="modal"
                                                        data-target="#call"><i class="icon-phone2"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Chat" data-toggle="modal"
                                                        data-target="#chat"><i class="icon-comment"></i></a></li>
                                                <li><a href="#" data-popup="tooltip" title="Video" data-toggle="modal"
                                                        data-target="#video"><i class="icon-video-camera"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /simple list -->

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