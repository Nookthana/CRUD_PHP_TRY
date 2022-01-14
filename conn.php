<?php
$DB_host="localhost\SQLEXPRESS";
$DB_name="Customer";
$DB_user="";
$DB_pass="";

try {
    $conn= new PDO("sqlsrv:server=$DB_host; Database=$DB_name",$DB_user,$DB_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   // echo "conn done";
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>