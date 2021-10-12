
$(document).ready(function () {
    var id = $('.teamGender').data('id');
    $.ajax({
        url: "/pointstableData",
        type: "POST",
        data: { "id": id},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
        success: function (response) {
            if (response.status == true) {
                $('#pointsdata').html(response.listhtml);
            } else if (response.status == false) {
                $('#pointsdata').html('<tr> <td colspan="9" style="text-align: center;"> No Record Found </td></tr>');
            }
        },
        error: function (response) {
        }
    });
});


$('.teamGender').click(function () {
    $('.teamGender').find('a').removeClass('ih-pt-act');
     $(this).find('a').addClass('ih-pt-act');
   var id = $(this).data('id');
   $.ajax({
       url: "/pointstableData",
       type: "POST",
       data: { "id": id },
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
       dataType: 'JSON',
       success: function (response) {
           if (response.status == true) {
               $('#pointsdata').html(response.listhtml);
           } else if (response.status == false) {
               $('#pointsdata').html('<tr> <td colspan="9" style="text-align: center;"> No Record Found </td></tr>');
           }
       },
       error: function (response) {
       }
   });
});

$( ".vn-sheduleFilter" ).click(function() {
    $('.filter').show();
    $('body').addClass('fixed');
  });
  $( ".close" ).click(function() {
    $('.filter').hide();
    $('body').removeClass('fixed');
  });   