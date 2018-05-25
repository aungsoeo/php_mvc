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
				<div>
					<a href="http://localhost/mvc/new_user">
					<button>Add New</button>
				</a>
				</div>
				<br>
				<table border="1px;" style="padding: 5px;" width="550px;">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Created Date</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							foreach ($data as $user) {
								echo '
								 	<tr>
								 		<td>
								 			'.$user['id'].'
								 		</td>
								 		<td>
								 			'.$user['name'].'
								 		</td>
								 		<td>
								 			'.$user['created_at'].'
								 		</td>
								 		<td>
								 			<a href="http://localhost/mvc/del?id='.$user['id'].'">
								    		&nbsp;&nbsp;Del</a>&nbsp;&nbsp;
								    		<a href="http://localhost/mvc/del?id='.$user['id'].'">
								    		Edit</a>
								 		</td>

								 	</tr>
								';
							}
						?>
					</tbody>
				</table>
			</div>
			<div class="foot">&copy; 2018</div>
		</div>
	</body>
</html>
