<!DOCTYPE html>
<html lang="en">
<html lang="en">

<header>
    <?php

include "header.php";
include "./DataBase/config.php";

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
                            <li class="active">Staf Table</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Main charts -->
                    <div class="row">
                        <!-- Left fixed column -->

                        <div class="col-md-4">

                        </div>

                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title">All Staf Data</h5>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                    </ul>
                                </div>
                            </div>




                            <table class="table datatable-fixed-left" width="100%">
                                <div class="panel text-right">
                                    <a href="add_staf.php"><button type="button" class="btn btn-primary">Add
                                            Staf</button></a>
                                </div>
                                <thead>


                                    <tr>
                                        <th>SN</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Position</th>
                                        <th>Age</th>
                                        <th>Join Date</th>
                                        <th>Salary</th>
                                        <th>E-mail</th>
                                        <th>Image</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $selectQury= "SELECT * FROM all_staf WHERE status=1";
                                $staf_info = mysqli_query($dbCannaction, $selectQury);
                                foreach($staf_info as $key => $staf){

                                ?>
                                    <tr>
                                        <td><?php echo ++$key ?></td>
                                        <td><?php echo $staf['fast_name']; ?></td>
                                        <td><?php echo $staf['last_name']; ?></td>
                                        <td><?php echo $staf['position']; ?></td>
                                        <td><?php echo $staf['age']; ?></td>
                                        <td><?php echo $staf['join_date']; ?></td>
                                        <td><span class="label label-info">৳ <?php echo $staf['salary']; ?></span></td>
                                        <td><a href="#"><?php echo $staf['email']; ?></a></td>
                                        <td><img src="<?php echo $staf['img']; ?>" alt="Not Found"></td>
                                        <td class="text-center">
                                            <ul class="icons-list">
                                                <li><a href="update_staf.php"><i class="icon-pencil7"></i></a></li>
                                                <li><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /left fixed column -->
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