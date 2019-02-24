<?php
$dbConnect=array(
'server'=>'localhost',
'user'=>'root',
'pass'=>'',
'name'=>'ele');

$db=new mysqli($dbConnect['server'],
$dbConnect['user'],
$dbConnect['pass'],
$dbConnect['name']);

?>
<html>

	<head>
	<meta charset="UTF-8">
	<link href="alert.css" rel="stylesheet">

	<title>Elephant Detection Sysytem</title>
    </head> 
<header>
	<div>
		<p id="heading">Elephant Alert Status</p>
	</div>
	<div class="ele1">
		<img src="images/ele.png" width="200px" height="200px" >
	</div>
	<div class="ele2">
		<img src="images/ele.png" width="200px" height="200px" >
	</div>
	<nav class="menu">
		<ul>
			<a href="elephanthome.php"><li>Home</li></a>
			<a href="Ltable.php"><li>Location Codes</li></a>
			<a href="history.php"><li id="lastlink">History</li></a>
		</ul>
	</nav>
</header> 
<body>
<nav class="notify">
<ul>
<li id="head">Send Notification</li>
<li>Notify Railway</li>
<li>Check Train Details</li>
</ul>
</nav>
<body>

<table margin-left="400px">
<tr><th>ID</th>
<th>Location Code</th></tr>
<?php
if($db -> connect_errno>0)
{
	echo "database could not be connected";
	exit; 
}
$sql= "SELECT * FROM his";

$result= $db->query($sql);
if($result)
{
	//echo "yes <br>";
}

while($row=$result->fetch_object())
{
	
	$id=$row->ID;
	$locid=$row->LOC;
	
	
	?>
	<tr><td> <?php echo $id ?></td><td> <?php echo $locid ?></td></tr>
<?php
}
?>
</table>
</body>