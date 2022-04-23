<?php
session_start();
if(!logged_in()){
    $sess_username = "";
  }else{
  $sess_username = $_SESSION['username'];
  $adminid = $_SESSION['admin_id'];
}

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $hash = sha1(md5($password));
    if (empty($username) || empty($password)) {
      echo "<script> alert('Please fill all empty fields') </script>";
    }else{
      $select = $conn->query("SELECT * FROM users WHERE email = '$username' AND password = '$hash' LIMIT 1");
      $fetch = $select->fetchAll(PDO::FETCH_OBJ);
      $count = $select->rowCount();
      if ($count > 0) {
        foreach ($fetch as $value) {
          $usernam = $value->email;
          $pass = $value->password;
          $id = $value->id;
          $encode_id = md5($id);

          session_start();
          $_SESSION['username'] = $usernam;
          $_SESSION['is_admin'] = $encode_id;  
          $_SESSION['pass'] = $pass; 
          $_SESSION['admin_id'] = $id; 

          redirect('index.php');

        }

      }else{
        echo "<script> alert('Incorrect login details') </script>";
      }
    }
}

if (isset($_POST['unpaidclear'])) {
  $conn->query("DELETE FROM cart WHERE byid = '$adminid'");
  redirect('index.php');
}
  if (isset($_POST['checko'])) {
    $seethis = $_POST['names'];
    $total = $_POST['total'];

    foreach ($seethis as $key) {
      echo "<script> alert('$key') </script>";
    }
    echo "<script> alert('$total') </script>";

  }

  if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $hash = sha1(md5($password));
    $dates = date('l M d, Y H:i');

    if (empty($username) || empty($password)) {
      echo "<script> alert('Please fill all empty fields') </script>";
    }else{
      $in = array('email' => $username,
                  'password' => $hash, 
        );
      create('users',$in);
      echo "<script> alert('You have successfully registered... please login to order') </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title><?php echo "$pagename"; ?> - Livestock Management</title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
</head>
<script>
   $(document).ready(function(){
   window.history.replaceState('','',window.location.href)
   });
</script>
 <script type="text/javascript">
  function pro(image,name,amount,id)
  {
    
    var user = "<?php echo $sess_username ?>";
    if (user == "") {
      $('#login').modal('show');
    }else{
    var datas = "name="+name+"amount="+amount;
    var quantity = parseInt(document.getElementById('cartQuantity').innerHTML);
    document.getElementById('cartQuantity').innerHTML = quantity+1;

    var innerdata = document.getElementById('cartText').innerHTML;
    var numbers = 1;
    var amount = parseInt(amount);

    var rgxp = new RegExp(name, "g");
    var find = innerdata.match(rgxp);
    if (find !== null) {
      var seenumid = "seenum"+id;
      var thenum = parseInt(document.getElementById(seenumid).innerHTML);
      var addnum = thenum+1;
      document.getElementById(seenumid).innerHTML = addnum;
    }else{
      tableform = "<div class='row' id='row"+id+"'> <div class='col-3'><img src='"+image+"' width='50px'> </div> <div class='col-3'>"+name+"<input type='hidden' id='pname' value='"+name+"-"+id+"-"+numbers+"' name='names[]'></div> <div class='col-3'>"+amount+"</div> <div  class='col-3'><i class='fa fa-plus' onclick='pluss("+amount+","+id+")'></i> <b id='seenum"+id+"'>"+numbers+"</b> <i class='fa fa-minus' onclick='minuss("+amount+","+id+")'></i></div></div>";
      document.getElementById('cartText').innerHTML = innerdata+tableform;
    }
    
    var amount = parseInt(amount);
    var totalcart = parseInt(document.getElementById('cartTotal').innerHTML);
    document.getElementById('cartTotal').innerHTML = totalcart+amount;

    var totalvar = totalcart+amount


    
    document.getElementById('total').innerHTML = "Total <input type='hidden' name='total' value='"+totalvar+"'>";
    document.getElementById('submit').innerHTML = "<button class='btn btn-success' onclick='checkout()'> Check Out </button>";
    document.getElementById('clear').innerHTML = "<button class='btn btn-default' onclick='clears()'> Clear </button>";
  }
  }

  function clears(){
    document.getElementById('cartText').innerHTML = " ";
    document.getElementById('total').innerHTML = " ";
    document.getElementById('submit').innerHTML = " ";
    document.getElementById('clear').innerHTML = " ";
    document.getElementById('cartTotal').innerHTML = "0";
    document.getElementById('cartQuantity').innerHTML = "0";
  }

  function checkout(){
    var action = "checkout";
    var allvar = document.getElementById('cartText').innerHTML;
    var totals = document.getElementById('cartTotal').innerHTML;
    var adminid = "<?php echo $adminid ?>";
    var datastring = "id="+adminid+"&allvar="+allvar+"&totals="+totals+"&action="+action;
    $.ajax({
        type: "POST",
        url: "control.php",
        cache : false,
        data : datastring,
        beforeSend : function(){
            $('#loading').show();
        },
        success : function(response){
            $('#loading').hide();
            alert(response);
            window.location.reload(1);
        }
    });    
  }

  function pluss(amount,id){
    var seenumid = "seenum"+id;
    var thenum = parseInt(document.getElementById(seenumid).innerHTML);
    var addnum = thenum+1;
    document.getElementById(seenumid).innerHTML = addnum;

    var quantity = parseInt(document.getElementById('cartQuantity').innerHTML);
    document.getElementById('cartQuantity').innerHTML = quantity+1;

    var totalcart = parseInt(document.getElementById('cartTotal').innerHTML);
    document.getElementById('cartTotal').innerHTML = totalcart+amount;
  }

  function minuss(amount,id){
    var seenumid = "seenum"+id;
    var seerow = "row"+id;
    var quantity = parseInt(document.getElementById('cartQuantity').innerHTML);
    var seenumrow = parseInt(document.getElementById(seenumid).innerHTML);
    if (seenumrow == 1) {

    var thenum = parseInt(document.getElementById(seenumid).innerHTML);
    var addnum = thenum-1;
    document.getElementById(seenumid).innerHTML = addnum;

    document.getElementById('cartQuantity').innerHTML = quantity-1;

    var totalcart = parseInt(document.getElementById('cartTotal').innerHTML);
    document.getElementById('cartTotal').innerHTML = totalcart-amount;
    document.getElementById(seerow).innerHTML = " ";
    var checktext = document.getElementById('cartTotal').innerHTML;

    if (checktext == "0") {
      document.getElementById('cartText').innerHTML = " ";
    document.getElementById('total').innerHTML = " ";
    document.getElementById('submit').innerHTML = " ";
    document.getElementById('clear').innerHTML = " ";
    document.getElementById('cartTotal').innerHTML = "0";
    document.getElementById('cartQuantity').innerHTML = "0";
    }

    }else{
    var thenum = parseInt(document.getElementById(seenumid).innerHTML);
    var addnum = thenum-1;
    document.getElementById(seenumid).innerHTML = addnum;

    document.getElementById('cartQuantity').innerHTML = quantity-1;

    var totalcart = parseInt(document.getElementById('cartTotal').innerHTML);
    document.getElementById('cartTotal').innerHTML = totalcart-amount;
  }
  }
</script>
<body>
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="top-header-content d-flex align-items-center justify-content-between">
              <!-- Top Header Content -->
              <div class="top-header-meta">
                <p>Welcome to <span>Livestock Managament</span>, we hope you will enjoy our products and have good experience</p>
              </div>
              <!-- Top Header Content -->
              <div class="top-header-meta text-right">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="livestock@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: livestock@gmail.com</span></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +232 225 55 22 </span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar Area -->
    <div class="famie-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="index.php" class="nav-brand">Livestock Management</a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                  <li class="<?php if($pagename == "Home"){echo 'active';} ?>"><a href="index.php">Home</a></li>
                  <li class="<?php if($pagename == "Shop"){echo 'active';} ?>"><a href="shop.php">Go to Store</a></li>
                </ul>
                <!-- Search Icon -->
                <div id="searchIcon">
                  <i class="icon_search" aria-hidden="true"></i>
                </div>
                <!-- User Icon -->
                <?php
                if ($sess_username == "") {
                ?>
                <div id="searchIcon">
                  <a data-toggle="modal" data-target="#login"><i class="fa fa-user" aria-hidden="true"></i></a>
                </div>
                <?php
                }else{
                ?>
                <div id="searchIcon">
                  <a data-toggle="modal" data-target="#account"><i class="fa fa-user" aria-hidden="true"></i></a>
                </div>
                <?php
                }
                ?>
                <!-- Cart Icon -->
                <div id="cartIcon">
                  <a href="#" data-toggle="modal" data-target="#cart">
                    <i class="icon_cart_alt" aria-hidden="true"></i>
                    <span class="cart-quantity" id="cartQuantity">0</span>
                  </a>
                </div>
              </div>
              <!-- Navbar End -->
            </div>
          </nav>

          <!-- Search Form -->
          <div class="search-form">
            <form action="#" method="get">
              <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
              <button type="submit" class="d-none"></button>
            </form>
            <!-- Close Icon -->
            <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->

  <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header" style="background: white;">
                     
                     <h4 class="modal-title" id="myModalLabel"><i class="icon_cart_alt" ></i> Cart</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     </div>

                     <div class="modal-body">
                        <div id="cartText">
                          
                        </div>
                        <hr>
                        <div id="total">
                          
                        </div>
                        <hr>
                        <div id="cartTotal">
                          0
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-4" >
                          <div id="submit">
                            
                          </div>
                        </div>
                        <div class="col-4">
                          <div id="clear">
                            
                          </div>
                        </div>
                      </div>
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>
                <input type="hidden" name="details" id="pdetails">
                <input type="hidden" name="total" id="ptotal">

                <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header">
                     
                     <h4 class="modal-title" id="myModalLabel"><i class="icon_lock_alt" ></i> Login</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     </div>

                     <div class="modal-body">
                      <form method="post">
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="email" class="form-control" name="username" id="username">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <button class="btn btn-default" name="login">Login</button>
                        <a data-toggle="modal" data-target="#register" data-dismiss="modal" style="cursor: pointer;">Register here</a>
                      </form>
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>


                <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header">
                     
                     <h4 class="modal-title" id="myModalLabel"><i class="icon_list_alt" ></i> Register</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     </div>

                     <div class="modal-body">
                      <form method="post">
                        <div class="form-group">
                          <label for="username">Email</label>
                          <input type="email" class="form-control" name="username" id="username">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <button class="btn btn-success" name="register">Register</button>
                      </form>
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>


                 <div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header">
                     
                     <h4 class="modal-title" id="myModalLabel"><i class="icon_list_alt" ></i> Account</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     </div>

                     <div class="modal-body">
                      <?php echo "$sess_username"; ?>
                     </div>
                     <div class="modal-footer">
                       <a href="#" data-toggle="modal" data-target="#paid"><button class="btn btn-default">Check Cart</button></a>
                       <a href="#" data-toggle="modal" data-target="#pending"><button class="btn btn-default">Check unpaid</button></a>
                       <a href="logout.php"><button class="btn btn-default">Log Out</button></a>
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>
 <div class="modal fade" id="pending" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header">
                     
                     <h4 class="modal-title" id="myModalLabel"><i class="icon_list_alt" ></i> Unpaid</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     </div>

                     <div class="modal-body">
                      <?php
                      $select = $conn->query("SELECT * FROM cart WHERE byid = '$adminid' AND status = 'pending'");
                      $fetch = $select->fetchAll(PDO::FETCH_OBJ);
                      $count = $select->rowCount();
                      $pricenum = 0;
                      if ($count > 0) {
                        foreach ($fetch as $value) {
                          $goods = $value->goods;
                          $amount = $value->amount;
                      ?>
                      <?php echo "$goods"; ?>
                      <?php 
                      $pricenum+=$amount;
                      
                      ?>

                      <?php
                    }
                    ?>
                    <hr>
                    Total
                    <hr>
                    <?php
                    echo "$pricenum";
                    $seeing = "yes";
                  }else{
                    $seeing = "no";
                    echo "Not Yet";
                  }
                      ?>
                     </div>
                     <div class="modal-footer">
                      <?php
                      if ($seeing == "yes") {
                      ?>
                      <form method="post">
                        <button class="btn btn-default" name="unpaidclear">Clear</button>
                      </form>
                      <form method="get" action="webpay">
                        <input type="hidden" name="total" value="<?php echo $pricenum ?>">
                        <input type="hidden" name="iden" value="<?php echo $adminid ?>">
                        <button class="btn btn-default" name="pay">Pay</button>
                      </form>
                      <?php
                      }
                      ?>
                      
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>

         <div class="modal fade" id="paid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                    <div class="modal-content">
                     <div class="modal-header">
                     
                     <h4 class="modal-title" id="myModalLabel"><i class="icon_list_alt" ></i> Items</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: black;">&times;</button>
                     </div>

                     <div class="modal-body">
                      <?php
                      $select = $conn->query("SELECT * FROM cart WHERE byid = '$adminid' AND status = 'paid'");
                      $fetch = $select->fetchAll(PDO::FETCH_OBJ);
                      $count = $select->rowCount();
                      $pricenum = 0;
                      if ($count > 0) {
                        foreach ($fetch as $value) {
                          $goods = $value->goods;
                          $amount = $value->amount;
                      ?>
                      <?php echo "$goods"; ?>
                      <?php 
                      $pricenum+=$amount;
                      
                      ?>

                      <?php
                    }
                    ?>
                    <hr>
                    Total
                    <hr>
                    <?php
                    echo "$pricenum";
                  }
                      ?>
                     </div>
                     </div><!-- /.modal-content -->
                    </div><!-- /.modal -->
                </div>