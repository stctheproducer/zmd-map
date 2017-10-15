<?php
$dbc = mysqli_connect('localhost', 'root', '', 'payroll_database')
        or die('Error connecting to mysql server');
$emp_id = 0;
$fname = null;
$lname = null;
$sex = null;
$birth = null;
$maristatus = null;
$address = null;
$mail = null;
$phone = null;
$department = null;
$position = null;

//record update
if (isset($_POST['up_submit'])) {
  $emp_id = $_POST['emp_id'];
  $fname = $_POST['first_name'];
  $lname = $_POST['last_name'];
  $sex = $_POST['gender'];
  $birth = $_POST['dob'];
  $maristatus = $_POST['marital_status'];
  $address = $_POST['address1'];
  $mail = $_POST['email'];
  $phone = $_POST['cellphone'];
  $update_query = "UPDATE employee SET last_name = '$lname', first_name = '$fname', gender = '$sex', dob = '$birth', marital_status = '$maristatus', address1 = '$address', cellphone = '$phone', email = '$mail' WHERE employee_id = $emp_id";
  mysqli_query($dbc, $update_query);
}

//delete record
if (isset($_POST['delete_record'])) {
  $emp_id = $_POST['emp_id'];
  $delete_query = "DELETE FROM employee WHERE employee_id = '$emp_id'";
  mysqli_query($dbc, $delete_query);
}

//add employee
if (isset($_POST['add_employee'])) {
  $fname = $_POST['first_name'];
  $lname = $_POST['last_name'];
  $sex = $_POST['gender'];
  $birth = $_POST['dob'];
  $maristatus = $_POST['marital_status'];
  $address = $_POST['address1'];
  $mail = $_POST['email'];
  $phone = $_POST['cellphone'];
  $department = $_POST['department'];
  $position = $_POST['position'];
  $add_emp_query = "INSERT INTO employee (employee_id, dept_id, position_id, last_name, first_name, gender, dob, marital_status, address1, email, cellphone) VALUES (NULL, '$department', '$position', '$lname', '$fname', '$sex', '$birth', '$maristatus', '$address', '$mail', '$phone')";
  mysqli_query($dbc, $add_emp_query);
}
?>