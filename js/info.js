$(function(){
    var product_price = 298;
    
    $('#total').val(product_price);
    $('.combo-num-max').click(function(){
        var num = parseInt($("#num").val());
        num += 1;
        $("#num").val(num);
        $('#total').val(product_price*num);
    })
    $('.combo-num-min').click(function(){
        var num = parseInt($("#num").val());
        num -= 1;
        if(num <1){
            $("#num").val(1);
            $('#total').val(product_price);
        }else{
            $("#num").val(num);
            $('#total').val(product_price*num);
        }
    })

    

})