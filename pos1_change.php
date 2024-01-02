<?php 
 if($_SERVER["REQUEST_METHOD"]=="POST") {
 //getting data from the inputs
 $price = trim($_POST['price']) - 0;
 $quantity = trim($_POST['quantity']) - 0;
 $cash_given = trim($_POST['cash_given'] - 0);
 
 //formulate formula to compute the amount to pay by the customer
 $amount_to_pay = $price * $quantity ;
 $discount_amount = ($price * $quantity) * .10;
 $discounted_amount = $amount_to_pay - $discount_amount;
 $change = $cash_given - $discounted_amount;
 //return results
 echo json_encode([
 'discounted_amount' => $discounted_amount,
 'change' => $change 
 
 ]); 
 }

?>
 