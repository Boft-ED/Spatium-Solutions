$(document).ready(function () {

    $(".symphol").hover(
        function () {
            $("span.arrow").css({"padding-left": "10px"});
            $("span.button").css({"padding-left": "5px"});
        },

        function () {
            $("span.arrow").css({"padding-left": "0px"});
            $("span.button").css({"padding-left": "0px"});
        }
    );

    $("span.arrow-back").click(function(){

        $("#article2").load('page/main.html');
    });




    $("#food").click(function(){

        $("#article").load('page/food.html');
    });

    $(".symphol").click(function(){

        $("#article").load('page/food.html');
    });

    $("#oxygen").click(function(){

        $("#article").load('page/oxygen.html');
    });

    $("#drinkingWater").click(function(){

        $("#article").load('page/drinkingwater.html');
    });

    $("#waterHygiene").click(function(){

        $("#article").load('page/waterHygiene.html');
    });

    $("#humanCost").click(function(){

        $("#article").load('page/humancost.html');
    });

    $("#systemCost").click(function(){
        $("#article").load('page/systemcost.html');
    });

    $("#fuel").click(function(){
        $("#article").load('page/fuel.html');
    });

    $("#Medic").click(function(){
        $("#article").load('page/medic.html');
    });

});