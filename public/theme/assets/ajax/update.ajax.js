$(document).ready(function()
{

    function UpdateData(form)
    {
        $(form).submit(function(event)
        {
            // Stop form from submitting normally
            event.preventDefault();

            // var formData = new FormData(this);
            var formData = new FormData(this);
            
            var id = $("input[name=id]").val();
            var url = "/update_product/"+id;
            // url = url.replace(':id', id);
            
                
                    
                    $.ajax({
                    type:'POST',
                    enctype: 'multipart/form-data',
                    url: url,
                    data: formData,
                    contentType: false,
                    processData: false,
                    
                    success:function(){
                            alert("Product Updated");
                    }
                    });
        })
    }

    

    for (i = 0; i <= 7; i++) {
        
        UpdateData('#addForm'+[i]);
    }
  
})