<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>Pagination with CodeIgniter</title>
</head>
<body>
<div id="container">
	<h1 style="text-align:center">Page Navigation in PHP</h1>
	<table width="400" border="1" align="center">
		<tr>
			<td width="100" bgcolor="#CCCCCC"><p>Country ID</p></td>
			<td width="300" bgcolor="#CCCCCC">Country</td>
		</tr>
		<h1 style="text-align:center">Countries</h1>
			<div id="body">
 
		<?php
		foreach($results as $data) {
		?>
		<tr>
			<td><?php echo $data->ProductID ?></td>
			<td><?php echo $data->ProductName ?></td>
		</tr>
		<?php
		}
		?>
	</table>
	<div style="text-align:center"><?php echo $links; ?></div>
</div>
</div>
</body>
</html>	