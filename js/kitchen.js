$(document).ready(function(){

function item_price(item_name , price){
    document.getElementById('item_name').value = item_name;
    document.getElementById('price').value = price;

}
    //for clicking the checkboxes
    $("#checkbox1").click(function(e){
            item_price('Kitchen Knife', 100.00);
    });

    $("#checkbox2").click(function(e){
            item_price('Tongs', 150.00);
    });

    $("#checkbox3").click(function(e){
            item_price('Pepper Grinder', 200.00);
    });

    $("#checkbox4").click(function(e){
            item_price('Kitchen Scissors', 250.00);
    });

    $("#checkbox5").click(function(e){
            item_price('Whisk', 50.00);
        
    });

    $("#checkbox6").click(function(e){
        item_price('Measuring Cup', 150.00);
    });

    $("#checkbox7").click(function(e){
        item_price('Grater', 250.00);
    });

    $("#checkbox8").click(function(e){
      
        item_price('Cork Screw', 80.00);
    });

    $("#checkbox9").click(function(e){
         item_price('Strainer', 150.00);
    });

    $("#checkbox10").click(function(e){
         item_price('Kitchen Bowl', 250.00);
    });

    $("#checkbox11").click(function(e){
         item_price('Frying Pan', 150.00);
    });

    $("#checkbox12").click(function(e){
         item_price('Oven', 850.00);
    });

    $("#checkbox13").click(function(e){
        item_price('Deep Fryer', 750.00);
    });

    $("#checkbox14").click(function(e){
         item_price('Bread Toaster', 750.00);
    });

    $("#checkbox15").click(function(e){
         item_price('Grinder', 250.00);
    });

    $("#checkbox16").click(function(e){
         item_price('Slotted Spoon', 150.00);
    });

    $("#checkbox17").click(function(e){
         item_price('Spatula', 150.00);
    });

    $("#checkbox18").click(function(e){
         item_price('Cutting Board', 200.00);
    });

    $("#checkbox19").click(function(e){
         item_price('Rolling Pin', 150.00);
    });

    $("#checkbox20").click(function(e){
         item_price('Slicer', 150.00);
    });

      });