<?php

   if (isset($_POST['update_booking'])) {
    $firstname= $_POST['fname'];
    // print_r($firstname);
    echo "<pre>";
    print_r($_POST['update_booking']);
    echo "</pre>";
    $lastname= $_POST['lname'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $TotalAmt= $_POST['total-amount'];
    $amount= $_POST['paid-type'];
    $BalanceAmt= $_POST['balance-type'];
    $package_payment_package_name= $_POST['package_payment_package_name'];
    $package_payment_type= $_POST['room-type'];
    $package_payment_selected_date= $_POST['checkin'];
    $package_payment_selected_date1= $_POST['checkout'];
    $Noofroom= $_POST['rooms'];
    $adult= $_POST['adult'];
    $child= $_POST['child'];
    $booking_status= $_POST['current-booking-status'];
    $from_web= $_POST['from_web'];
    $voucheractive= $_POST['voucheractive'];
    
       }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Booking Details | Andaman Vacations</title>
      
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
      
      <main>
         
                    <form id="proposal_form" method="POST">
                        <div>
                            <label class="fontS" for="f_name">First Name</label>
                            <input class="form-control" type="text" name="fname" id="f_name" placeholder="Enter First Name"  required>
                        </div>
                        <div>
                            <label class="fontS" for="l_name">Last Name</label>
                            <input class="form-control" type="text" name="lname" id="l_name" placeholder="Enter Last Name" required>
                        </div>
                                
                        <div>
                            <label class="fontS" for="form_email">Email Id </label>
                            <input class="form-control" type="email" name="email" placeholder="Enter Your Email Id" id="form_email" autocomplete="on" required>
                        </div>
                        <div>
                            <label class="fontS" for="form_phone">Contact No.</label>
                            <input class="form-control" type="number" name="phone" id="form_phone" placeholder="+91 " autocomplete="on" #cancel-bookingrequired>
                        </div>
                        <div>
                            <label class="fontS" for="hotel-booked">Hotel Booked</label>
                            <select class="form-control" name="hotel-booked" id="hotel-booked">
                                <option>No Were</option>
                                <option>Beach Resort</option>
                            </select>
                        </div>
                        <div>
                            <label class="fontS" for="room-type">Room Type</label>
                            <input class="date-pick form-control" type="text" name="room-type" id="room-type" placeholder="Standard Room" required>
                        </div>
                        <div>
                            <label class="fontS" for="checkin">Check In</label>
                            <input class="date-pick form-control" type="text" name="checkin" id="checkin" placeholder="dd/mm/yyyy" required>
                        </div>
                        <div>
                            <label class="fontS" for="checkout">Check Out</label>
                            <input class="date-pick form-control" type="text" name="checkout" id="checkout" placeholder="dd/mm/yyyy" required>
                        </div>
                        <div>
                            <label class="fontS" for="rooms">Select Rooms</label>
                            <select class="form-control" name="rooms" id="rooms">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div>
                            <label class="fontS" for="adults">Adults</label>
                            <select class="form-control" name="adults" id="adults">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div>
                            <label class="fontS" for="child">Child</label>
                            <select class="form-control" name="child" id="child">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="fontS" for="country">Country</label>
                            <input class="form-control" type="text" name="country" id="country" placeholder="India" required>
                        </div>
                        <div>
                            <label class="fontS" for="state">State</label>
                            <input class="form-control" type="text" name="state" id="state" placeholder="Andaman & Nicobar Islands" required>
                        </div>
                        <div>
                            <label class="fontS" for="city">City</label>
                            <input class="form-control" type="text" name="city" id="city" placeholder="City" required>
                        </div>
                        
                        <div>
                            <label class="fontS" for="total-amount">Total Amount</label>
                            <input class="date-pick form-control" type="text" name="total-amount" id="total-amount" placeholder="0.00" required>
                        </div>
                        
                        <div>
                            <label class="fontS" for="paid-type">Paid Amount</label>
                            <input class="date-pick form-control" type="text" name="paid-type" id="paid-amount" placeholder="0.00" required>
                        </div>

                        <div>
                            <label class="fontS" for="balance-type">Balance Amount</label>
                            <input class="date-pick form-control" type="text" name="balance-type" id="balance-amount" placeholder="0.00" required>
                        </div>
                                
                        <div>
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
                        
                        <div>
                            <label class="fontS" for="from-web">From Web</label>
                            <select class="form-control" name="from-web" id="from-web">
                            <option value="andaman.vacations">Andaman.vacations</option>
                            <option value="mountainedge.in">Mountainedge.in</option>
                            <option value="havelockbeachresort.com">Havelockbeachresort.com</option>
                            </select>
                        </div>
                                    
                        <div>
                            <input type="checkbox" class="form-check-input" id="voucher-active">
                            <label class="form-check-label" for="voucher-active">Voucher Active</label>
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
                        <div id="cancel-section" class="section-top">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h3 class="mt-0">Cancellation Details</h3>
                                </div>
                            </div>
                            <form action = "" method="POST">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div id="myRadioGroup">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="radio" id="select" name="reason" checked="checked" value="select" <?php echo(!empty($cancelreason[0])?$cancelreason[0]:'');?>/> 
                                                        <label for="select" class="fontS">Select charges</label>
                                                        <div id="retentionselect" class="desc">
                                                            <select class="form-control" name="retention-charges" id="retention-charges">
                                                                <option value="">Select Retention Charges</option>
                                                                <option  <?php echo(!empty($cancelreason[1]=="100")?'selected="selected"':'');?> #value="100">100% booking amount will be charged</option>
                                                                <option  <?php echo(!empty($cancelreason[1]=="70")?'selected="selected"':'');?> value="70">70% booking amount will be charged</option>
                                                                <option  <?php echo(!empty($cancelreason[1]=="30")?'selected="selected"':'');?> value="30">30% booking amount will be charged</option>
                                                                <option  <?php echo(!empty($cancelreason[1]=="0")?'selected="selected"':'');?> value="0">No booking amount will be charged</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="radio" id="manual" name="retentionc" value="manual"/> 
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
                                    <button type="submit" name="submit" class="btn1 primaryBtn cancel-bookings">Cancel Booking</button>
                                </div>
                            </form>
                        </div>
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
                        <div class="actions text-center">
                            <div>
                                <input type="submit" id= "update_booking" name="update_booking" value="Update Booking" class="btn1 primaryBtn">
                            </div>
                            <div>
                                <a href="/account/hotel-booking-invoice?ref=<?php echo $res['REFERENCENO']; ?>" target="_blank" class="btn1 secondryBtn">Invoice</a>
                                <a href="/account/hotel-booking-voucher?ref=<?php echo $res['REFERENCENO'];?>" target="_blank" class="btn2 secondryBtn dark">Voucher</a>
                                <button type="button" id="cancel-booking" title="Cancel Booking" class="btn1 cancelBtn">Cancel Booking</button>
                                <button type="button" id="refund-booking" title="Cancel Booking" class="btn1 cancelBtn">Refund</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
        <!-- ======== jquery link ========= -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function(){

            $("#update_booking").on("click", function(e){
                e.preventDefault();
                alert($("#proposal_form").serialize());
                $.ajax({
                    url : "result.php",
                    method : "POST",
                    data : $("#proposal_form").serialize(),
                    success : function(data){
                        alert(data);
                    }
                });
            });
        });
    </script>
   </body>
</html>