<?php
  $page_title = 'Add Employee';
  include('includes/header.inc.php');
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div class="row">
	    
	    <div class="panel panel-default">
	    	<div class="panel-body form-horizontal">
	    		
	                <div class="form-group">
				        <label for="first_name" class="col-sm-2 control-label">Full name</label>
				        <div class="col-sm-4">
				            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" required="true" />
				        </div>
				        <div class="col-sm-4">
				            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" required="true" />
				        </div>
				    </div>
	                <div class="form-group">
	                    <label for="gender" class="col-sm-2 control-label">Gender</label>
	                    <div class="col-sm-3">
	                        <select class="form-control" id="gender" name="gender" required="true">
	                        	<option value="">-- Select gender --</option>
	                            <option value="Male">Male</option>
	                            <option value="Female">Female</option>
	                            <option value="Other">Other</option>
	                        </select>
	                    </div>
	                    <label for="dob" class="col-sm-1 control-label">Birthday</label>
	                    <div class="col-sm-4">
	                        <input type="date" class="form-control" id="dob" name="dob" required="true">
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="marital_status" class="col-sm-2 control-label">Marital Status</label>
	                    <div class="col-sm-3">
	                        <select class="form-control" id="marital_status" name="marital_status" required="true">
	                        	<option value="">-- Select status --</option>
	                            <option value="Single">Single</option>
	                            <option value="Married">Married</option>
	                            <option value="Widowed">Widowed</option>
	                            <option value="Divoreced">Divoreced</option>
	                        </select>
	                    </div>
	                </div>
	            
	                <div class="form-group">
	                    <label for="department" class="col-sm-2 control-label">Department</label>
	                    <div class="col-sm-3">
	                        <select class="form-control" id="department" name="department" required="true">
	                        	<option value="">-- Select department --</option>
	                        	<?php
	                        	$dept_query = "SELECT dept_id, dept_name FROM dept";
	                        	$result = mysqli_query($dbc, $dept_query);
	                        	while ($row = mysqli_fetch_array($result)) {
	                        	?>
	                            <option value="<?php echo $row['dept_id'] ?>"><?php echo $row['dept_name'] ?></option>
	                            <?php } ?>
	                        </select>
	                    </div>
	                    <label for="position" class="col-sm-1 control-label">Position</label>
	                    <div class="col-sm-4">
	                        <select class="form-control" id="position" name="position" required="true">
	                        	<option value="">-- Select position --</option>
	                            <?php
	                        	$pos_query = "SELECT position_id, job_title FROM position";
	                        	$result = mysqli_query($dbc, $pos_query);
	                        	while ($row = mysqli_fetch_array($result)) {
	                        	?>
	                            <option value="<?php echo $row['position_id'] ?>"><?php echo $row['job_title'] ?></option>
	                            <?php } ?>
	                        </select>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="address1" class="col-sm-2 control-label">Address</label>
	                    <div class="col-sm-8">
	                        <input type="text" class="form-control" id="address1" name="address1" required="true">
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="email" class="col-sm-2 control-label">Email</label>
	                    <div class="col-sm-8">
	                        <input placeholder="Enter your email" type="email" title="Please enter the valid email format (e.g. example@email.com)" x-moz-errormessage="Please enter the valid email format (e.g. example@email.com)" class="form-control" id="email" name="email">
	                    </div>
	                </div> 
	                <div class="form-group">
	                    <label for="cellphone" class="col-sm-2 control-label">Contact</label>
	                    <div class="col-sm-8">
	                        <input type="number" class="form-control" id="cellphone" name="cellphone" required="true" placeholder="09xxxxxxxx">
	                    </div>
	                </div>
					<div class="form-group">
				        <div class="col-sm-10 text-right">
				            <button type="submit" name="add_employee" class="btn btn-primary">
				                <span class="glyphicon glyphicon-plus"></span> Add
				            </button>
				        </div>
				    </div>	            
	        </div>            
	    </div>
	</div>
</form>

<?php include('includes/footer.inc.php') ?>