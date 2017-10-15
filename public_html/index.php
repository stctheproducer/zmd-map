<?php
  $page_title = 'Readings';
  include('includes/header.inc.php');
?>

<div class="container">
	<div class="row">
		<div class="col sm-8">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<div class="form-group">
					<label for="max_temp">Maximum Temperature</label>
					<input type="text" name="max_temp" id="max_temp" class="form-control" placeholder="Max Temperature">
				</div>

				<div class="form-group">
					<label for="min_temp">Minimum Temperature</label>
					<input type="text" name="min_temp" id="" class="form-control" placeholder="Min Temperature">
				</div>


				<div class="form-group">
					<label for="pressure">Pressure</label>
					<input type="text" name="pressure" id="pressure" class="form-control" placeholder="Air Pressure">
				</div>

				<div class="form-group">
					<label for="rain">Rain</label>
					<input type="text" name="rain" id="rain" class="form-control" placeholder="Rainfall">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Done</button>
				</div>

			</form>
		</div>
	</div>
</div>

<?php include('includes/footer.inc.php'); ?>