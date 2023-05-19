<!DOCTYPE html>
<html>
<head>
	<title>create-user</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand">Form</a>
	</div>

</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>name</label>
				<input type="text" name="name" value="" class="form-control">

			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" value="" class="form-control">

			</div>
			<div class="custom-control custom-radio">
				<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
				<label class="custom-control-label" for="customRadio1">Female</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
				<label class="custom-control-label" for="customRadio2">Male</label>
			</div>
			<div class="form-group">
				<button class="btn btn-primary"></button>
				<a href="#" class="btn-secondary btn"></a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
