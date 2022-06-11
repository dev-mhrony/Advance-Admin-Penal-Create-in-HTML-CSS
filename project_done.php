<!DOCTYPE html>
<html lang="en">

<header>
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
    <script type="text/javascript" src="assets/js/plugins/uploaders/fileinput.min.js"></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/uploader_bootstrap.js"></script>
    <!-- /theme JS files -->


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

                        <!-- Image grid -->
                        <h6 class="content-group text-semibold">
                            Project Done
                            <small class="display-block">All Image upload </small>
                        </h6>

                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-lg-2 control-label text-semibold">Latest project upload</label>
                                <div class="col-lg-10">
                                    <input type="file" class="file-input-extensions">
                                    <span class="help-block">Allow only specific file extensions. In this example only
                                        <code>jpg</code>,
                                        <code>gif</code>, <code>png</code> and <code>txt</code> extensions are
                                        allowed.</span>
                                </div>
                            </div>

                        </form>


                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/demo/10.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/demo/10.jpg" data-popup="lightbox" rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/demo/06.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/images/placeholder.jpg" data-popup="lightbox"
                                                    rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/demo/06.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/demo/06.jpg" data-popup="lightbox" rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/images/placeholder.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/images/placeholder.jpg" data-popup="lightbox"
                                                    rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/images/placeholder.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/images/placeholder.jpg" data-popup="lightbox"
                                                    rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/demo/08.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/demo/08.jpg" data-popup="lightbox" rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/images/placeholder.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/images/placeholder.jpg" data-popup="lightbox"
                                                    rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/demo/09.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/demo/09.jpg" data-popup="lightbox" rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/images/placeholder.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/images/placeholder.jpg" data-popup="lightbox"
                                                    rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/images/placeholder.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/images/placeholder.jpg" data-popup="lightbox"
                                                    rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/demo/10.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/demo/10.jpg" data-popup="lightbox" rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/demo/02.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/demo/02.jpg" data-popup="lightbox" rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/images/placeholder.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/images/placeholder.jpg" data-popup="lightbox"
                                                    rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/images/placeholder.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/images/placeholder.jpg" data-popup="lightbox"
                                                    rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/images/placeholder.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/images/placeholder.jpg" data-popup="lightbox"
                                                    rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/images/placeholder.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/images/placeholder.jpg" data-popup="lightbox"
                                                    rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/images/placeholder.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/images/placeholder.jpg" data-popup="lightbox"
                                                    rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/images/placeholder.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/images/placeholder.jpg" data-popup="lightbox"
                                                    rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/images/placeholder.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/images/placeholder.jpg" data-popup="lightbox"
                                                    rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="assets/images/placeholder.jpg" alt="">
                                        <div class="caption-overflow">
                                            <span>
                                                <a href="assets/images/placeholder.jpg" data-popup="lightbox"
                                                    rel="gallery"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                        class="icon-plus3"></i></a>
                                                <a href="#"
                                                    class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                        class="icon-link2"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /image grid -->>

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