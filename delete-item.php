<html>
<head>
</head>
<body>

<?php
include 'database/db.php';
$db=new DB();
$id=$_GET["id"];

$s=$db->delete_item($id);
echo $s;
// header("Location :dashbaord.php");
?>
