<?php

require_once('connect.php');

$conn = connect();

$sql = "UPDATE `dane` SET `compnayurl`='{$_POST['compnayurl']}',`companyname`='{$_POST['companyname']}',
`email`='{$_POST['email']}',`phone`='{$_POST['phone']}',`nip`='{$_POST['nip']}',`regon`='{$_POST['regon']}',`companyadress`='{$_POST['companyadress']}',`companycity`='{$_POST['companycity']}',
`companypostcode`='{$_POST['companypostcode']}',`companyaccountnumber`='{$_POST['companyaccountnumber']}',`guarantee`='{$_POST['guarantee']}',";


if (isset($_POST['guarantee-textarea'])){
    $sql .= "`guarantee_text`='{$_POST['guarantee-textarea']}',";
}else {
    $sql .= "`guarantee_text`=NULL,";
}

$sql .= "`complaint`='{$_POST['complaint']}',";

if (isset($_POST['complaint-textarea'])){
    $sql .= "`complaint_text`='{$_POST['complaint-textarea']}',";
}else {
    $sql .= "`complaint_text`=NULL,";
}

$sql .= "`cash_on_collection`='{$_POST['cash_on_collection']}',`transfer`='{$_POST['transfer']}',`cash_on_delivery`='{$_POST['cash_on_delivery']}',`pay_now`='{$_POST['pay_now']}',
`pay_po`='{$_POST['pay_po']}',`payu`='{$_POST['payu']}',`p24`='{$_POST['p24']}',`tpay`='{$_POST['tpay']}',`eservice`='{$_POST['eservice']}',`imoje`='{$_POST['imoje']}',";

if (isset($_POST['payment-textarea'])){
    $sql .= "`payment_text`='{$_POST['payment-textarea']}',";
}else {
    $sql .= "`payment_text`=NULL,";
}

$sql .= "`self_pickup`='{$_POST['self_pickup']}',";

if (isset($_POST['self_pickup_adress']) && isset($_POST['self_pickup_hours']) && isset($_POST['self_pickup_days'])){
    $sql .= "`self_pickup_adress`='{$_POST['self_pickup_adress']}',`self_pickup_hours`='{$_POST['self_pickup_hours']}',`self_pickup_days`='{$_POST['self_pickup_days']}',";
}else {
    $sql .= "`self_pickup_adress`=NULL,`self_pickup_hours`=NULL,`self_pickup_days`=NULL,";
}

$sql .= "`apaczka`='{$_POST['apaczka']}',`dhl`='{$_POST['dhl']}',`dpd`='{$_POST['dpd']}',`dpd_pickup`='{$_POST['dpd_pickup']}',`fedex`='{$_POST['fedex']}',`furgonetka`='{$_POST['furgonetka']}',
`inpost_kurier`='{$_POST['inpost_kurier']}',`inpost_paczkomaty`='{$_POST['inpost_paczkomaty']}',`orlen`='{$_POST['orlen']}',`poczta_polska`='{$_POST['poczta_polska']}',`ups`='{$_POST['ups']}',
`self_delivery`='{$_POST['self_delivery']}',";

if (isset($_POST['special-transport-textarea'])){
    $sql .= "`special_transport_text`='{$_POST['special-transport-textarea']}',";
}else {
    $sql .= "`special_transport_text`=NULL,";
}

if (isset($_POST['delivery-textarea'])){
    $sql .= "`delivery_text`='{$_POST['delivery-textarea']}'";
}else {
    $sql .= "`delivery_text`=NULL";
}

$sql .= " WHERE id={$_POST['id']};";

if(mysqli_query($conn, $sql)){
    $message = 'Poprawnie edytowano dane firmy';

    echo "<SCRIPT> //not showing me this
    alert('$message')
    window.location.replace('/generator');
    </SCRIPT>";
    

} else{
    echo "Błąd $sql. " 
        . mysqli_error($conn);
}

$conn->close();
