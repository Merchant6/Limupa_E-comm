$(document).ready(function()
{
  $('#CreateForm').submit(function(e)
    {
        // Stop form from submitting normally
        e.preventDefault();

        // var formData = new FormData(this);
        var formData = new FormData(this);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                type:'POST',
                url: '/UserRegis',
                data: formData,
                contentType: false,
                dataType: 'json',
                processData: false,

                success:function(xhr)
                {
                        
                        $("#msgModal #modal-content").text(xhr.data);
                        $("#msgModal").modal();

                },

                error:function(jqXHR)
                {

                    responseER = jqXHR.responseJSON  
                    $("#msgModal #modal-content").text(responseER.error);
                    $("#msgModal").modal();
                }
                });
    })
})