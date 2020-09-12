<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>
		<link rel="stylesheet" href="css/style.css">
		<script src="https://kit.fontawesome.com/b37c806e3b.js" crossorigin="anonymous"></script>
		<style>
		.container {
		float: right;
		}
		form{
		background-color: lightgray;
		margin: 5vh 20vw;
		padding: 40px;
		border-radius: 10px;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
		width: 30vw;
		}
		form:hover{
		box-shadow: 0 3px 3px 3px rgba(0,0,0,0.2);
		transition: 0.3s;
		}
		form label:after {
		color: red;
		content: " *";
		}
		.form-group{
			padding: 10px;
			margin: 10px -10px;
		}
		.form-control {
			display:block;
			margin-top: 10px;
			padding: 10px;
			outline: none;
			border:none;
			width: 100%;
			border-radius: 5px;
			font-size: 16px;
			color: gray;
		}
		.btn {
			border-radius: 10px;
			width: 10vw;
			height: 5vh;
			border-color: #ccc;
			font-size: 17px;
			margin-top: 10px;
		}
		</style>
	</head>
	<body>
		<header>
			<h1>JustlnClicks</h1>
			<a href="#"><i class="fas fa-search">Search</i></a>
		</header>
		<main>
			<aside class="left">
				<nav>
					<a href="index.php"><i class="fas fa-home"></i>Home</a>
					<a href="form.php" class="active"><i class="fa fa-wpforms" aria-hidden="true"></i>Form</a>
					<a href="login.php"><i class="fas fa-user"></i>Login/Register</a>
					<a href="stripe.php"><i class="fab fa-stripe-s"></i>Stripe</a>
				</nav>
			</aside>
			<section class="right">
				<div class="container">
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
							<select class="form-control" name="plans" required>
								<option value="">None</option>
								<option value="">Standard -- 2000 for Monthly</option>
								<option value="">Advanced -- 4000 for 4 months</option>
								<option value="">Pro -- 6000 for 6 Months</option>
							</select>
						</div>
						<button class="btn" name="submit">Submit</button>
					</form>
				</div>
			</section>
		</main>
	</body>
</html>