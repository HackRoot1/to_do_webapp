<?php
include("../connection.php");
    $ref = $_POST['REFERENCENO'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $TotalAmt = $_POST['total-amount'];
    $amount = $_POST['paid-type'];
    $BalanceAmt = $_POST['balance-type'];
    $package_payment_package_name = $_POST['package_payment_package_name'];
    $package_payment_type = $_POST['room-type'];
    $package_payment_selected_date = $_POST['checkin'];
    $package_payment_selected_date1 = $_POST['checkout'];
    $Noofroom = $_POST['rooms'];
    $adult = $_POST['adult'];
    $child = $_POST['child'];
    $booking_status = $_POST['current-booking-status'];
    $from_web = $_POST['from_web'];
    $voucheractive = $_POST['voucheractive'];

    $sql = "UPDATE 
                online_payment 
            SET 
                -- REFERENCENO='$ref', 
                firstname='$firstname', 
                lastname='$lastname', 
                email='$email', 
                phone='$phone', 
                TotalAmt='$TotalAmt', 
                amount='$amount', 
                BalanceAmt='$BalanceAmt', 
                package_payment_package_name='$package_payment_package_name', 
                package_payment_type='$package_payment_type', 
                package_payment_selected_date='$package_payment_selected_date', 
                package_payment_selected_date1='$package_payment_selected_date1', 
                Noofroom='$Noofroom', 
                adult='$adult', 
                child='$child', 
                from_web='$from_web', 
                booking_status='$booking_status', 
                voucheractive='$voucheractive' 
                WHERE 
                REFERENCENO = '$ref'";

    if(mysqli_query($con, $sql)){
        echo "Data successfully updated";
    }else{
        echo "Data not updated";
    }
?>