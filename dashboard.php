<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  
    <title>Dashboard | Online Birth Certificate System</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    
    <!-- Header top area start-->
    <div class="wrapper-pro">
      <?php include_once('includes/sidebar.php');?>
        <!-- Header top area start-->
       <?php include_once('includes/header.php');?>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                   
                                    <div class="col-lg-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
      
            <!-- Breadcome End-->
            <!-- income order visit user Start -->
            <div class="income-order-visit-user-area">
                <div class="container-fluid">
                    <div class="row">
                      
<?php 
$sql ="SELECT ID from tblapplication where Status is null ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalnewapp=$query->rowCount();
?>  <div class="col-lg-4">
                            <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30" style="background: linear-gradient(45deg,#2ed8b6,#59e0c5);
        color: white;">
                               
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Total</h2>
                                        
                                        <div class="main-income-phara" style="">
                                        <i class="fa-solid fa-file" style="font-size:30px;color:white;"></i>
                                            <p style="background-color:#afa4a4">New Application</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro"style="margin-top:-20px">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo htmlentities($totalnewapp);?></span></h3>
                                        </div>
                                 
                                    </div>
                                    <div class="income-range">
                                       
                                        <a class="block text-center" href="new-applications.php"><strong style="color:white">View Detail</strong></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <?php 
$sql ="SELECT ID from tblapplication where Status='Verified' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalverapp=$query->rowCount();
?>
                            <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30" style=" background: linear-gradient(45deg,#4099ff,#73b4ff);
        color: white;">
                                 
                                <div class="income-title">

                                    <div class="main-income-head">
                                    
                                        <h2 style="color: black">Total</h2>
                                        <i class="fa-solid fa-clipboard-check" style="font-size:30px;color:white"></i>
                                        <div class="main-income-phara visitor-cl">
                                            <p style="background-color:#afa4a4">Verified Application</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro" style="margin-top:-20px">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo htmlentities($totalverapp);?></span></h3>
                                        </div>
                                
                                    </div>
                                    <div class="income-range order-cl">
                                        <a class="block text-center" href="verified-application.php"><strong style="color:white">View Detail</strong></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        
                            <?php 
$sql ="SELECT ID from tblapplication where Status='Rejected' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalrejapp=$query->rowCount();
?><div class="col-lg-4">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30" style="background: rgb(189,80,235);
background: linear-gradient(0deg, rgba(189,80,235,0.804359243697479) 0%, rgba(177,50,219,1) 93%);
        color: white;">
                                
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Total</h2>
                                        <i class="fa-solid fa-square-xmark" style="font-size:30px;color:white;"></i>
                                        <div class="main-income-phara low-value-cl">
                                            <p style="background-color:#afa4a4">Rejected Application</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro" style="margin-top:-20px">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo htmlentities($totalrejapp);?></span></h3>
                                        </div>
                                 
                                    </div>
                                    <div class="income-range visitor-cl">
                                        <a class="block text-center" href="rejected-applications.php"><strong style="color:white">View Detail</strong></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        
                          <?php 
$sql ="SELECT ID from tblapplication ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$allpps=$query->rowCount();
?><div class="col-lg-4">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30" style="background: linear-gradient(45deg,#FF5370,#ff869a);
}
        color: white;">
                                
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Total</h2>
                                        <i class="fa-solid fa-border-all" style ="font-size:30px;color:white"></i>
                                        <div class="main-income-phara income-cl">
                                            <p style="background-color:#afa4a4">All Application</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro" style="margin-top:-20px">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo htmlentities($allpps);?></span></h3>
                                        </div>
                                 
                                    </div>
                                    <div class="income-range visitor-cl">
                                        <a class="block text-center" href="all-applications.php"><strong style="color:white">View Detail</strong></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>

<?php 
$sql ="SELECT ID from tbluser ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalusers=$query->rowCount();
?>  <div class="col-lg-4">
                            <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30" style="    background: linear-gradient(to right, #a86008, #ffba56) !important;
        color: white;">
                               
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Total</h2>
                                        <i class="fas fa-file-signature" style="font-size:30px;color:white;"></i>
                                        <div class="main-income-phara">
                                            <p style="background-color:#afa4a4">Registered Users</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro" style="margin-top: -20px;">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter"><?php echo htmlentities($totalusers);?></span></h3>
                                        </div>
                                 
                                    </div>
                                    <div class="income-range">
                                       
                                        <a class="block text-center" href="registered-users.php"><strong style="color:white">View Detail</strong></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
  
        
        
         
        </div>
    </div>
    <?php include_once('includes/footer.php');?>
    <!-- Footer End-->
   
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/wow/wow.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/jvectormap/jvectormap-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/Chart.min.js"></script>
    <script src="js/flot/dashtwo-flot-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html><?php }  ?>