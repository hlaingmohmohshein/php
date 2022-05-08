$(document).ready(function () {
    fetch_brand();
    function fetch_brand() {
        $.ajax({
            type:'POST',
            url:'includes/process.php',
            data:{getBrand:1},
            success:function(data){
                var option="<option value=''>Choose Paymethod.</option>";
                $('#select_brand').html(option+data);
            }
        });
    }
    fetch_category();
    function fetch_category(){
        $.ajax({
            type:"POST",
            url:"includes/process.php",
            data:{getCategory:1},
            success:function(data){
                var option="<option value=''>Choose Category.</option>";
                $('#select_category').html(option+data);
            }
        });
    }

    $("#category_form_create").on("submit", function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        var category_name = $('#category_name').val();
        // alert(category_name);
        $.ajax({
            type: "POST",
            url: "includes/process.php",
            data: $("#category_form_create").serialize(),
            success: function (response) {
                alert(response);
                location.reload();
            }
        });

        return false;

    });
    $('#product_form_create').on('submit',function(e){
       
       $.ajax({
        type:"POST",
        url:"includes/process.php",
        data:$("#product_form_create").serialize(),
        success:function(data){
            console.log("data");
            console.log(data);
            alert(data);
            
        }
       });
    });

});
