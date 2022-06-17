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

                <?php 
                include "page_header.php";
                
                ?>

                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Main charts -->
                    <div class="row">
                        <div class="col-lg-7">


                            <!-- member_online -->
                            <?php 
                include "members_online.php";
                ?>


                            <!-- Traffic sources -->
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Traffic sources</h6>
                                    <div class="heading-elements">
                                        <form class="heading-form" action="#">
                                            <div class="form-group">
                                                <label
                                                    class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                                    <input type="checkbox" class="switch" checked="checked">
                                                    Live update:
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul class="list-inline text-center">
                                                <li>
                                                    <a href="#"
                                                        class="btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                            class="icon-plus3"></i></a>
                                                </li>
                                                <li class="text-left">
                                                    <div class="text-semibold">New visitors</div>
                                                    <div class="text-muted">2,349 avg</div>
                                                </li>
                                            </ul>

                                            <div class="col-lg-10 col-lg-offset-1">
                                                <div class="content-group" id="new-visitors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <ul class="list-inline text-center">
                                                <li>
                                                    <a href="#"
                                                        class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                            class="icon-watch2"></i></a>
                                                </li>
                                                <li class="text-left">
                                                    <div class="text-semibold">New sessions</div>
                                                    <div class="text-muted">08:20 avg</div>
                                                </li>
                                            </ul>

                                            <div class="col-lg-10 col-lg-offset-1">
                                                <div class="content-group" id="new-sessions"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <ul class="list-inline text-center">
                                                <li>
                                                    <a href="#"
                                                        class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                            class="icon-people"></i></a>
                                                </li>
                                                <li class="text-left">
                                                    <div class="text-semibold">Total online</div>
                                                    <div class="text-muted"><span
                                                            class="status-mark border-success position-left"></span>
                                                        5,378 avg</div>
                                                </li>
                                            </ul>

                                            <div class="col-lg-10 col-lg-offset-1">
                                                <div class="content-group" id="total-online"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="position-relative" id="traffic-sources"></div>
                            </div>
                            <!-- /traffic sources -->

                        </div>

                        <div class="col-lg-5">

                            <!-- Sales stats -->
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Sales statistics</h6>
                                    <div class="heading-elements">
                                        <form class="heading-form" action="#">
                                            <div class="form-group">
                                                <select class="change-date select-sm" id="select_date">
                                                    <optgroup label="<i class='icon-watch pull-right'></i> Time period">
                                                        <option value="val1">June, 29 - July, 5</option>
                                                        <option value="val2">June, 22 - June 28</option>
                                                        <option value="val3" selected="selected">June, 15 - June, 21
                                                        </option>
                                                        <option value="val4">June, 8 - June, 14</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="row text-center">
                                        <div class="col-md-4">
                                            <div class="content-group">
                                                <h5 class="text-semibold no-margin"><i
                                                        class="icon-calendar5 position-left text-slate"></i> 5,689
                                                </h5>
                                                <span class="text-muted text-size-small">orders weekly</span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="content-group">
                                                <h5 class="text-semibold no-margin"><i
                                                        class="icon-calendar52 position-left text-slate"></i> 32,568
                                                </h5>
                                                <span class="text-muted text-size-small">orders monthly</span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="content-group">
                                                <h5 class="text-semibold no-margin"><i
                                                        class="icon-cash3 position-left text-slate"></i> $23,464
                                                </h5>
                                                <span class="text-muted text-size-small">average revenue</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-group-sm" id="app_sales"></div>
                                <div id="monthly-sales-stats"></div>
                            </div>
                            <!-- /sales stats -->

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