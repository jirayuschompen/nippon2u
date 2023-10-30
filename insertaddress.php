<?php
require 'conn.php';
$sql_update="INSERT INTO sendaddress(sendaddress_name,sendaddress_lastname,sendaddress_houseno,sendaddress_alley,sendaddress_street,sendaddress_subdistrict,sendaddress_district,sendaddress_province,sendaddress_postcode,sendaddress_telephone) 
VALUES ('$_POST[custname]','$_POST[custlastname]','$_POST[housenum]','$_POST[alley]','$_POST[street]','$_POST[Subdistrict]','$_POST[district]','$_POST[province]','$_POST[postcode]','$_POST[telnum]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {
    
echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/NIPPON2U/checkout.html");
}

?>