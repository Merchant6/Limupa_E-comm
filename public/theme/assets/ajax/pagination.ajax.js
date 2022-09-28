$(document).ready(function()
{
 $(document).on('click','.page-link' ,function(e)
 {
   e.preventDefault();
   var page = $(this).attr('href').split('page=')[1];
   getMoreUsers(page);
 })
})

function getMoreUsers(page)
{
  $.ajax({
   type: 'GET',
   url: '/view_products?page='+page,
   success: function(data)
   {
     $('#pageCon').html(data);
   }
  })
}