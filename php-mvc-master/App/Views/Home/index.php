<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP M-V-C</title>
		<style>
		body {
			font-family: arial;
			background: #efefef;
		}
		.wrap {
			width: 600px;
			margin: 20px auto;
			border: 4px solid #ddd;
			background: #fff;
		}
		h1 {
			background: #efefef;
			margin: 0; padding: 8px;
			font-size: 21px;
			text-align: center;
		}
		h2 {
			font-size: 18px;
			margin: 0 0 10px 0;
			padding: 0 0 8px 0;
			border-bottom: 1px solid #ddd;
		}
		.foot {
			font-size: 13px;
			color: #999;
			text-align: center;
			padding: 8px;
			border-top: 1px solid #ddd;
		}
		.content {
			padding: 20px;
		}
		</style>
	</head>
	<body>
		<div class="wrap">
			<h1>Simple PHP MVC with Composer Autoload</h1>
			<div class="content">
				<h2>User List</h2>
				<ol>
					<?php
					foreach ($data as $user) {
					    echo "<li>";
					    echo $user['name'];
					    echo "</li>";}
					?>
				</ol>
				<br>
				<a href="#">New User</a>
			</div>
			<div class="foot">&copy;Simple MVC 2018</div>
		</div>
	</body>
</html>

	


