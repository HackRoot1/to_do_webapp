<?php
include("../connection.php");
   
   if (isset($_POST['cancel'])) {
    $reason=$_POST['reason'];
    $rentention=$_POST['rentention'];
    $sql="update online_booking_cancel set reason='$reason', rentention='$rentention' where  REFERENCENO = '$ref' ";
    mysqli_query($con,$sql);
}
?> 
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Andaman Vacations">
      <meta name="author" content="Andaman Vacations">
      <title>Booking Details | Andaman Vacations</title>
      <!-- Favicons-->
      <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
      <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57.png">
      <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114.png">
      <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144.png">
      <link rel="alternate" hreflang="x-default" href="https://www.andaman.vacations/" />
      <link rel="alternate" hreflang="en-in" href="https://www.andaman.vacations/" />
      <!-- GOOGLE WEB FONT -->
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
      <!-- COMMON CSS -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet">
      <link href="../css/fontello/css/icon_set_1.css" rel="stylesheet">
      <link href="../css/fontello/css/icon_set_2.css" rel="stylesheet">
      <link href="../css/fontello/css/fontello.css" rel="stylesheet">
      <link href="../css/vendors.css" rel="stylesheet">
      <!-- SPECIFIC CSS -->
      <link href="../css/admin.css" rel="stylesheet">
      <!-- CUSTOM CSS -->
      <link href="../css/custom.css" rel="stylesheet">
      <?php include 'gtag.php'; ?>
      <style>
         #top_line {
         background: var(--white);
         border-bottom: 1px dashed #c1c1c1;
         }
         main {
         background-color: #ffffff;
         }
         header{
         position: relative;
         background: #f9f9f9;
         }
         header.sticky{
         position: fixed;
         }
         .mainHeader {
         height: auto;
         }
         nav {
         margin-top: unset;
         }
         .main-menu > ul > li > a, .main-menu > ul > li > span {
         color: #333;
         }
        ul#top_links a {
        color: var(--dark-text);
        }
        #position {
        background-color: var(--secondary-light);
        }
         .btn1, .btn2, .underprocess {
         display: inline-block;
         color: #fff;
         cursor: pointer;
         font-size: 14px;
         padding: 4px 12px;
         font-weight: normal;
         transition: all 0.3s;
         border-radius: 3px;
         outline: none;
         border: none;
         }
         .btn1:hover, .btn2:hover, .underprocess:hover {
         color: #fff;
         }
         .secondryBtn.dark {
         background: #2e73ab00 !important;
         border: 1px solid #2e73ab;
         color: #2e73ab;
         padding: 3px 12px;
         }
         .secondryBtn.dark:hover {
         background: #2e73ab !important;
         color: #fff;
         }
         .underprocess {
         background: #dddddd;
         color: var(--text-color);
         cursor: default;
         border: none;
         }
         .underprocess:hover {
         background: #dddddd;
         color: var(--text-color);
         }
         .info_booking {
         border: 1px solid #ddd;
         border-radius: 4px;
         padding: 8px 15px;
         margin: 0 0 10px 65px;
         }
         .cancelBtn {
         background: #222831;
         }
         .cancelBtn:hover, .cancelBtn:focus {
         color: var(--white);
         }
         .modify-panel {
         background: #f1f6ff;
         border-top: 1px dashed #ddd;
         margin-top: 15px;
         }
         .bookingFor {
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            width: 150px;
            font-weight: 500;
         }
        .table {
          border-spacing: 0 0.85rem !important;
        }
        .table tbody tr:first-child td {
            border-top: 0;
        }
        .table .dropdown {
          display: inline-block;
        }
        .table td,
        .table th {
          vertical-align: middle;
          margin-bottom: 10px;
          border-top: 1px solid #dee2e6;
          font-size: 14px;
          line-height: 18px;
          padding: 0.5rem;
        }
        .table thead tr,
        .table thead th {
          border: none;
          font-size: 12px;
          letter-spacing: 1px;
          text-transform: uppercase;
          background: transparent;
        }
        .table thead th {
            border-bottom: 2px solid #dee2e6;
        }
        .table td {
          background: #fff;
        }
        .table td:first-child, .table td:last-child {
          border-radius: 0;
        }
        .table a {
          color: #212529;
        }
        .table a:hover,
        .table a:focus {
          text-decoration: none;
        }
        label {
            margin-bottom: 5px;
        }
        hr {
          margin-top: 10px;
          margin-bottom: 16px;
          border: 0;
          border-top: 1px dashed #969696;
        }
        .section-top {
          border-bottom: 2px solid #333;
          padding-bottom: 16px;
          margin-bottom: 30px;
        }
        .actions {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 8px;
        }
        .cancel-bookings {
            border: 1px solid #ce0003;
            background: transparent !important;
            color: #ce0003;
            font-weight: 500;
        }
        .cancel-bookings:hover {
            color: #ce0003;
        }
        .status-summary {
            list-style: none;padding-left: 0;display: flex;gap: 16px;margin-top: 3px;font-size: 15px;
        }
        .status-summary li:not(:last-child):after {
            content: '\2022';
            padding-left: 16px;
            color: #868686;
        }
        .status-summary .status {
            color: var(--secondary-color);
        }
        .alert.cancel {
            padding: 8px 16px;
            animation: blinkMe 4s linear infinite;
        }
        @keyframes blinkMe {
         0% {
          opacity: 0;
         }
         50% {
          opacity: 1;
         }
         70% {
          opacity: 1;
         }
         100% {
          opacity: 0;
         }
        }
        .refund-title {
         text-transform: uppercase;
         font-size: 16px;
         color: #787878;
        }
        #cancel-section, #refund-section {
         display: none;
        }
      </style>
   </head>
   <body>
      <div id="preloader">
         <div class="sk-spinner sk-spinner-wave">
            <div class="    "></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
         </div>
      </div>
      <!-- End Preload -->
      <div class="layer"></div>
      <!-- Mobile menu overlay mask -->
      <!-- Header================================================== -->
      <?php include '../header1.php';
         include 'functions.php';
         $user_check = $_SESSION['login_user'];
         $Usersession = [];
         $UsersessionQry = mysqli_query($con, "select * from andamanvacationsignup where emailAddress='$user_check'");
         if (mysqli_num_rows($UsersessionQry)) {
             $Usersession = mysqli_fetch_array($UsersessionQry);
             $login_session = $Usersession['emailAddress'];
             $UserFullAddress = unserialize($Usersession["UserFullAddress"]);
         } else {
             $UsersessionQry = mysqli_query($con, "select * from agencylogin where emailAddress='$user_check'");
             if (mysqli_num_rows($UsersessionQry)) {
                 $Usersession = mysqli_fetch_array($UsersessionQry);
                 $login_session = $Usersession['emailAddress'];
                 $UserFullAddress = unserialize($Usersession["UserFullAddress"]);   
               //   $login_role = $Usersession['role'];
               //   print_r($login_role);  
             } 
        }
         
         
         $monthyear = array();
         $monthyearQry = mysqli_query($con, "select * from online_payment where bkgLoginName='" . $user_check . "' and status='success' and from_web='andaman.vacations' group by DATE_FORMAT(curTime, '%M %Y') desc");
         while ($monthyearArr = mysqli_fetch_array($monthyearQry)) {
             $monthyear[] = $monthyearArr;
         }
         
         $countries = [];
         $countriesQry = mysqli_query($con, "select * from countries");
         while ($countriesArr = mysqli_fetch_array($countriesQry)) {
             $countries[] = $countriesArr;
         }
         
         $UserFullAddress = unserialize($Usersession["UserFullAddress"]);


        $ref=isset($_GET["ref"])?$_GET["ref"]:false;
        $sql = mysqli_query($con,"select * from online_payment where REFERENCENO = '$ref' ");
        $res = mysqli_fetch_array($sql);
        $cancelreason = explode("|||||",$res["cancelreason"]);

        $paymentStatus= mysqli_query($con, "select * from bank_payment_status where Reference_no='$ref'");
        $paymentData = mysqli_fetch_array($paymentStatus);

        $bookingcancel= mysqli_query($con, "select * from online_booking_cancel where  REFERENCENO = '$ref'");
        $bookingData = mysqli_fetch_array($bookingcancel);

   
        $allBankData = [];
        $selectBankPayment = mysqli_query($con, "SELECT * FROM bank_payment_status as b INNER JOIN online_payment as o on o.REFERENCENO=b.Reference_no where b.Reference_no='$ref'");
        while($bankData = mysqli_fetch_array($selectBankPayment)){
            $allBankData[] = $bankData;
        }
        ?>
      <!-- End Header -->
      <!--<section class="parallax-window" data-parallax="scroll" data-image-src="../img/holiday-andaman-vacations.jpg"-->
      <!--   data-natural-width="1400" data-natural-height="300">-->
      <!--</section>-->
      <!-- End section -->
      <main>
         <div id="position">
            <div class="container">
               <ul>
                  <li class="fontS"><a href="/">Home</a>
                  </li>
                  <li class="fontS"><a href="my-account">My Account</a></li>
                  <li class="fontS"><a href="all-bookings">All Bookings</a></li>
                  <li class="fontS">Update Booking</li>
               </ul>
            </div>
         </div>
         <!-- End Position -->
         <div class="padding_30 container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flex-center-between flexDirectionRC">
                        <div>
                            <h2 class="m-0">Update Booking</h2>
                            <ul class="status-summary">
                                <li>Ref # <?php echo isset($_GET['ref'])?$res['REFERENCENO']:''; ?></li>
                                <li class="status">Booking request is in process</li>
                            </ul>
                        </div>
                        <div>
                            <p class="text-right mb-0"><span class="font-medium">Booking Date</span><br> <?php echo isset($_GET['ref'])?$res['package_payment_selected_date']:''; ?></p>
                        </div>
                    </div>
                    <?php if($bookingData['booking_status']=='in under cancellation process'){?>
                    <div class="alert alert-danger cancel" role="alert">
                        <span class="font-medium">User wants to cancel this booking</span>
                        <p class="mb-0 fontS"><span class="font-medium">Reason:</span> Travel date changed | <span class="font-medium">Cancellation Date:</span> 20/10/2023</p>
                    </div>
                    <?php } ?>
                    <form id="proposal_form" method="POST">
                        <div class="row section-top">
                            <div class="col-sm-12">
                                <h3 class="mt-0">Guest Details</h3>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="fontS" for="f_name">First Name <span class="required">*</span></label>
                                    <input class="form-control" type="text" name="fname" id="f_name" placeholder="Enter First Name" value="<?php echo isset($_GET['ref'])?$res['firstname']:''; ?>" required>
                                    <input class="form-control" type="hidden" name="REFERENCECNO" value="<?php echo isset($_GET['ref'])?$_GET['ref']:''; ?>">
                                    <span class="error_form" id="fname_error_message"></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="fontS" for="l_name">Last Name <span class="required">*</span></label>
                                    <input class="form-control" type="text" name="lname" id="l_name" placeholder="Enter Last Name" value="<?php echo isset($_GET['ref'])?$res['lastname']:''; ?>" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="fontS" for="form_email">Email Id <span class="required">*</span></label>
                                    <input class="form-control" type="email" name="email" placeholder="Enter Your Email Id" id="form_email" autocomplete="on" value="<?php echo isset($_GET['ref'])?$res['email']:''; ?>" required>
                                    <span class="error_form" id="email_error_message"></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="fontS" for="form_phone">Contact No. <span class="required">*</span></label>
                                    <input class="form-control" type="number" name="phone" id="form_phone" placeholder="+91 " autocomplete="on" value="<?php echo isset($_GET['ref'])?$res['phone']:''; ?>" #cancel-bookingrequired>
                                    <span class="error_form" id="phone_error_message"></span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <hr>
                            </div>
                            <div class="col-sm-12">
                                <h3 class="mt-0">Hotel Details</h3>
                            </div>
                            <div class="col-md-3 col-sm-3"> 
                                <div class="form-group">
                                    <label class="fontS" for="hotel-booked">Hotel Booked</label>
                                    <select class="form-control" name="hotel-booked" id="hotel-booked">
                                        <option>No Were</option>
                                        <option>Beach Resort</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label class="fontS" for="room-type">Room Type</label>
                                    <input class="date-pick form-control" type="text" name="room-type" id="room-type" placeholder="Standard Room" value="<?php echo isset($_GET['ref'])?$res['package_payment_type']:''; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label class="fontS" for="checkin">Check In</label>
                                    <input class="date-pick form-control" type="text" name="checkin" id="checkin" placeholder="dd/mm/yyyy"  value="<?php echo isset($_GET['ref'])?$res['package_payment_selected_date']:''; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label class="fontS" for="checkout">Check Out</label>
                                    <input class="date-pick form-control" type="text" name="checkout" id="checkout" placeholder="dd/mm/yyyy" value="<?php echo isset($_GET['ref'])?$res['package_payment_selected_date1']:''; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2"> 
                                <div class="form-group">
                                    <label class="fontS" for="rooms">Select Rooms</label>
                                    <select class="form-control" name="rooms" id="rooms">
                                    <?php for($eachroom=1;$eachroom<=5;++$eachroom){?>
                                        <option value="<?php echo $eachroom;?>"
                                            <?php echo(!empty($res["Noofroom"]) && $res["Noofroom"]==$eachroom)?"selected='selected'":"";?>>
                                             0<?php echo $eachroom;?></option>
                                     <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2"> 
                                <div class="form-group">
                                    <label class="fontS" for="adults">Adults</label>
                                    <select class="form-control" name="adults" id="adults">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2"> 
                                <div class="form-group">
                                    <label class="fontS" for="child">Child</label>
                                    <select class="form-control" name="child" id="child">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6"></div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label class="fontS" for="country">Country</label>
                                    <input class="form-control" type="text" name="country" id="country" placeholder="India" required>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label class="fontS" for="state">State</label>
                                    <input class="form-control" type="text" name="state" id="state" placeholder="Andaman & Nicobar Islands" required>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label class="fontS" for="city">City</label>
                                    <input class="form-control" type="text" name="city" id="city" placeholder="City" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <hr>
                            </div>
                            <div class="col-sm-12">
                                <h3 class="mt-0">Billing Details</h3>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label class="fontS" for="total-amount">Total Amount</label>
                                    <input class="date-pick form-control" type="text" name="total-amount" id="total-amount" placeholder="0.00"  value="<?php echo isset($_GET['ref'])?$res['TotalAmt']:''; ?>"required>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label class="fontS" for="paid-type">Paid Amount</label>
                                    <input class="date-pick form-control" type="text" name="paid-type" id="paid-amount" placeholder="0.00"  value="<?php echo isset($_GET['ref'])?$res['amount']:''; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label class="fontS" for="balance-type">Balance Amount</label>
                                    <input class="date-pick form-control" type="text" name="balance-type" id="balance-amount" placeholder="0.00" value="<?php echo isset($_GET['ref'])?$res['BalanceAmt']:''; ?>" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <hr>
                            </div>
                            <div class="col-md-3 col-sm-3"> 
                                <div class="form-group">
                                    <label class="fontS" for="current-booking-status">Booking status</label>
                                    <select class="form-control" name="current-booking-status" id="current-booking-status">
                                        <option value="in process">in process</option>
                                        <!--<option value="on request">on request</option>-->
                                        <option value="confirmed">confirmed</option>
                                        <option value="in under cancellation process">in under cancellation process</option>
                                        <option value="cancelled">cancelled</option>
                                        <option value="completed">completed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3"> 
                                <div class="form-group">
                                    <label class="fontS" for="from-web">From Web</label>
                                    <select class="form-control" name="from-web" id="from-web">
                                    <option
                                    <?php echo($res["from_web"]=='andaman.vacations')?'selected="selected"':'';?>
                                    value="andaman.vacations">Andaman.vacations</option>
                                    <option
                                    <?php echo($res["from_web"]=='mountainedge.in')?'selected="selected"':'';?>
                                    value="mountainedge.in">Mountainedge.in</option>
                                    <option
                                    <?php echo($res["from_web"]=='havelockbeachresort.com')?'selected="selected"':'';?>
                                    value="havelockbeachresort.com">Havelockbeachresort.com</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <div class="form-check py-4">
                                        <input type="checkbox" class="form-check-input" id="voucher-active">
                                        <?php echo(!empty($res["voucheractive"]) && $res["voucheractive"]=="active")?"checked='checked'":"";?>
                                        <label class="form-check-label" for="voucher-active">Voucher Active</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row section-top">
                            <div class="col-md-12">
                                <h3 class="mt-0">Payment Summary</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr style="background: #d8d8d8;">
                                            <th scope="col" style="padding: 10p;">Room Details</th>
                                            <th scope="col" class="text-center">Guests</th>
                                            <th scope="col" class="text-center">Cost per night</th>
                                            <th scope="col" class="text-center">Nights</th>
                                            <th scope="col" style="text-align: right;">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $net_rate_total = 0;
                                        $discount_total = 0;
                                        $rates = 0;
                                         $tax_total = 0;

                                        // $check_in = $res['package_payment_selected_date'];
                                        // $check_out = $res['package_payment_selected_date1'];
                                        //  $date1 = new DateTime($check_in);
                                        // $date2 = new DateTime($check_out);
                                        // $interval = $date1->diff($date2);
                                        // $date_diff = $interval->d;

                                        $data = ($res['paysummery']);
                                        $rates = unserialize($data);
                       

                                        for ($eachPayment = 1; $eachPayment <= $res["Noofroom"]; ++$eachPayment) { 
                                    ?>
                                        <tr class="bottom-border">
                                            <td><b><?php echo "Room " . $eachPayment . ""; ?></b></td>
                                            <td class="text-center">Adult x <?php echo $res["adult"][$eachPayment - 1]; ?></td>
                                            <td class="text-center">₹ <?php echo $rates[0]['adult_display_rate']; ?></td>
                                            <td class="text-center">₹ <?php echo $rates['nights']; ?></td>
                                            <td style="text-align: right;">₹ <?php echo $rates[0]['adult_display_rate']; ?></td>
                                        </tr> 
                                        <?php if ($rates['child'][$eachPayment - 1] != "0") { ?>
                                        <tr class="bottom-border">
                                            <td class="text-center"></td>   
                                            <td class="text-center">Child x <?php echo $res["child"][$eachPayment - 1]; ?></td>
                                            <td class="text-center">₹ <?php echo $rates[0]['child_display_rate']; ?></td>
                                            <td class="text-center">₹ <?php echo $rates['nights']; ?></td>
                                            <td style="text-align: right;">₹ <?php echo $rates[0]['child_display_rate']; ?></td>
                                        </tr>

                                    <?php
                                          }
                                        }
                                    ?>  
                                        <tr class="top-border bottom-border">
                                            <td colspan="4"><b> Sub Total</b></td>
                                            <td style="text-align: right;">₹ <?php echo $rates['sub_total']; ?></td>
                                        </tr>
                                        <tr class="bottom-border">
                                            <td colspan="4"> Special Discount (-)</td>
                                            <td style="text-align: right;">₹ <?php echo $rates['discount']; ?></td>
                                        </tr>
                                        <tr class="top-border bottom-border">
                                            <td colspan="4"><b>After Discount</b></td>
                                            <td style="font-weight: bold;text-align: right;">₹ <?php echo $rates['after_discount']; ?></td>
                                        </tr>
                                        <tr class="bottom-border">
                                            <td colspan="4">Taxes &amp; Service Fee (+) </td>
                                            <td style="text-align: right;"> ₹ <?php echo $rates['tax_service_fees']; ?></td>
                                        </tr>
                                        <tr class="t2a_gross_total">
                                            <td colspan="4"><b>Gross Total</b></td>
                                            <td style="font-weight: bold;font-size: 16px;color: var(--primary-color);text-align: right;"> ₹ <?php echo $rates['grand_total']; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">Payment Received</td>
                                            <td colspan="3" style="text-align: center;"><?php echo $paymentData['Payment_id']; ?>|<?php echo $paymentData['Payment_time'];?> </td><td style="text-align: right;">₹ <?php echo $rates['paid']; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">Payment Received</td>
                                            <td colspan="3" style="text-align: center;"><?php echo $paymentData['Payment_id']; ?> |<?php echo $paymentData['Payment_time'];?> </td>
                                            <td style="text-align: right;">₹ <?php $total=$rates['grand_total'];   $balance= $rates['paid']; echo ($total- $balance); ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="font-weight: bold;">Balance payable</td>
                                            <td style="font-weight: bold;text-align: right;">₹ <?php echo $res['BalanceAmt'];?></td>
                                        </tr>
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-4 section-top">
                            <div class="col-md-12">
                                <h3 class="mt-0">Payment Details</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr style="background: #d8d8d8;">
                                            <th scope="col" style="padding: 10px;">Payment ID</th>
                                            <th scope="col" class="text-center">Bank Ref Id</th>
                                            <th scope="col" class="text-center">Action</th>
                                            <th scope="col" class="text-center">Amount</th>
                                            <th scope="col" style="text-center">Status</th>
                                            <th scope="col" style="text-center">Reference No.</th>
                                            <th scope="col" style="text-center">Payment Mode</th>
                                            <th scope="col" style="text-center">Card No.</th>
                                            <th scope="col" style="text-center">Name on Card</th>
                                            <th scope="col" style="text-center">Payment Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($allBankData as $eachBankData){?>
                                        <tr class="bottom-border">
                                            <td class="text-center"><?php echo empty($eachBankData['Payment_id'])?'-':$eachBankData['Payment_id']?></td>
                                            <td class="text-center"><?php echo empty($eachBankData['Bank_ref_num'])?'-':$eachBankData['Bank_ref_num']?></td>
                                            <td class="text-center"><?php echo empty($eachBankData['Action_captured'])?'-':$eachBankData['Action_captured']?></td>
                                            <td class="text-center">INR. <?php echo empty($eachBankData['amount'])?'-':$eachBankData['amount']?></td>
                                            <td class="text-center"><?php echo empty($eachBankData['Bank_payment_status'])?'-':$eachBankData['Bank_payment_status']?></td>
                                            <td class="text-center"><?php echo empty($eachBankData['Reference_no'])?'-':$eachBankData['Reference_no']?></td>
                                            <td class="text-center"><?php echo empty($eachBankData['paymentMode'])?'-':$eachBankData['paymentMode']?></td>
                                            <td class="text-center"><?php echo empty($eachBankData['cardNumber'])?'-':$eachBankData['cardNumber']?></td>
                                            <td class="text-center"><?php echo empty($eachBankData['name_on_card'])?'-':$eachBankData['name_on_card']?></td>
                                            <td class="text-center"><?php echo empty($eachBankData['Payment_time'])?'-':$eachBankData['Payment_time']?></td>
                                        </tr> 
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                     
                      
                        <div class="actions text-center">
                            <div>
                                <input type="submit" name="update_booking" id="update_booking"  value="Update Booking" class="btn1 primaryBtn">
                            </div>
                            <div>
                                <a href="/account/hotel-booking-invoice?ref=<?php echo $res['REFERENCENO']; ?>" target="_blank" class="btn1 secondryBtn">Invoice</a>
                                <a href="/account/hotel-booking-voucher?ref=<?php echo $res['REFERENCENO'];?>" target="_blank" class="btn2 secondryBtn dark">Voucher</a>
                                <button type="button" id="cancel-booking" title="Cancel Booking" class="btn1 cancelBtn">Cancel Booking</button>
                                <button type="button" id="refund-booking" title="Cancel Booking" class="btn1 cancelBtn">Refund</button>
                            </div>
                        </div>
                    </form>
                    <div id="refund-section">
                            <div class="row mt-4 section-top">
                                <div class="col-md-12">
                                    <h3 class="mt-0">Refund Details</h3>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="fontS" for="totalAmt">Booking Amount</label>
                                        <input class="form-control" type="text" name="totalAmt" id="totalAmt" placeholder="0.00" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="fontS" for="retention">Retention Charges</label>
                                        <input class="form-control" type="text" name="retention" id="retention" placeholder="0.00" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="fontS" for="refundAmt">Refund Amount</label>
                                        <input class="form-control" type="text" name="refundAmt" id="refundAmt" placeholder="0.00" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="fontS" for="refund-date">Refund Date</label>
                                        <input class="form-control" type="text" name="refund-date" id="refund-date" placeholder="25/10/2023" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="fontS" for="payment-mode">Payment Mode</label>
                                        <input class="form-control" type="text" name="payment-mode" id="payment-mode" placeholder="Back to source" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="fontS" for="payment-id">Payment Ref No.</label>
                                        <input class="form-control" type="text" name="payment-id" id="payment-id" placeholder="12345678" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="fontS" for="remark">Remark</label>
                                        <input class="form-control" type="text" name="remark" id="remark" placeholder="Bank Transfer / UPI / Cash etc" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="cancel-section" class="section-top">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h3 class="mt-0">Cancellation Details</h3>
                                </div>
                            </div>
                            <form method="POST">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="fontS" for="reason">Reason</label>
                                            <input class="form-control" type="text" name="reason" id="reason" placeholder="Travel date changed" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="myRadioGroup">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="radio" id="select" name="rentention" checked="checked" value="select" <?php echo(!empty($cancelreason[0])?$cancelreason[0]:'');?>/> 
                                                        <label for="select" class="fontS">Select charges</label>
                                                        <div id="retentionselect" class="desc">
                                                            <select class="form-control" name="retention" id="retention-charges">
                                                                <option value="">Select Retention Charges</option>
                                                                <option  <?php echo(!empty($cancelreason[1]=="100")?'selected="selected"':'');?> value="100">100% booking amount will be charged</option>
                                                                <option  <?php echo(!empty($cancelreason[1]=="70")?'selected="selected"':'');?> value="70">70% booking amount will be charged</option>
                                                                <option  <?php echo(!empty($cancelreason[1]=="30")?'selected="selected"':'');?> value="30">30% booking amount will be charged</option>
                                                                <option  <?php echo(!empty($cancelreason[1]=="0")?'selected="selected"':'');?> value="0">No booking amount will be charged</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="radio" id="manual" name="retention" value="manual"/> 
                                                        <label for="manual" class="fontS">Add manual charge</label>
                                                        <div id="retentionmanual" class="desc" style="display: none;">
                                                            <div class="form-group">
                                                                <label class="fontS" for="manual-retention">
                                                                <input class="form-control" type="text" name="manual-retention" id="manual-retention" placeholder="0.00"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 text-left">
                                    <button type="submit" name="cancel" class="btn1 primaryBtn cancel-bookings">Cancel Booking</button>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </main>
      <!-- End main -->
      <div id="toTop"></div>
      <!-- Back to top button -->
      <!-- Common scripts -->
      <script src="../js/vacations.js"></script>
      <script src="../js/jquery-3.6.0.min.js"></script>
      <script src="../js/common_scripts_min.js"></script>
      <script src="../js/functions.js"></script>
      <!-- Specific scripts -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script>
        $( "#cancel-booking" ).click(function() {
            $( "#cancel-section" ).toggle();
        });
        $( "#refund-booking" ).click(function() {
            $( "#refund-section" ).toggle();
        });
        
        // $(document).ready(function() {
        //     $("input[name$='retentionc']").click(function() {
        //         var test = $(this).val();
        
        //         $("div.desc").hide();
        //         $("#retention" + test).show();
        //     });
        // });
        //  $("#download_pdf").on("click", function() {
        //      $.ajax({
        //          cache: false,
        //          type: 'GET',
        //          url: 'https://www.andaman.vacations/account/hotel-booking-voucher.php',
        //          contentType: false,
        //          processData: false,
        //          data: "ref=",
        //          //xhrFields is what did the trick to read the blob to pdf
        //          xhrFields: {
        //              responseType: 'blob'
        //          },
        //          success: function(response, status, xhr) {
         
        //              var filename = "";
        //              var disposition = xhr.getResponseHeader('Content-Disposition');
         
        //              if (disposition) {
        //                  var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
        //                  var matches = filenameRegex.exec(disposition);
        //                  if (matches !== null && matches[1]) filename = matches[1].replace(/['"]/g, '');
        //              }
        //              var linkelem = document.createElement('a');
        //              try {
        //                  var blob = new Blob([response], {
        //                      type: 'application/pdf'
        //                  });
         
        //                  if (typeof window.navigator.msSaveBlob !== 'undefined') {
        //                      //   IE workaround for "HTML7007: One or more blob URLs were revoked by closing the blob for which they were created. These URLs will no longer resolve as the data backing the URL has been freed."
        //                      window.navigator.msSaveBlob(blob, filename);
        //                  } else {
         
         
        //                      var URL = window.URL || window.webkitURL;
        //                      var downloadUrl = URL.createObjectURL(blob);
         
        //                      if (!filename) {
        //                          // use HTML5 a[download] attribute to specify filename
        //                          var a = document.createElement("a");
         
        //                          // safari doesn't support this yet
        //                          if (typeof a.download === 'undefined') {
        //                              window.location = downloadUrl;
        //                          } else {
        //                              a.href = downloadUrl;
        //                              a.download = "file_" + new Date() + ".pdf";;
        //                              document.body.appendChild(a);
        //                              a.target = "_blank";
        //                              a.click();
        //                          }
        //                      } else {
        //                          window.location = downloadUrl;
        //                      }
        //                  }
         
        //              } catch (ex) {
        //                  console.log(ex);
        //              }
                     
        //          }
        //      });
        //  })
         
        //  $('.wishlist_close_admin').on('click', function(c) {
        //      $(this).parent().parent().parent().fadeOut('slow', function(c) {});
        //  });
         
        //  $("#update-setting").submit(function(e) {
        //      e.preventDefault();
        //      $.ajax({
        //          url: 'update-setting.php',
        //          data: new FormData(this),
        //          type: 'get',
        //          cache: false,
        //          contentType: false,
        //          processData: false,
        //          success: function(status) {
        //              if (status !== '') {
        //                  $('#responsestatus').html(status);
        //                  $('#responsestatus').fadeIn();
        //                  $('#responsestatus').fadeOut(5000);
        //              }
        //          }
        //      });
        //  });
        //  var loadFile = function(event) {
        //      var image = document.getElementById('output');
        //      image.src = URL.createObjectURL(event.target.files[0]);
        //  };
         
         //cancel booking popup  
         
         // $(document).on('click', "#cancel-bookings", function(){
         //     $("input[name=fname]").val($(this).data("fname"));
         //     $("view_fname").text($(this).data("fname"));
         
         //     $("input[name=lname]").val($(this).data("lname"));
         //     $("view_lname").text($(this).data("lname"));
         
         //     $("input[name=email]").val($(this).data("email"));
         //     $("view_email").text($(this).data("email"));
         // });
         
         // end of cancel booking popup

      </script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
        $(document).ready(function(){
            $("#update_booking").on("click",function(e){
                e.preventDefault();
                alert($("#proposal_form").serialize());
                $.ajax({
                    url :"result.php",
                    method:"POST",
                    data : $("#proposal_form").serialize(),
                    success :function(data){
                        alert(data);
                    }
                })
            })

        })
        </script>
   </body>
</html>