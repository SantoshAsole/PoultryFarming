
<?php

include_once('connection.php');



	$reg = $db->get_results("SELECT * FROM `register` where  type=1");
	// $db->debug();

 ?>

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
		<h3 style="padding-top: 10px;">Welcome</h3>
		<hr>
		
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<td>
						SrNo
					</td>
					<td>
						Name
					</td>
					<td>
						Email
					</td>
					<td>
						Mobile
						
					</td>
					<!-- <td>
						Date
					</td> -->
				</tr>
			</thead>
			<tbody>
				 <?php 

					$i=0;
					foreach ($reg as $data) {
				    $i++;
				    ?>
						<tr class="gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $data->name; ?></td>
							<td><?php echo $data->email; ?></td>
							<td><?php echo $data->mob; ?></td>
						</tr>
					<?php } ?>
			</tbody>
		</table>
	</div>


</body>
</html>