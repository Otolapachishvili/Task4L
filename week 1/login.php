<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container  card">
		<form method="POST" action="check_login.php">
		  <div class="form-group">
		    <label for="exampleInputEmail1">name</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name">
		    
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>