<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
	<div class="navbar navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-grand" style="text-decoration: none;">LogIn</a>
			
		</div>
		
	</div>
	<div class="container">
		<h3 style="padding-top: 10px;">LogIn</h3>
		<hr>
		<form name="createUser" method="post" action="querycontroller.php">

			

			<div class="row">

					<div class="col-md-4">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="uname" class="form-control" placeholder="Username">
						
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control" placeholder="Password">
						
					</div>
					
					<br>
					<div class="form-group">
						<a href=""><input type="submit" name="login" value="LogIn" class="btn btn-primary"></a>
						
					</div>

					
				</div>
				
				
			</div>
		</form>
		
	</div>


</body>
</html>