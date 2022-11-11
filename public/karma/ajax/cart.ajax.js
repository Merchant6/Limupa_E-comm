

  // Update Cart Data
  $(document).ready(function () {

    $('.items-count').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.product_count').find('.product_id').val();
        var quantity = $(this).closest('.product_count').find('.qty-input').val();
        var thisClick = $(this).closest('.totalAjax');

        data = {

            'quantity':quantity,
            'product_id':product_id,
        };

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/update-cart-data',
            type: 'POST',
            data: data,
            success: function (response) {

                console.log(response.gtprice)
                // $('.totalH5').text(response.gtprice);

                $( "thisClick" ).each(function( i ) {
                    ($('#totalH5'+i).text(response.gtprice))
                })

                if(quantity>0)
                {
                    alertify.set('notifier','position','bottom-right');
                    alertify.success(response.status);
                }
            }
        });
    });

});





//Getting total no. of products from cartLoadAjax() from response
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
            var value = parsed;
            $('.counter').html(value['totalcart']);
        }
    });
}





//Adding product to the cart and notifying user thorugh response.
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


