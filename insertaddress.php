<?php
require 'conn.php';
$sql_update="INSERT INTO sendaddress(addresscusname,addresscuslastnname,addresscushousenum,addresscusalley,addresscusstreet,addresscusSubdistrict,
addresscusdistrict,addresscusprovince,addresscuspostcode,addresscustelnum) 

VALUES ('$_POST[sendaddress_name]','$_POST[sendaddress_lastname]','$_POST[sendaddress_houseno]','$_POST[sendaddress_alley]','$_POST[sendaddress_street]','$_POST[sendaddress_subdistrict]',
'$_POST[sendaddress_district]','$_POST[sendaddress_province]','$_POST[sendaddress_postcode]','$_POST[sendaddress_telephone]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {
    
echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/NIPPON2U/checkout.html");
}

?>