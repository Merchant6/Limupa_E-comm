$(document).ready(function()
{


        // document.getElementById("editor").autofocus;


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
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          },
                    type:'POST',
                    enctype: 'multipart/form-data',
                    url: url,
                    data: formData,
                    contentType: false,
                    dataType: 'json',
                    processData: false,

                    success:function(xhr)
                    {
                            // alert("Product Updated");
                            $("#msgModal #modal-content").text(xhr.data);
                            $("#msgModal").modal();

                    },

                    error:function(jqXHR)
                    {

                        responseER = jqXHR.responseJSON
                        
                        $("#msgModal #modal-content").text(responseER.error);
                        $("#msgModal").modal();
                        // console.log(JSON.stringify(xhr.error));
                    }
                    });
        })
    }



    for (i = 0; i <= 7; i++) {

        UpdateData('#addForm'+[i]);
    }







})