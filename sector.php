<?php
$con=mysqli_connect('sl-eu-lon-2-portal.11.dblayer.com:28376','admin','XSWACIEMQDTXPOHK','armoury');
if(!$con)
{
	echo "not connected to server";
}
$secname=$_POST['secname'];
$secid=$_POST['secid'];

$sql="INSERT INTO sector(secname,secid) VALUES('$secname','$secid')";
if(!mysqli_query($con,$sql))
{
	echo "not inserted";
}
else
{
echo "inserted";
}
header("refresh:3; url=sector-db.html");
?>