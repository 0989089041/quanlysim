<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View dau tien</title>
</head>
<style>
	h3 {
		text-align: center;
		color: red;
	}
</style>
<body>
	<h3> Dữ liệu các số điện thoại bán sim </h3>
	<ul>
		<?php foreach ($dssdt as $key): ?>
			<li> <?php echo $key ; ?> </li>
		<?php endforeach ?>
	</ul>
</body>
</html>