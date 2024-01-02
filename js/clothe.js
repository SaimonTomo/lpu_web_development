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
            item_price('Calvin Klein', 1550.00);
    });

    $("#checkbox3").click(function(e){
            item_price('Patagonia', 1150.00);
    });

    $("#checkbox4").click(function(e){
            item_price('GAP', 1250.00);
    });

    $("#checkbox5").click(function(e){
            item_price('Gucci', 1350.00);
        
    });

    $("#checkbox6").click(function(e){
        item_price('Dolce & Gabanna', 1150.00);
    });

    $("#checkbox7").click(function(e){
        item_price('Nike', 1350.00);
    });

    $("#checkbox8").click(function(e){
      
        item_price('Christian Dior', 10050.00);
    });

    $("#checkbox9").click(function(e){
         item_price('Under Armour', 1550.00);
    });

    $("#checkbox10").click(function(e){
         item_price('Levis', 1850.00);
    });

    $("#checkbox11").click(function(e){
         item_price('Hermes', 1250.00);
    });

    $("#checkbox12").click(function(e){
         item_price('Versace', 5550.00);
    });

    $("#checkbox13").click(function(e){
        item_price('zara', 1250.00);
    });

    $("#checkbox14").click(function(e){
         item_price('champion', 5950.00);
    });

    $("#checkbox15").click(function(e){
         item_price('uniqlo', 2950.00);
    });

    $("#checkbox16").click(function(e){
         item_price('rolex', 7750.00);
    });

    $("#checkbox17").click(function(e){
         item_price('anta', 2150.00);
    });

    $("#checkbox18").click(function(e){
         item_price('cartier', 6250.00);
    });

    $("#checkbox19").click(function(e){
         item_price('supreme', 6650.00);
    });

    $("#checkbox20").click(function(e){
         item_price('burberry', 2350.00);
    });

      });