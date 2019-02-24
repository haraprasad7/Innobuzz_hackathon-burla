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

//echo $db -> host_info;

if($db -> connect_errno>0)
{
	echo "database could not be connected";
	exit; 
}
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

<table margin-left="400px">
<tr><th>Location code</th>
<th>Location</th></tr>
<?php
if($db -> connect_errno>0)
{
	echo "database could not be connected";
	exit; 
}
$sql= "SELECT * FROM location";

$result= $db->query($sql);
if($result)
{
	//echo "yes <br>";
}

while($row=$result->fetch_object())
{
	
	$id=$row->ID;
	$locid=$row->LOCID;
	$name=htmlentities($row->LOCATION,ENT_QUOTES,"UTF-8"); 
	
	
	?>
	<tr><td> <?php echo $locid ?></td><td> <?php echo $name ?></td></tr>
<?php
}
?>
</table>
</body>
</html>
