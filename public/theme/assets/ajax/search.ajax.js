

$('#search').on('keyup', function()
{
  $value = $(this).val();

  if($value)
  {
    $('#data').hide()
    $('#contentSearch').show()
  }
  else
  {
    $('#data').show()
    $('#contentSearch').hide()
  }

  $.ajax
  ({
      type:'get',
    //   url:'{{URL::to('search')}}',
      url: '/search',
      data:{'search':$value},

      success:function(data)
      {
        
        $('#contentSearch').html(data);
      },
      error:function(data)
      {
        
        $('#contentSearch').html(data);
      }
  });

})