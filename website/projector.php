<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Projector</title>
</head>

<body>
</body>

<?php

include("connect.php");

$id = $_GET["id"];

if($id==0){
	$sql = "UPDATE materials SET projector = projector - 1 WHERE id = 0;";
}
else{
	$sql = "UPDATE materials SET projector = projector + 1 WHERE id = 0;";
}

$result = mysql_query($sql);
if (!$result) {
    die ('Etwas stimmte mit dem Query nicht: '.$db->error);
}

if($id==0){
	echo 'The projector is lent!';
}
else{
	echo 'The projector is returned!';
}

?>

</html>