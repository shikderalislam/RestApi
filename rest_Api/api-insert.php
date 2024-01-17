<?php


header('Content-type:application/json');
header('Acess-Control-Allow-Origin: *');
header('Acess-Control-Allow-Methods:POST');
header('Acess-Control-Allow-headers:Acess-Control-Allow-header,Content-type,Acess-Control-Allow-Methods,Autoraization,X-requested-with');
include "config.php";
$data=json_decode(file_get_contents("php://input"),true);

$name=$data['sname'];
$address=$data['saddress'];

$sql="INSERT INTO student_info(Name, Address) VALUES({'$name'},{'$address'})";//add sql command to add values in coloumn


if(mysqli_query($conn,$sql))
{
    echo json_encode(array('message'=>'Students record inserted','status'=>true));

}
else{
    echo json_encode(array('message'=>'no record found','status'=>false));

}

?>
