    var twoDaysFromNow = (new Date().getTime() / 1000) + (86400 * 2) + 1;
    var flipdown = new FlipDown(twoDaysFromNow,{
    theme: 'light'
    });
    flipdown.start();

    $('.common-mob-tab-sched').on('click', function(){
        if(!($(this).hasClass('active'))){
            var tealRel = $(this).attr('rel')
            $('.common-mob-tab-sched').removeClass('active');
            $('.ap-team-tab-common').removeClass('active');
            $(this).addClass('active');
            $(this).parent().parent().find('#'+tealRel).addClass('active');

        }

    });
   

