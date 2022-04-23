<?php
require '../core/connection.php';
session_start();

  if(!logged_in()){
    redirect('index');
  }
  $sess_username = $_SESSION['username'];

  if (isset($_POST['submit1'])) {
      $query = $conn->query("SELECT * FROM rooms WHERE id = 1");
      $fetch = $query->fetchAll(PDO::FETCH_OBJ);
      $count = $query->rowCount();
      if ($count > 0) {
        foreach ($fetch as $key) {
          $picture = $key->picture;
          $pricec = $key->price;
        }
      }
    $price = $_POST['price'];
    if (empty($price)) {
      echo "<script> alert('Please Insert Price'); </script>";
    }elseif($price == $pricec){
      echo "<script> alert('No changes made'); </script>";
    }else{
      $in = array('price' => $price, );
      update('rooms',$in,'id','1');
       echo "<script> alert('Update Successful'); </script>";
    }
  }


?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Livestock Management System | Admin</title>
    <link rel="icon" href="../image/favicon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/body.css">

    <script src="assets/js/jquery-2.1.4.min.js"></script>
<!--     <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 -->    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="icon" href="https://blessedafricancuisines.com/images/blessedicon.png">


    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="main.php" class="site_title"><i class="fa fa-paw"></i> <span>Livestock Management System</span></a>
            </div>

            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin Livestock Management System</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?main">Main</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-leaf"></i> livestock Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?mod=add&link=product">Add Livestock</a></li>
                      <li><a href="?mod=view&link=product">View lifestock</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Customer Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?mod=view&link=customers">View All Customers</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cart-plus"></i> Order Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?mod=paid&link=orders">Paid Orders</a></li>
                      <li><a href="?mod=unpaid&link=orders">Unpaid Orders</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../image/logo.png" alt=""><?php echo "$sess_username"; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <?php
       /* if(isset($_GET['mod']) && $_GET['mod'] == 'add' && isset($_GET['link']) && $_GET['link'] == 'category'){
          include'pages/category.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'add' && isset($_GET['link']) && $_GET['link'] == 'product'){
          include'pages/addpro.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'view' && isset($_GET['link']) && $_GET['link'] == 'product'){
          include'pages/viewpro.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'view' && isset($_GET['link']) && $_GET['link'] == 'staff'){
          include'pages/viewstaff.php';
        }else{
          include'pages/main.php';
        }*/
        if(isset($_GET['mod']) && $_GET['mod'] == 'add' && isset($_GET['link']) && $_GET['link'] == 'category'){
          include'pages/category.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'add' && isset($_GET['link']) && $_GET['link'] == 'product'){
          include'pages/addpro.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'view' && isset($_GET['link']) && $_GET['link'] == 'customers'){
          include'pages/viewcos.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'paid' && isset($_GET['link']) && $_GET['link'] == 'orders'){
          include'pages/paid.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'unpaid' && isset($_GET['link']) && $_GET['link'] == 'orders'){
          include'pages/unpaid.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'view' && isset($_GET['link']) && $_GET['link'] == 'product'){
          include'pages/viewpro.php';
        }else{
          include 'pages/main.php';
        }
        

        ?>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Blessed African Cuisines Admin Panel
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

<!-- /Start Room Editor Modal -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    
    
  </body>
</html>
