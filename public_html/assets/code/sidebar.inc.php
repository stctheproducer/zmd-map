<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Pay-plus</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="fa fa-user-circle"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-user-secret"></i> My Profile</a></li>
                        <li><a href="index.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>

<!-- /Header -->

<!-- Main -->

<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">

    <ul class="nav nav-pills nav-stacked" style="border-right:1px solid black">
        <!--<li class="nav-header"></li>-->
        <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="fa fa-users"></i> Employees</a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="add_employee.php">Add Employee</li>
                <li><a href="employees.php">Employee Masterlist</a></li>
            </ul>
        </li>
        <li><a href="department.php"><i class="fa fa-building"></i> Departments</a></li>
        <li><a href="positions.php"><i class="fa fa-vcard"></i> Manage Positions</a></li>
        <li><a href="payroll.php"><i class="fa fa-money"></i> Payroll</a></li>
    </ul>
</div><!-- /span-3 -->
<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
    <!-- Right -->
    
    <a href="#"><strong><!--<span class="fa fa-dashboard"></span> --><?php echo $page_title; ?></strong></a>
    <hr>
