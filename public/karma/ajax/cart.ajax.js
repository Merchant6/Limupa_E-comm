
$(document).ready(function () {
    cartload();
});

function cartload()
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/load-cart-data',
        method: "GET",
        success: function (response) {
            $('.counter').html('');
            var parsed = jQuery.parseJSON(response)
            var value = parsed; //Single Data Viewing
            $('.counter').html(value['totalcart']);
        }
    });
}






$(document).ready(function()
{
    $('.addToCart').click(function (e)
    {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var product_id = $(this).closest('.product_data').find('.product_id').val();
        var quantity = $(this).closest('.product_data').find('.qty-input').val();
       
        $.ajax({
            url:"/add-to-cart",
            method:"POST",
            data:
            {
                'quantity': quantity,
                'product_id':product_id,
            },
            success: function (response) {
                
                alertify.set('notifier', 'position', 'bottom-right');
                alertify.success(response.status, 5);
               cartload(); 
            },
        })
    })
})