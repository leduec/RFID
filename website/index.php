<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Materials</title>
</head>

<body>

<?php

include("connect.php");

$sql = "SELECT * FROM `materials` WHERE id = 0";

$result = mysql_query($sql);
if (!$result) {
    die ('Etwas stimmte mit dem Query nicht: '.$db->error);
}
	
$row=mysql_fetch_array($result);

?>

<h1>Office Equipment</h1>

<h2>Consumables</h2>

<table border="0">
  <tr>
    <td><img src="pictures/paperclip.jpg" /></td>
    <td><img src="pictures/pen.jpg" /></td>
    <td><img src="pictures/pad.jpg" /></td>
    <td><img src="pictures/paper.jpg" /></td>
    <td><img src="pictures/stapler.jpg" /></td>
  </tr>
  <tr>
    <td><center><b><?php echo $row['paperclip']; ?></b></center></td>
    <td><center><b><?php echo $row['pen']; ?></b></center></td>
    <td><center><b><?php echo $row['pad']; ?></b></center></td>
    <td><center><b><?php echo $row['paper']; ?></b></center></td>
    <td><center><b><?php echo $row['stapler']; ?></b></center></td>
  </tr>
  <tr>
  	<td><center><a href="paper-clip.php?id=1" target="_blank">Add one</a></center></td>
  	<td><center><a href="pen.php?id=1" target="_blank">Add one</a></center></td>
    <td><center><a href="pad.php?id=1" target="_blank">Add one</a></center></td>
    <td><center><a href="paper.php?id=1" target="_blank">Add one</a></center></td>
    <td><center><a href="stapler.php?id=1" target="_blank">Add one</a></center></td>
  </tr>
</table>

<h2>Lendable</h2>

<table border="0">
  <tr>
    <td><img src="pictures/projector.jpg" /></td>
    <td><img src="pictures/ladder.jpg" /></td>
    <td><img src="pictures/toolbox.jpg" /></td>
    <td><img src="pictures/camera.jpg" /></td>
    <td></td>
  </tr>
  <tr>
    <td><center><b><?php echo $row['projector']; ?></b></center></td>
    <td><center><b><?php echo $row['ladder']; ?></b></center></td>
    <td><center><b><?php echo $row['toolbox']; ?></b></center></td>
    <td><center><b><?php echo $row['camera']; ?></b></center></td>
    <td></td>
  </tr>
</table>

</body>
</html>