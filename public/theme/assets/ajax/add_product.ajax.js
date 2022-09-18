 $(document).ready(function()
 {
       $("#addForm").submit(function(event)
       {
           
           // Store all data from form as object;
           var formData = new FormData(this);

           $.ajaxSetup({
            headers: 
                {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
        
           // AJAX implementation error:function() return errors without page reload.
           $.ajax(
           {
             url: '/save_product',
             type: "POST",
             processData:false,  
             contentType:false,
             cache:false,
            //  dataType: 'json',
             data:formData,

             success: function()
             {

                success = 'Product added successfully, navigate to view products to inspect it. Redirecting to View Products, please wait'
               
                        $("#error").append("<p class='text-info'>"+success+"</p>")
                        
                       // Hide Errors after 15 seconds with a fadeout animation
                        $("#error").show().delay(3500).fadeOut(function()
                        {
                          window.location.assign("/view_products")
                        });
             },
            
             
             error:function(xhr, status, error) 
                 {
                    // Errors from the XML Http Request JSON Response
                        responseER = xhr.responseJSON;
                        
                    // console.log(responseER);
                     $("#error").html(" ");
                     // For Each loop for printing errors from the response 
                     $.each(responseER.errors, function (key, item) 
                     {
                        console.log(item);
                        $("#error").append("<li class='text-danger'>"+item+"</li>")
                        
                       // Hide Errors after 15 seconds with a fadeout animation
                        $("#error").show().delay(15000).fadeOut();
                       
                       
                        
                     });
                  
                     
                }
                
                 
           });  
           // Stop form from submitting normally
           event.preventDefault();
         
       });
       
       
   });

