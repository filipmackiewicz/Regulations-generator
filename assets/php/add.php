<?php
    require_once('connect.php');

    $compnayurl = $_POST['compnayurl'];
    $companyname = $_POST['companyname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $nip = $_POST['nip'];
    $regon = $_POST['regon'];
    $companyadress = $_POST['companyadress'];
    $companycity = $_POST['companycity'];
    $companypostcode = $_POST['companypostcode'];
    $companyaccountnumber = $_POST['companyaccountnumber'];

    $conn = connect();

    
    
    $sql = "INSERT INTO dane(compnayurl, companyname, email, phone, nip, regon, companyadress, companycity, companypostcode, companyaccountnumber, guarantee, 
    guarantee_text, complaint, complaint_text, cash_on_collection, transfer, cash_on_delivery, pay_now, pay_po, 
    payu, p24, tpay, eservice, imoje, payment_text, self_pickup, self_pickup_adress, self_pickup_hours, self_pickup_days, apaczka, dhl, dpd, dpd_pickup, 
    fedex, furgonetka, inpost_kurier, inpost_paczkomaty, orlen, poczta_polska, ups, self_delivery, special_transport_text, delivery_text) VALUES 
        ('$compnayurl', '$companyname', '$email' ,$phone, $nip, $regon, '$companyadress', '$companycity', '$companypostcode', '$companyaccountnumber', '{$_POST['guarantee']}',
    ";

    if (isset($_POST['guarantee-textarea'])){
        $sql .= "'{$_POST['guarantee-textarea']}',";
    }else {
        $sql .= "NULL,";
    }

    $sql .= "'{$_POST['complaint']}',";

    if (isset($_POST['complaint-textarea'])){
        $sql .= "'{$_POST['complaint-textarea']}',";
    }else {
        $sql .= "NULL,";
    }

    $sql .= "'{$_POST['cash_on_collection']}', '{$_POST['transfer']}', '{$_POST['cash_on_delivery']}', '{$_POST['pay_now']}', '{$_POST['pay_po']}', '{$_POST['payu']}', 
    '{$_POST['p24']}', '{$_POST['tpay']}', '{$_POST['eservice']}', '{$_POST['imoje']}',";

    if (isset($_POST['payment-textarea'])){
        $sql .= "'{$_POST['payment-textarea']}', ";
    }else {
        $sql .= "NULL,";
    }

    $sql .= "'{$_POST['self_pickup']}',";

    if (isset($_POST['self_pickup_adress']) && isset($_POST['self_pickup_hours']) && isset($_POST['self_pickup_days'])){
        $sql .= "'{$_POST['self_pickup_adress']}', '{$_POST['self_pickup_hours']}', '{$_POST['self_pickup_days']}',";
    }else {
        $sql .= "NULL, NULL, NULL,";
    }

    $sql .= "'{$_POST['apaczka']}', '{$_POST['dhl']}', '{$_POST['dpd']}', '{$_POST['dpd_pickup']}', '{$_POST['fedex']}', '{$_POST['furgonetka']}', 
    '{$_POST['inpost_kurier']}', '{$_POST['inpost_paczkomaty']}', '{$_POST['orlen']}', '{$_POST['poczta_polska']}', '{$_POST['ups']}', '{$_POST['self_delivery']}', 
    ";

    if (isset($_POST['special-transport-textarea'])){
        $sql .= "'{$_POST['special-transport-textarea']}', ";
    }else {
        $sql .= "NULL,";
    }

    if (isset($_POST['delivery-textarea'])){
        $sql .= "'{$_POST['delivery-textarea']}');";
    }else {
        $sql .= "NULL);";
    }





    if(mysqli_query($conn, $sql)){
        $message = 'Poprawnie dodano do bazy danych';

        echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('/generator');
        </SCRIPT>";
        

    } else{
        echo "Błąd $sql. " 
            . mysqli_error($conn);
    }

    mysqli_close($conn);


?>