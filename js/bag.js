$(document).ready(function(){

function item_price(item_name , price){
    document.getElementById('item_name').value = item_name;
    document.getElementById('price').value = price;

}
    //for clicking the checkboxes
    $("#checkbox1").click(function(e){
            item_price('Adidas', 1500.00);
    });

    $("#checkbox2").click(function(e){
            item_price('Puma', 1700.00);
    });

    $("#checkbox3").click(function(e){
            item_price('The North Face', 2000.00);
    });

    $("#checkbox4").click(function(e){
            item_price('Gucci', 60000.00);
    });

    $("#checkbox5").click(function(e){
            item_price('Christian Dior', 70000.00);
        
    });

    $("#checkbox6").click(function(e){
        item_price('Balenciaga', 20000.00);
    });

    $("#checkbox7").click(function(e){
        item_price('Miu Miu', 10000.00);
    });

    $("#checkbox8").click(function(e){
      
        item_price('YSL', 9050.00);
    });

    $("#checkbox9").click(function(e){
         item_price('Louis Vitton', 55000.00);
    });

    $("#checkbox10").click(function(e){
         item_price('Chanel', 12250.00);
    });

    $("#checkbox11").click(function(e){
         item_price('Jacquemus', 5420.00);
    });

    $("#checkbox12").click(function(e){
         item_price('Hermes', 9950.00);
    });

    $("#checkbox13").click(function(e){
        item_price('Coach', 5550.00);
    });

    $("#checkbox14").click(function(e){
         item_price('lauren ralph', 10000.00);
    });

    $("#checkbox15").click(function(e){
         item_price('Tommy Hilfiger', 8000.00);
    });

    $("#checkbox16").click(function(e){
         item_price('DKNY', 5290.00);
    });

    $("#checkbox17").click(function(e){
         item_price('Guess', 4000.00);
    });

    $("#checkbox18").click(function(e){
         item_price('Steven Madden', 6350.00);
    });

    $("#checkbox19").click(function(e){
         item_price('Radley London', 2550.00);
    });

    $("#checkbox20").click(function(e){
         item_price('Dooney and Bourke', 7350.00);
    });

      });