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
<div class="data">
<?php
	$code=fopen("php.txt","r");
	$data=fgets($code);
	$data1=intval($data);
	if($data==NULL)
	{
	echo "everything is safe";
	}
	else
	{
	fopen("php.txt","w");// only when it reads the value;
	?><p> <?php echo $data ?> alert !! elephant detected </p>
	
	<?php
	$stmt=$db->prepare("INSERT INTO `his` (LOC) VALUES (?)");
	$stmt->bind_param('i',$data1);
	$stmt->execute();
	$stmt->close();
	fclose($code);
	}

?>
</div>
</body>
</html>
