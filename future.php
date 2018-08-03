<?php
$con=mysqli_connect('sl-eu-lon-2-portal.11.dblayer.com:28376','admin','XSWACIEMQDTXPOHK','armoury');
if(!$con)
{
	echo "not connected to server";
}
$wname=$_POST['wname'];
$wid=$_POST['wid'];
$range=$_POST['distance'];
$secid=$_POST['secid'];
$origin=$_POST['origin'];
$type=$_POST['type'];
$sql="INSERT INTO future(wname,wid,distance,secid,origin,type) VALUES('$wname','$wid','$range','$secid','$origin','$type')";
if(!mysqli_query($con,$sql))
{
	echo "not inserted";
}
else
{
echo "inserted";
}
header("refresh:3; url=future.html");
?>