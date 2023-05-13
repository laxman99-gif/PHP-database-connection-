<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lgic";
//create connection
$conn = mysqli_connect($servername, $username,$password,$dbname);
//check connection
if(!$conn){
    die("Connection failed : " .mysqli_connect_error());
}
$sql = "UPDATE tb_newtable SET firstname = 'Aishwaryaa' WHERE id =1";
if(mysqli_query($conn,$sql)){
    echo "Record Update Sucessfully";
}else{
    "Error Updating Rec0rd".mysqli_error($conn);
}
mysqli_close($conn);
?>
