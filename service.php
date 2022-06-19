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
                            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li class="active">Service</li>
                        </ul>

                    </div>
                </div>
                <!-- /page header -->



                <!-- Content area -->
                <div class="content">

                    <div class="text-right">
                        <a href="add_service.php"><button type="button" class="btn btn-primary">Add Service</button></a>
                    </div>
                    <br>
                    <!-- Info blocks -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel">
                                <div class="panel-body text-center">
                                    <div class="icon-object border-success-400 text-success"><i class="icon-book"></i>
                                    </div>
                                    <h5 class="text-semibold">Knowledge Base</h5>
                                    <p class="mb-15">Ouch found swore much dear conductively hid submissively hatchet
                                        vexed far inanimately alongside candidly much</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel">
                                <div class="panel-body text-center">
                                    <div class="icon-object border-warning-400 text-warning"><i
                                            class="icon-lifebuoy"></i></div>
                                    <h5 class="text-semibold">Support center</h5>
                                    <p class="mb-15">Dear spryly growled much far jeepers vigilantly less and far
                                        hideous and some mannishly less jeepers less and and crud</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel">
                                <div class="panel-body text-center">
                                    <div class="icon-object border-blue text-blue"><i class="icon-reading"></i></div>
                                    <h5 class="text-semibold">Articles and news</h5>
                                    <p class="mb-15">Diabolically somberly astride crass one endearingly blatant
                                        depending peculiar antelope piquantly popularly adept much</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /info blocks -->


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