<?php
include 'process/pos_fill.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Point of Sale A</title>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="js/kitchen.js"></script>
 <script src="js/handlechange.js"></script>
 <script src="js/handlenew.js"></script>
 <script src="js/handlediscount.js"></script>
 <link rel="stylesheet" href="css/pos2_styles.css">
 <link rel="stylesheet" href="css/style13.css">
 <script src="js/pos_save.js"></script>
 </head>
    <body>
        <?php
            $item_name ='';
            $discount_amount ='';
            $discounted_amount ='';
            $total_quantity =0.00;  
            $total_discount_amount =0.00;
            $total_discounted_amount =0.00;
            $price ='';
            $quantity = '';
            $cash_given = '';
            $amount_to_pay = '';
            $change = '';
        ?>
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
        <div style="margin-top:30px; margin-bottom:10px">
            <button id="search" type="submit" name="search_btn" class="btn btn-danger" style="padding:5px; margin- bottom:5px; margin-left:278px; width:130px">SEARCH</button>
                <select id="product_option" name="product_option" style="width:250px; height:36px; padding:5px">
                    <option value="TOMO4.php">select product</option>
                    <option value="store.php">PERFUME</option>
                    <option value="TOMO2.php">DRINKS</option>
                    <option value="TOMO3.php">BAG</option>
                    <option value="TOMO5.php">CLOTHES</option>
                </select>
            </div>
            <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip(); 
            });
            </script>
            <script>
                $("select").click(function() {
                    var open = $(this).data("isopen");
                        if(open) {
                            window.location.href = $(this).val()
                        }
                        //set isopen to opposite so next time when use clicked select box
                        //it wont trigger this event
                $(this).data("isopen", !open);
            });
            </script>
        <div class="container pag">
            <form action = 'pagkain.php' method = 'POST'>
                <h1 class="text-center" style="padding-top:10px; padding-bottom:10px; font-weight:bold;">Saimon's Store</h1> 
                <div class="pic_group"> 
                    <div class="pic_option"> 
                        <div>
                            <img src="kitchen/1.jpg" data-toggle="tooltip" data-placement="top" title="Kitchen Knife" alt="Kitchen Knife">
                        </div>
                        <input type="checkbox" id="checkbox1" name="checkbox1">
                        <label for="checkbox1">Kitchen Knife </label> 
                    </div>
                    <div class="pic_option"> 
                        <div>
                            <img src="kitchen/k3.jpg" data-toggle="tooltip" data-placement="top" title="Tongs" alt="Tongs">
                        </div>
                        <input type="checkbox" id="checkbox2" name="checkbox2">
                        <label for="checkbox2">Tongs </label>
                    </div>
                    <div class="pic_option">
                        <div>
                            <img src="kitchen/20.jpg" data-toggle="tooltip" data-placement="top" title="Pepper Grinder" alt="Pepper Grinder">
                        </div>
                        <input type="checkbox" id="checkbox3" name="checkbox3">
                        <label for="checkbox3">Pepper Grinder </label>
                    </div>
                    <div class="pic_option"> 
                        <div>
                            <img src="kitchen/k9.jpg" data-toggle="tooltip" data-placement="top" title="Kitchen Scissors" alt="Kitchen Scissors">
                        </div>
                        <input type="checkbox" id="checkbox4" name="checkbox4">
                        <label for="checkbox4">Kitchen Scissors </label>
                    </div>
                    <div class="pic_option"> 
                        <div>
                            <img src="kitchen/k2.jpg" data-toggle="tooltip" data-placement="top" title="Whisk" alt="Whisk">
                        </div>
                        <input type="checkbox" id="checkbox5" name="checkbox5">
                        <label for="checkbox5">Whisk </label>
                    </div>
                    <div class="pic_option"> 
                        <div>
                            <img src="kitchen/k7.jpg" data-toggle="tooltip" data-placement="top" title="Measuring Cup" alt="Measuring Cup">
                        </div>
                        <input type="checkbox" id="checkbox6" name="checkbox6">
                        <label for="checkbox6">Measuring Cup </label>
                    </div>
                    <div class="pic_option"> 
                        <div>
                            <img src="kitchen/k6.jpg" data-toggle="tooltip" data-placement="top" title="Grater" alt="Grater">
                        </div>
                        <input type="checkbox" id="checkbox7" name="checkbox7">
                        <label for="checkbox7">Grater </label>
                    </div>
                    <div class="pic_option"> 
                        <div>
                            <img src="kitchen/k17.jpg" data-toggle="tooltip" data-placement="top" title="Cork Screw" alt="Cork Screw">
                        </div>
                        <input type="checkbox" id="checkbox8" name="checkbox8">
                        <label for="checkbox8">Cork Screw </label>
                    </div>
                    <div class="pic_option"> 
                        <div>
                            <img src="kitchen/k16.jpg" data-toggle="tooltip" data-placement="top" title="Strainer" alt="Strainer">
                        </div>
                        <input type="checkbox" id="checkbox9" name="checkbox9">
                        <label for="checkbox9">Strainer </label>
                    </div>
                        <div class="pic_option"> 
                        <div>
                            <img src="kitchen/k8.jpg" data-toggle="tooltip" data-placement="top" title="Kitchen Bowl" alt="Kitchen Bowl">
                        </div>
                        <input type="checkbox" id="checkbox10" name="checkbox10">
                        <label for="checkbox10">Kitchen Bowl </label>
                    </div>
                    <div class="pic_option"> 
                        <div>
                            <img src="kitchen/k15.jpg" data-toggle="tooltip" data-placement="top" title="Frying Pan" alt="Frying Pan">
                        </div>
                        <input type="checkbox" id="checkbox11" name="checkbox11">
                        <label for="checkbox11">Frying Pan </label>
                    </div>
                        <div class="pic_option"> 
                         <div>
                            <img src="kitchen/k14.jpg" data-toggle="tooltip" data-placement="top" title="Oven" alt="Oven">
                        </div>
                        <input type="checkbox" id="checkbox12" name="checkbox12">
                        <label for="checkbox12">Oven </label>
                    </div>
                        <div class="pic_option"> 
                        <div>
                            <img src="kitchen/k18.jpg" data-toggle="tooltip" data-placement="top" title="Deep Fryer" alt="Deep Fryer">
                        </div>
                        <input type="checkbox" id="checkbox13" name="checkbox13">
                        <label for="checkbox13">Deep Fryer </label>
                    </div>
                        <div class="pic_option"> 
                        <div>
                            <img src="kitchen/k19.jpg" data-toggle="tooltip" data-placement="top" title="Bread Toaster" alt="Bread Toaster">
                        </div>
                        <input type="checkbox" id="checkbox14" name="checkbox14">
                        <label for="checkbox14">Bread Toaster </label>
                    </div>
                        <div class="pic_option"> 
                        <div>
                            <img src="kitchen/k12.jpg" data-toggle="tooltip" data-placement="top" title="Grinder" alt="Grinder">
                        </div>
                        <input type="checkbox" id="checkbox15" name="checkbox15">
                        <label for="checkbox15">Grinder </label>
                    </div>
                        <div class="pic_option"> 
                        <div>
                            <img src="kitchen/s1.jpg" data-toggle="tooltip" data-placement="top" title="Slotted Spoon" alt="Slotted Spoon">
                        </div>
                        <input type="checkbox" id="checkbox16" name="checkbox16">
                        <label for="checkbox16">Slotted Spoon </label>
                    </div>
                        <div class="pic_option"> 
                        <div>
                            <img src="kitchen/s2.jpg" data-toggle="tooltip" data-placement="top" title="Spatula" alt="Spatula">
                        </div>
                        <input type="checkbox" id="checkbox17" name="checkbox17">
                        <label for="checkbox17">Spatula </label>
                    </div>
                        <div class="pic_option"> 
                        <div>
                            <img src="kitchen/s3.jpg" data-toggle="tooltip" data-placement="top" title="Cutting Board" alt="Cutting Board">
                        </div>
                        <input type="checkbox" id="checkbox18" name="checkbox18">
                        <label for="checkbox18">Cutting Board </label>
                    </div>
                        <div class="pic_option"> 
                        <div>
                            <img src="kitchen/s4.jpg" data-toggle="tooltip" data-placement="top" title="Rolling Pin" alt="Rolling Pin">
                        </div>
                        <input type="checkbox" id="checkbox19" name="checkbox19">
                        <label for="checkbox19">Rolling Pin </label>
                    </div>
                        <div class="pic_option"> 
                        <div>
                            <img src="kitchen/k10.jpg" data-toggle="tooltip" data-placement="top" title="Slicer" alt="Slicer">
                        </div>
                        <input type="checkbox" id="checkbox20" name="checkbox20">
                        <label for="checkbox20">Slicer </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script>
            // JavaScript logic
            function handleCheckbox(clickedCheckbox) {
            // Get all checkboxes with the specified class
            const checkboxes = document.getElementsByClassName('checkbox');

            // Uncheck all checkboxes except the one that was clicked
            for (let i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i] !== clickedCheckbox) {
                checkboxes[i].checked = false;
                }
              }
            }
        </script>
          <div style="width:45%; float:left;">
                <h5 class="text-left" style="padding-top:10px; padding-left:10px; font-weight:bold;margin-left:260px;">Order Details:</h5>
                    <div style="width:100%; text-align:left; padding-left:10px; margin-bottom:50px;margin-left:190px;">
                        <div class="input_box"style="margin-top:20px;" >
                            <span>Name of an Item:</span>
                            <input type="text" style="width:250px" class = 'form-control'sname = "item_name" id="item_name" value="<?php echo $item_name;?>"disabled>
                        </div>
                        <div class="input_box">
                            <span>Quantity:</span>
                            <input type="number" style="width:250px"class = 'form-control'sname="quantity" id="quantity" value="<?php echo $quantity; ?>">
                        </div> 
                        <div class="input_box">
                            <span>Price:</span>
                            <input type="text" style="width:250px"class = 'form-control'sname="price" id="price" value="<?php echo $price; ?>"disabled>
                        </div>
                        <div class="input_box">
                            <span>Discount Amount:</span>
                            <input type="text" style="width:250px"class = 'form-control'sname="dicount_amount" id="discount_amount"value="<?php echo $discount_amount;?>" disabled>
                        </div>
                        <div class="input_box">
                            <span>Discounted Amount:</span>
                            <input type="text" style="width:250px"class = 'form-control'sname="discounted_amount" id="discounted_amount" value="<?php echo $discounted_amount;?>"disabled>
                        </div>
                        <div class="input_box">
                            <span>Total Quantity:</span>
                            <input type="text" style="width:250px"class = 'form-control'sname="total_quantity" id="total_quantity"value="<?php echo $total_quantity;?>"disabled>
                        </div>
                        <div class="input_box">
                            <span>Total Discount Given:</span>
                            <input type="text" style="width:250px"class = 'form-control'sname="total_discount_amount" id="total_discount_amount" value="<?php echo $total_discount_amount;?>"disabled>
                        </div>
                        <div class="input_box">
                            <span>Total Discounted Amount:</span>
                            <input type="text" style="width:250px;" class = 'form-control'sname="total_discounted_amount" id="total_discounted_amount" value="<?php echo $total_discounted_amount;?>" disabled>
                        </div>
                        <div class="input_box">
                            <span>Cash Given:</span>
                            <input type="text" style="width:250px"class = 'form-control'sname="cash_given" id="cash_given" value="<?php echo $cash_given; ?>">
                        </div>
                        <div class="input_box" style="margin-bottom:10px;">
                            <span>Change:</span>
                            <input type="text" style="width:250px"class = 'form-control'sname="change" id="change" value="<?php echo $change; ?>"disabled>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="text-left" style="padding-top:10px; padding-left:10px; font-weight:bold;">Order Discount Options:</h5>
                <div class="container" style="margin-top:15px; margin-bottom:20px;">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="opt_senior_citizen">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="opt_senior_citizen" onclick="handleDiscounts(0.30)">
                        <label class="form-check-label" for="flexRadioDefault1">Senior Citizen</label>
                </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="opt_with_disc_card">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="opt_with_disc_card" onclick="handleDiscounts(0.20)">
                        <label class="form-check-label" for="flexRadioDefault1">With Discount Card</label>
                </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="opt_employee_discount">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="opt_employee_discount" onclick="handleDiscounts(0.15)">
                        <label class="form-check-label" for="flexRadioDefault1">Employee Discount</label>
                </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="opt_no_discount">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="opt_no_discount" onclick="handleDiscounts(0)">
                        <label class="form-check-label" for="flexRadioDefault1">No Discount</label>
                    </div>
                </div>
            </div>
            <button type="button" name="change" class="btn btn-primary" style="height:51px; width:240px; "onclick="handleChange()">CALCULATE CHANGE</button>
            <button type="button" name="new" class="btn btn-danger btn_process" style="height:50px; width:100px;"onclick="handlenew()">NEW</button>
            <button type="button" name='save' id='save' class="btn btn-danger" style="height:50px; width:100px;">SAVE</button>
            <button type="submit" name="close" id="btn_close" class="btn btn-dark btn_process" style="height:50px; width:100px;">CLOSE</button> 
            </div>
            <div style="width:55%; float:left;">
                <div style="text-align:left; margin-bottom:15px; width:90%; margin-top:10px;">
                    <div>
                    <div class="row row-cols-5">
                    <div class="col-3">
                        <button type="button" class="btn btn-primary btn_process" style="height:165px;"onclick="Calculator()">Enter</button>
                    </div>
                    <div class="col-6">
                    <div class="row row-cols-3">
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1"style="height:30px;" onclick="document.getElementById('cash_given').value += '/'">/</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1" style="height:30px;"onclick="document.getElementById('cash_given').value += '*'">*</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1" style="height:30px;"onclick="document.getElementById('cash_given').value += '-'">-</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1" style="height:30px;"onclick="document.getElementById('cash_given').value += '+'">+</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1" style="height:30px;"onclick="document.getElementById('cash_given').value += '9'">9</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1" style="height:30px;"onclick="document.getElementById('cash_given').value += '8'">8</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1" style="height:30px;"onclick="document.getElementById('cash_given').value += '7'">7</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1" style="height:30px;"onclick="document.getElementById('cash_given').value += '6'">6</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1" style="height:30px;"onclick="document.getElementById('cash_given').value += '5'">5</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1" style="height:30px;"onclick="document.getElementById('cash_given').value += '4'">4</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1" style="height:30px;"onclick="document.getElementById('cash_given').value += '3'">3</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1" style="height:30px;"onclick="document.getElementById('cash_given').value += '2'">2</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1" style="height:30px;"onclick="document.getElementById('cash_given').value += '1'">1</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1" style="height:30px;"onclick="document.getElementById('cash_given').value += '0'">0</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-dark w-100 mb-1" style="height:30px;"onclick="document.getElementById('cash_given').value += '.'">.</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div> 
</form>
</div>
</body>
</html>

