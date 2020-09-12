<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Form </title>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-6">
					<form action="connect.php" method="post">
						<div class="form-group">
							<label for="name">Full Name:</label>
							<input type="text" name="fullname" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label for="phone">Mobile Number:</label>
							<input type="tel" class="form-control" name="phone-number" required>
						</div>
						<div class="form-group">
							<label for="plans">Plans:</label><br>
							<select name="plans" required>
								<option value="">None</option>
								<option value="">Standard -- 2000 for Monthly</option>
								<option value="">Advanced -- 4000 for 4 months</option>
								<option value="">Pro -- 6000 for 6 Months</option>
							</select>
						</div>
						<button class="btn btn-info" name="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
</html>