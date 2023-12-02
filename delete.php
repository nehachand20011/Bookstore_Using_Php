<?php

include 'conn.php';

if(isset (§_GET[ 'delete'])){

$id=$_GET['delete'];

$sql="delete from 'crud' where id=$id";
$result-mysqli_query ($con, $sq1);
if($result){
// echo "Deleted successfull" ;
header('location:sales.php');

 }else{
    die(mysqli_error ($con))

 }
}
?>