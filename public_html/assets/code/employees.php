<?php
  $page_title = 'Employee Masterlist';
  include('includes/header.inc.php');
  $query = 'SELECT * FROM employee';
  $result = mysqli_query($dbc, $query);
?>
<div class="row">     
  <div class="col-md-12">
    <div class="table-responsive">
      <table id="mytable" class="table table-bordred table-striped">  
        <thead>           
          <th><input type="checkbox" id="checkall" /></th>
          <th>Full Name</th>
          <th>Gender</th>
          <th>D.O.B</th>
          <th>Marital</th>
          <th>Address</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Edit</th>
          <th>Delete</th>
        </thead>
        
        <tbody>
        <?php
          while($row = mysqli_fetch_array($result)){
            $employee_id = $row['employee_id'];
            $last_name = $row['last_name'];
            $first_name = $row['first_name'];
            $gender = $row['gender'];
            $dob = $row['dob'];
            $marital_status = $row['marital_status'];
            $address1 = $row['address1'];
            $email = $row['email'];
            $cellphone = $row['cellphone'];
        ?>
          <tr>
            <td><input type="checkbox" class="checkthis" /></td>
            <td><?php echo $first_name.' '.$last_name; ?></td>
            <td><?php echo $gender; ?></td>
            <td><?php echo $dob; ?></td>
            <td><?php echo $marital_status; ?></td>
            <td><?php echo $address1; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo '+260'.$row['cellphone']; ?></td>
            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit<?php echo $employee_id; ?>" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete<?php echo $employee_id; ?>" onclick="getData" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
          </tr>

          <!-- edit modal -->
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="modal fade" id="edit<?php echo $employee_id; ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <h4 class="modal-title custom_align" id="Heading">Edit Your Details</h4>
                </div>
                <div class="modal-body">
                <input type="hidden" name="emp_id" value="<?php echo $employee_id; ?>" required="true">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="first_name" class="form-control " type="text" value="<?php echo $first_name; ?>" required="true">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="last_name" class="form-control " type="text" value="<?php echo $last_name; ?>" required="true">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input name="dob" class="form-control " type="date" value="<?php echo $dob; ?>" required="true">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <!--<input name="gender" class="form-control " type="text" value="<?php echo $gender; ?>"> -->
                        <select name="gender" class="form-control" required="true">
                          <option value="Male" <?php if ($gender == 'Male'){
                            echo 'selected="selected"';
                          } ?> >Male</option>
                          <option value="Female" <?php if ($gender == 'Female'){
                            echo 'selected="selected"';
                          } ?> >Female</option>
                          <option value="Other" <?php if ($gender == 'Other'){
                            echo 'selected="selected"';
                          } ?> >Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <select name="marital_status" class="form-control" required="true">
                          <option value="Married" <?php if ($marital_status == 'Married'){
                            echo 'selected="selected"';
                          } ?> >Married</option>
                          <option value="Single" <?php if ($marital_status == 'Single'){
                            echo 'selected="selected"';
                          } ?> >Single</option>
                          <option value="Divorced" <?php if ($marital_status == 'Divorced'){
                            echo 'selected="selected"';
                          } ?> >Divorced</option>
                          <option value="Widowed" <?php if ($marital_status == 'Widowed'){
                            echo 'selected="selected"';
                          } ?> >Widowed</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea name="address1" rows="2" class="form-control" required="true"><?php echo $address1; ?></textarea>
                  </div>
                  <div class="form-group">
                    <input name="email" class="form-control " value="<?php echo $email; ?>" type="email" title="Please enter the valid email format (e.g. example@email.com)" x-moz-errormessage="Please enter the valid email format (e.g. example@email.com)>">
                  </div>
                  <div class="form-group">
                    <input name="cellphone" class="form-control " type="number" value="<?php echo '0'.$cellphone; ?>" required="true">
                  </div>
                </div>
                <div class="modal-footer ">
                  <button type="submit" name="up_submit" class="btn btn-success btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Update</button>
                </div>
              </div>
              <!-- /.modal-content --> 
            </div>
              <!-- /.modal-dialog --> 
          </div>
          </form>
            
          <!-- delete modal -->
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="modal fade" id="delete<?php echo $row['employee_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                </div>
                <div class="modal-body">
                <input type="hidden" name="emp_id" value="<?php echo $employee_id; ?>">
                 
                  <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete <?php echo $first_name.' '.$last_name."'s"; ?> Record?</div>
                </div>
                <div class="modal-footer ">
                  <button type="submit" name="delete_record" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                </div>
              </div>
              <!-- /.modal-content --> 
            </div>
            <!-- /.modal-dialog -->
          </div>
          </form>
          
        <?php } ?> <!-- Ends While Loop -->
        </tbody>
      </table>
      

      <div class="clearfix"></div>
      <ul class="pagination pull-right">
        <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
      </ul>          
    </div>            
  </div>
</div>
<?php include('includes/footer.inc.php') ?>