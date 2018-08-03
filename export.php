<?php
$con=mysqli_connect('sl-eu-lon-2-portal.11.dblayer.com:28376','admin','XSWACIEMQDTXPOHK','armoury');
if(!$con)
{
	echo "not connected to server";
}

$wname=$_POST['wname'];
$wid=$_POST['wid'];
$origin=$_POST['origin'];
$type=$_POST['type'];
$range=$_POST['distance'];
$sectorid=$_POST['sectorid'];


$sql="INSERT INTO export(wname,wid,origin,type,distance,sectorid) VALUES('$wname','$wid','$origin','$type','$range','$sectorid')";
if(!mysqli_query($con,$sql))
{
	echo "not inserted";
}
else
{
echo "inserted";
}
header("refresh:3; url=exporting.html");
?>