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
			<a href="#" class="navbar-grand" style="text-decoration: none;"></a>
			
		</div>
		
	</div>
	<div class="container">
		<h3 style="padding-top: 10px;">Register</h3>
		<hr>
		<form name="createUser" method="post" action="querycontroller.php">

			

			<div class="row">

					<div class="col-md-4">
					<div class="form-group">
						<label>name</label>
						<input type="text" name="name" class="form-control" placeholder="name">
						
					</div>
					<br>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="email">
						
					</div>
					<br>
					<div class="form-group">
						<label>Mobile</label>
						<input type="text" name="mob" class="form-control" placeholder="pas">
						
					</div><br>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pas" class="form-control" placeholder="pas">
						
					</div><br>
					<div class="form-group">
						<label>Select Type</label><br>
						<input type="radio" name="type" value="1">User&nbsp;
						<input type="radio" name="type" value="2">Supervisor
					</div>
					<br>
					<div class="form-group">
						<input type="submit" name="submit" value="Register" class="btn btn-primary">
						
					</div>

					
				</div>
				
				
			</div>
		</form>
		
	</div>


</body>
</html>