<!DOCTYPE html>
<html lang="en">
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
                            <li class="active">Staf Table</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Main charts -->
                    <div class="row">
                        <!-- Basic datatable -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title">Add Staf</h5>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <!-- <li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li> -->
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">

                                <?php
                                    include "./DataBase/config.php";
                                    $staf_id = $_GET['staf_id'];
                                    $get_single_data_qry = "SELECT * FROM all_staf WHERE id={$staf_id}";
                                    $getresult = mysqli_query($dbCannaction, $get_single_data_qry);
                                    
                                ?>

                                <form class="form-horizontal" action="./DataBase/stafControlar.php" method="post">
                                    <fieldset class="content-group mt-10">

                                        <?php
										if (isset($_GET['msg'])) {
									?>
                                        <div class="alert alert-success no-border">
                                            <button type="button" class="close" data-dismiss="alert"><span>??</span><span
                                                    class="sr-only">Close</span></button>
                                            <span class="text-semibold">Success</span> <?php echo $_GET['msg']; ?>
                                        </div>
                                        <?php } ?>

                                        <?php
                                           
                                        if(is_array($getresult) || is_object($getresult)){
                                            
                                        
                                            
                                            foreach($getresult as $key => $stafinfo){

                                        ?>

                                        <div class="form-group">
                                            <input type="hidden" name="staf_id" value="<?php echo $stafinfo ['id']?>">
                                            <label class="control-label col-lg-2" for="fast_name">Fast Name</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="title" name="fast_name"
                                                    required value="<?php echo $stafinfo ['fast_name']?>">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="last_name">Last Name</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="last_name" name="last_name"
                                                    required value="<?php echo $stafinfo ['last_name']?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="position">Position</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="position" name="position"
                                                    required value="<?php echo $stafinfo ['position']?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="age">Age</label>
                                            <div class="col-lg-10">
                                                <input type="number" class="form-control" id="age" name="age" required
                                                    required value="<?php echo $stafinfo ['age']?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="join_date">Join Date</label>
                                            <div class="col-lg-10">
                                                <input type="date" class="form-control" id="join_date" name="join_date"
                                                    required value="<?php echo $stafinfo ['join_date']?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="salary">Selory</label>
                                            <div class="col-lg-10">
                                                <input type="number" class="form-control" id="selory" name="salary"
                                                    required value="<?php echo $stafinfo ['salary']?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="email">Email</label>
                                            <div class="col-lg-10">
                                                <input type="email" class="form-control" id="email" name="email"
                                                    required value="<?php echo $stafinfo ['email']?>">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="imag">Staf Image</label>
                                            <div class="col-lg-10">
                                                <input type="file" class="form-control" id="imag" name="imag"
                                                    value="<?php echo $stafinfo ['imag']?>">
                                            </div>
                                        </div>



                                        <?php } }?>

                                    </fieldset>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary" name="updatestaf">Update
                                            Staf Info</button>
                                        <a href="staf_table.php" class="btn btn-default">Back To List </a>
                                    </div>
                                </form>
                            </div>


                        </div>
                        <!-- /basic datatable -->
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