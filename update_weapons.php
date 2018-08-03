<?php
$con=mysqli_connect('sl-eu-lon-2-portal.11.dblayer.com:28376','admin','XSWACIEMQDTXPOHK','armoury');
if(isset($_POST['wid'])){
$newname=$_POST['wname'];
$usn=$_POST['wid'];
$query = "UPDATE `weapons` SET `wname`=\"$newname\" WHERE `WID`=\"$usn\"";
$result = mysqli_query($con,$query);
header('Location: weapons1.php');
}
?>