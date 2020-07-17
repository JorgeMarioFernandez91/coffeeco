$(document).ready(function (){
    $("#click").click(function (){
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 2000);
    });

    $('#count1').val('0')
    $('#count2').val('0')
    $('#count3').val('0')

    $('#return').click(function() {
        window.location.href = "index.php"
    });
});


var prod1 = 0;
var prod2 = 0;
var prod3 = 0;

/*
    adds or subtracts 1 from items on the products page
*/
function buttonClick(id, prod_name, count, prod_num) {
    
    if(id.includes("plus")){
        if (id.includes("1")){
            document.getElementById(count).value = ++prod1;
            displayItems(prod_name, prod_num, prod1);
        }
        else if (id.includes("2")){
            document.getElementById(count).value = ++prod2;
            displayItems(prod_name, prod_num, prod2);
        }
        else if (id.includes("3")){
            document.getElementById(count).value = ++prod3;
            displayItems(prod_name, prod_num, prod3);
        }
        
    }
    else if (id.includes("minus")){
        
        if (document.getElementById(count).value == 0){
            
            document.getElementById(count).value = 0;
        }
        else {
            if (id.includes("1")){
                document.getElementById(count).value = --prod1;
                displayItems(prod_name, prod_num, prod1);
            }
            else if (id.includes("2")){
                document.getElementById(count).value = --prod2;
                displayItems(prod_name, prod_num, prod2);
            }
            else if (id.includes("3")){
                document.getElementById(count).value = --prod3;
                displayItems(prod_name, prod_num, prod3);
            }
        }
    }
}


/*
    displays the items selected in the checkout cart
*/
function displayItems(prod_name, prod_num, count) {

    var item = "item_"+ prod_num;
    var total_items = "total_"+ prod_num;
    var price = "price_"+ prod_num;
    var cost = "cost_"+ prod_num;

    var item_price = document.getElementById(cost).innerHTML;
    var total_cost = parseFloat(item_price) * count;

    document.getElementById(item).innerHTML = prod_name;
    document.getElementById(total_items).innerHTML = 'x ' + count;
    document.getElementById(price).innerHTML = "$ " + total_cost;

    var item1_total_cost = document.getElementById('price_prod1').innerHTML;
    var item2_total_cost = document.getElementById('price_prod2').innerHTML;
    var item3_total_cost = document.getElementById('price_prod3').innerHTML;

    if (item1_total_cost == ""){
        item1_total_cost = 0;
    }
    else {
        item1_total_cost = item1_total_cost.replace("$ ","");
    }
    if (item2_total_cost == ""){
        item2_total_cost = 0;
    }
    else {
        item2_total_cost = item2_total_cost.replace("$ ","");
    }
    if (item3_total_cost == ""){
        item3_total_cost = 0;
    }
    else {
        item3_total_cost = item3_total_cost.replace("$ ","");
    }

    var result = parseFloat(item1_total_cost) + parseFloat(item2_total_cost) + parseFloat(item3_total_cost);

    document.getElementById('total_cost').innerHTML = "$ " + result.toFixed(2);
}

/*
    displays the total cost for everything bought
*/
function displayTotalCost(){

    document.getElementById('total_cost').innerHTML
}


/*
    sends checkout cart items to final confirmation screen
*/
function passIt(){
    document.getElementById('data1-price').value = document.getElementById('price_prod1').innerHTML;
    document.getElementById('data2-price').value = document.getElementById('price_prod2').innerHTML;
    document.getElementById('data3-price').value = document.getElementById('price_prod3').innerHTML;
    document.getElementById('data4-price').value = document.getElementById('total_cost').innerHTML;

    document.getElementById('data1-count').value = document.getElementById('total_prod1').innerHTML;
    document.getElementById('data2-count').value = document.getElementById('total_prod2').innerHTML;
    document.getElementById('data3-count').value = document.getElementById('total_prod3').innerHTML;
}








