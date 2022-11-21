

<?php 
$Total = 500; $arr=file("flatFile1.txt");
 foreach($arr as $str)
{ list($code,$amount)=explode("|",$str); }
 if (isset($_POST['disCode'])) { $disCode = $_POST['disCode'];
 if ($disCode = $code) 
{ $Total -= $amount; } }
 ?> 
<html> 
<head> 
<title>Voucher</title> 
</head> 
<body> 
<fieldset>
<legend>Cuppon Code</legend>
<div id="disDiv"><form action="dis2.php" method="post">
Cuppon Code:<input type="text" name="disCode"/><br /><br /> <input TYPE="submit" name="submit" value="submit" /></form></div><br /> 
</fieldset>
 </body> </html> 


