$(document).ready(function () {
    addRow();
    $("#addrow").click(function () {
        addRow();
    });
    $("#removerow").click(function () {
        $('table tr:last').remove();

    });
    function addRow() {
        $.ajax({
            type: "POST",
            url: "includes/process.php",
            data: { getItemName: 1 },
            success: function (data) {
                console.log(data);
                var n = 0;
                $("#item_invoice").append(data);
                $(".number").each(function () {
                    $(this).html(++n);
                });
            }
        });
    }
    //  $('.item_option').change(function(){
    //      alert("jelo");
    //     var value=$(".item_option option:selected").val();
    //     alert(value);
    //  });
    //  $(".item_option").change(function(){
    //     alert("The text has been changed.");
    //   });
    //   $(".item_option").change(function(){

    //     var selValue = $(this).val();

    //     alert(selValue);

    // });
    $('#item_invoice').on('change', '.item_option', function () {
        var pId = $(this).val();
        var tr = $(this).parent().parent();
        // tr.css({"color": "red", "border": "2px solid red"});
        // tr.find('.total_quantity').css({"color": "green", "border": "2px solid green"});
        // console.log(tr);
        $.ajax({
            type: "POST",
            url: "includes/process.php",
            data: { getPriceAndQty: 1, id: pId },
            dataType: 'JSON',
            success: function (data) {
                // tr.css('backgorunt-color','red');
                // alert(data['pId']);
                console.log(data);
                tr.find(".total_quantity").val(data["product_stock"]);
                tr.find(".price").val(data["product_price"]);
                tr.find('.quantity').val('1');
                // tr.find('.total_price').val('1');
                tr.find('.total_price').html(tr.find(".price").val() * tr.find('.quantity').val());
                // tr.find(".pId").val(data["pId"]);
            }
        });

    });
    $('#item_invoice').on('keyup', '.quantity', function () {
        var key = $(this).val();
        // alert(isNaN(key));
        alert("Enter Key"+key);
        // alert('Hello');
        // alert(tr.find(".price").val());
        var tr = $(this).parent().parent();
        alert(tr.find("Total amount" + ".total_quantity").val());
        if (isNaN(key)) {
            alert("Sorry ! You need to input valid number!");
            // tr.find('.total_price').html(tr.find(".price").val() * tr.find('.quantity').val());
            tr.find('.quantity').val('1');
            return false;
        }else{
            if(key> tr.find(".total_quantity").val()){
                alert("Sorry ! This too much not available!");
                tr.find('.quantity').val('1');
                tr.find('.total_price').html(tr.find(".price").val() * tr.find('.quantity').val());
            }else{
                alert("Final");
                tr.find('.total_price').html(tr.find(".price").val() * tr.find('.quantity').val());
            }
        }
         
         
    });
});