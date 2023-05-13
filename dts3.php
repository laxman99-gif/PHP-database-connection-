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
$sql = "SELECT id,firstname,lastname,email FROM tb_newtable";
$result = $conn->query($sql);
if($result->num_rows > 0){
    //output data of each rows
    echo"<table border ='1px'><tr><td><id></td>";
    echo"<td>firstname</td>";
    echo"<td>lastname</td>";
    echo"<td>email</td>";
    echo"</td>";
    while($row = $result->fetch_assoc()){
        echo"<tr>";
        echo"<td>".$row["id"]."</td>","<td>".$row
        ["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row
        ["email"]."</td>";
        echo"</tr>";

    }echo"</tr>";


}else{
    echo "o results";

}
$conn->close();
?>