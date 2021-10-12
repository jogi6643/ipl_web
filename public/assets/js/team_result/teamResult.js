$(function () {
    $.ajax({
        url: "/team-result-data",
        type: "POST",
        // data: { "id": id },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
        success: function (response) {
            if (response.status == true) {
                $('.bannerDiv').html(response.bannerhtml);

                
                if ($('.ap-overs-slider').length > 0) {
                    $('.ap-overs-slider').slick({
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: false,
                        speed: 1000, 
                        responsive: [
                            {
                                breakpoint: 950,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1,

                                }
                            },
                            {
                                breakpoint: 700,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,

                                }
                            },

                        ]

                    });
                }
            } else if (response.status == false) {
                $('.bannerDiv').html('<tr> <td colspan="9" style="text-align: center;"> No Record Found </td></tr>');
            }
        },
        error: function (response) {
        }
    });
});