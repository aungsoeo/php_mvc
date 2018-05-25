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
			<h1>User List</h1>
			<div class="content">
				<h2>New User</h2>
				<form action="http://localhost/mvc/user_add" method="post">
					<input type="text" name ="name" placeholder="User name">
					<input type="submit" value="Add">
				</form>
				<br>
				<a href="http://localhost/mvc/">User List</a>
			</div>
			<div class="foot">&copy; 2018</div>
		</div>
	</body>
</html>
