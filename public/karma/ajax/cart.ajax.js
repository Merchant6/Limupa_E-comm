
$(document).ready(function () {
    $('.items-count').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.product_count').find('.product_id').val();
        var quantity = $(this).closest('.product_count').find('.qty-input').val();

        data = {
            'quantity':quantity,
            'product_id':product_id,
        };

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var totalH5 = $(`#totalH5-${product_id}`); // select totalH5 element for this product only

        $.ajax({
            url: '/update-cart-data',
            type: 'POST',
            data: data,
            success: function (response) {

                totalH5.text(response.gtprice); // update totalH5 for this product only
                
                var data1 =(function()
                            {
                                price = $('.product-price').text();
                                p_quantity = $('.p-quantity').val();
                                console.log(price*p_quantity)  
                                return {price, p_quantity}

                            });

                            var total_price =  $('.product-price').each(data1().price);
                            var total_quantity = $('.p-quantity').each(data1().p_quantity);

                            // $('.grand-total').text(total_price*total_quantity)

                if(quantity > 0) {
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


