





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Account Information</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/emp_info_save.js?v.3"></script>
<link rel="stylesheet" href="css/employee_registration.css?v.3">
<link rel="stylesheet" href="css/style11.css">
<link rel="stylesheet" href="css/style13.css">

</head>
<body>
    <!-- Header -->
    <header>
        <h1></h1> 
        <!-- Navigation menu or user profile information can go here -->
    </header>

    <!-- Sidebar -->
    <aside>
        <ul>
            <li><a href="adminpage.php">Home</a></li>
            <li><a href="Employee_registration_save.php">Employee Registration</a></li>
            <li><a href="employee_report.php">Employee Report</li>
            <li><a href="payroll.php">Payroll</a></li>
            <li><a href="payroll_report.php">Payroll Report</a></li>
            <li><a href="http://localhost/lpu_web_development/store.php">POS</a></li>
            <li><a href="sales_report.php">POS Sales Report</a></li>
            <li><a href="useraccount.php">User Account</a></li>
            <li><a href="login.php">Logout</a></li>

            <!-- Add more menu items as needed -->
        </ul>
    </aside>

    <div class="container">
        <div class="page_border">
            <form id="pic-upload" class="a-form" enctype="multipart/form-data"method="post" width='840'>
            <h1 style="text-align:center; margin-bottom:30px; font-size:47px; font-family:Algerian; color:black"><b>User Account Information </b></h1>
        <div class="a-form-group mt-3" style="float:left; clear:block; width:20%;" >
        <div id="pic-box" style='width:170px; height:150px; overflow:hidden; margin-top:7px; margin-left:5px; background:none; border:thin solid #d3d3d3'></div>
            <input type="file" style="margin-top:10px; text-align:center;" id="uploadfile" name="uploadfile" value=""/>
        </div>
    </form>
            <form id="form_employee_registration_save" class="a-form" action=""method="post" width='840'>
        <div class="a-form-group mt-3" width='480'>
        <div class="a-fields-group mt-0">
        <div class="form-row">
        <div class="form-group col">
            <label for="fname" class="mb-0 control-label">First Name</label>
            <input type="text" class="form-control mt-0"name="fname" id="fname" value="">
        </div>
        <div class="form-group col-3">
            <label for="mname" class="mb-0">Middle Name</label>
            <input type="text" class="form-control mt-0"name="mname" id="mname">
        </div>
        <div class="form-group col">
            <label for="lname" class="mb-0 control-label">Last Name</label>
            <input type="text" class="form-control mt-0"name="lname" id="lname" value="">
        </div>
        <div class="form-group col-2">
            <label for="suffix" class="mb-0">Suffix</label>
            <input type="text" class="form-control mt-0"name="suffix" id="suffix">
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col">
            <label for="fname" class="mb-0 control-label">Designation</label>
            <input type="text" class="form-control mt-0"name="fname" id="fname" value="">
        </div>
        <div class="form-group col-3">
            <label for="mname" class="mb-0">Username</label>
            <input type="text" class="form-control mt-0"name="mname" id="mname">
        </div>
        <div class="form-group col">
            <label for="lname" class="mb-0 control-label">Password</label>
            <input type="text" class="form-control mt-0"name="lname" id="lname" value="">
        </div>
        <div class="form-group col-2">
            <label for="suffix" class="mb-0">Confirm Pass</label>
            <input type="text" class="form-control mt-0"name="suffix" id="suffix">
        </div>
        </div>
            <div class="a-fields-group mt-0">
            <div class="form-row">
            <div class="form-group col">
            <label for="fname" class="mb-0 control-label">Employee Number</label>
            <input type="text" class="form-control mt-0"name="department" id="department" value="">
        </div>
            <div class="form-group col-3">
            <label for="mname" class="mb-0">Status</label>
            <input type="text" class="form-control mt-0"name="designation" id="designation">
        </div>
        
        </div>
        </div>
        
            <button type="submit" class="btn btn-primary" id = "savebtn"name="savebtn" style="width:130px;">Update</button>
            <button type="submit" class="btn btn-primary" id = "deletebtn"name="deletebtn" style="width:130px;">Delete</button>
            <button type="reset" class="btn btn-outline-secondary" id = "cancelbtn" name="cancelbtn" style="width:130px;">Cancel</button>
</form>
</div>
</div>
</body>
</html>
