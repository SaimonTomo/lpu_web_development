<?php
if (isset($_GET['id'])) {
    include 'process/db_connection.php';
    $conn = OpenCon();
    $id = $_GET['id'];
    $sql = "SELECT * FROM `incometbl` JOIN deductiontbl ON incometbl.employee_no = deductiontbl.employee_no JOIN personal_infotbl ON deductiontbl.employee_no = incometbl.employee_no WHERE personal_infotbl.employee_no = $id;";
    $result = mysqli_fetch_assoc($conn->query($sql));
    $employee_no = $result['employee_no'];
    $department = $result['department'];

    $basic_rate_hour = $result['basic_rate_hour'];
    $basic_income_cutoff = $result['basic_income'];
    $basic_num_hours_cutoff = $basic_income_cutoff / $basic_rate_hour;

    $hono_rate_hour = $result['hono_rate_hour'];
    $hono_income_cutoff = $result['hono_income'];
    $hono_num_hours_cutoff = $hono_income_cutoff / $hono_rate_hour;

    $other_rate_hour = $result['other_rate_hour'];
    $other_income_cutoff = $result['other_income'];
    $other_num_hours_cutoff = $other_income_cutoff / $other_rate_hour;

    $firstname = $result['fname'];
    $mname = $result['mname'];
    $surname = $result['lname'];
    $civil_status = $result['civil_status'];
    $emp_status = $result['employee_status'];
    $designation = $result['designation'];
    $qualified_dependents = $result['qualified_dependent_status'];
    $paydate = $result['pay_date'];

    $sss_contri = $result['sss_contri'];
    $philH_contri = $result['philHealth_contri'];
    $pagibig_contri = $result['pagibig_contri'];
    $tax_contri = $result['income_tax_contri'];

    $sss_loan = $result['sss_loan'];
    $pagibig_loan = $result['pagibig_loan'];
    $fs_deposit = $result['faculty_savings_loan'];
    $fs_loan = $result['faculty_savings_deposit'];
    $salary_loan = $result['salary_loan'];
    $other_loans = $result['other_loans'];

    $total_deduct = $result['total_deduction'];
    $gross_income = $result['gross_income'];
    $net_income = $result['net_income'];

    $type = $result['picpath'];


}

if (isset($_GET['search'])) {
    include 'process/db_connection.php';
    $conn = OpenCon();
    $id = $_GET['search'];
    $sql = "SELECT * FROM `personal_infotbl` WHERE employee_no = '$id' OR id = '$id';";
    $result = mysqli_fetch_assoc($conn->query($sql));
    if($result){
        $employee_no = $result['employee_no'];
        $department = $result['department'];
        $firstname = $result['fname'];
        $mname = $result['mname'];
        $surname = $result['lname'];
        $civil_status = $result['civil_status'];
        $emp_status = $result['employee_status'];
        $designation = $result['designation'];
        $qualified_dependents = $result['qualified_dependent_status'];
        $paydate = $result['pay_date'];
        $type = $result['picpath'];
    }
    }