<?php 
    session_start();
    if(isset($_SESSION['admin_id'])){
        $identity = $_SESSION['admin_id'];
    }
    include_once("../core/connection.php");

    if (!isset($_SESSION['is_admin'])) {
    redirect('index.php');
}


$price = $_GET['total'];

    if(isset($_POST['pay'])){
       $stu_id = $_POST['student_id'];
        $amount = $_POST['amount'];
        $random = rand(0000000000,9999999999);
        $date = date('D M, Y. H:i:s');

        $in = array('byid' => $stu_id, 
                    'amount' => $amount,
                    'ref' => $random,
                    'date' => $date
                    );
        $in2 = array('status' => "paid", );

        update('cart',$in2,'byid',$stu_id);
        create('payment',$in);
        redirect('../index.php');
    }
      

?>
<!DOCTYPE html>
<html>
<head>
    <link rel='shortcut icon' type='image/x-icon' href='/paydirect/favicon.ico' />
    <meta name="viewport" content="width=device-width, initial-scale = 1, maximum-scale=1, user-scalable=no" />
    <title>WebPAY - LIVESTOCK MANAGEMENT CART PAYMENT</title>
    
    

    <link href="style.css" rel="stylesheet"/>

    
</head>
<body>

    <div id="outer-frame">
        <div id="page-header">
            <div id="account-header">
            
            </div>
        </div>

        <!--page logo header starts-->
        <div id="page-logo-header" class="">
            <div id="page-logo-header-content">
                <img src="webpay.png" id="db-logo" alt="isw" />
                <div id="page-title-header" class="">
                    <div class="merchant_name" style="display: "><p> LIVESTOCK MANAGEMENT CART PAYMENT </p></div>
                    <div style="height: 7px">
                    </div>
                </div>
            </div>
            <!--  <div id="tag">  
                <span style="text-transform:uppercase"><h4><?php echo $student_name; ?> &nbsp;</h4><span id="loggedinusername">                    
                </span></span>
            </div> -->
        </div>
        <!--page logo header ends-->
        <div>
            <?php if(isset($notification)){ echo $notification;} ?>
        </div>
        <div id="_msg" style="position: relative"></div>
        <div style="padding-right: 10px; text-align: right;" id="aborttransaction">
        </div>
        <div id="payment-information">
            



<!-- information fieldset start -->
<form  method="post">    <div id="mainDiv">

        <!-- information fieldset end -->
            <div class="price_ish">
                <div class="course-ribbon green">
                    <b>N <?php echo $price; ?></b>
                </div>
            </div>
            <div id="cardtype_login" style="">
                <div id="qtinfo" style="display: block;">
                </div>

            </div>
            <div id="cardImage" style="font-size: 10px; ">
    
            </div>
            <div id="rowMain" style="">
                <div id="cardNumberDiv">
                    <span class="exp" id="cnLabel">Card Number
                    <br />
                    <input autocomplete="off" tabindex="2" class="form-control" name="card_number" id="pp_cardpan" maxlength="20"/>
                    
                </div>
                

                <div id="slen" style="margin-top: -8px;">
                    <div id="expDiv">
                        <div>
                            <span class="exp">Expiry Date</span><br />
                        </div>
                        <div id="divExpMonth">
                            <select tabindex="4" name="pp_exp_month" class="selinput pp_exp_month" id="pp_exp_month">
                                <option value="-">--</option>
                                <option value="01">Jan</option>
                                <option value="02">Feb</option>
                                <option value="03">Mar</option>
                                <option value="04">Apr</option>
                                <option value="05">May</option>
                                <option value="06">Jun</option>
                                <option value="07">Jul</option>
                                <option value="08">Aug</option>
                                <option value="09">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                            </select>
                        </div>
                        <div id="divExpYr">
                            <select Class="selinput" id="pp_exp_year" name="pp_exp_year" tabindex="5">
                                <option value="-">--</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2049">2049</option>
                                <option value="2050">2050</option>
                            </select>
                            
                        </div>
                    </div>
                    <div id="cvv">
                        <div>
                            <span id="cvv-label" class="exp">CVV2</span> <span class="question" id="cvv-question-label">
                                (What is cvv2?)
                            </span>
                        </div>
                        <input type="password" autocomplete="off" id="txt_cvv2" name="txt_cvv2" class="input_text_pin"
                               tabindex="6" maxlength="3" />
                    </div>
                     <br />
                    <br />
                </div>
                <div id="pp_name">
                    <span id="pp_pinpad_label" class="exp" style="text-transform: none;">Card PIN</span><br>
                </div>
                <div id="pp_pinpad_row">

                    <input tabindex="7" type="password" maxlength="4" class="input_text_pin" name="pp_pin" id="pp_pin" /><br />
                </div>
                <div style="clear: both;">
                </div>
                
                <br />
            </div>
            <div>
                <input type="hidden" name="student_id" value="<?php echo $identity; ?>" />
                <input type="hidden" name="amount" value="<?php echo $price; ?>" />
            </div>
            <div id="buttonsDiv">
                <span>
                    <input type="submit" tabindex="8" id="pay" value="Pay" name="pay" style="margin-right: 25px;" class="btn btn-small btn-info" />
                </span>
                <input type="submit" name="cancel" class="btn btn-danger pull-right" value="Cancel Transaction">
            </div>
    <div>


    </div>
</form>


            <div id="verifymobilediv"  style="display: none;">
            </div>
            <div id="logos" style="margin-top: -5px;">
                <hr />
                <div class="line" style="margin-bottom: -10px;">
                    
    <a id="stLink" target="_blank" class="greydout">
        <img id="safeTokenImg" style="margin-bottom:5px;" src="https://mufasa.interswitchng.com/p/webpay/img/safetoken.png" alt="safetoken" />
    </a>&nbsp;&nbsp;&nbsp;&nbsp;<a id="mscAuthLink" target="_blank" class="greydout">
        <img id="mcImg" src="/paydirect/Content/images/mastercode.png" width="76" height="40" alt="mastercode" />
    </a>&nbsp;&nbsp;&nbsp;&nbsp;<a id="visaAuthLink" target="_blank" class="greydout">
        <img id="vsImage" src="/paydirect/Content/images/visa.png" width="76" height="40" alt="visa" />
    </a>
                </div>
            </div>
        </div>
        <div class="text">
            <p>
                Copyright Interswitch Limited</p>
        </div>
    </div>



</body>
</html>
