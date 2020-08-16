let top_tie_height
let header_height
let open_menu_href
let dashboard_title_height

$(function(){
    $('.humb').click(function(){
        navShow($('.humb'));
    });


    if (window.matchMedia( '(max-width: 578px)' ).matches) {
        addFixedHeaderMargin();
        $(window).scroll(function(){
            if($(this).scrollTop() > 500){
                $('.header-top').css('margin-top',0);
                $('.header-top').addClass('fixed');
            }else{
                $('.header-top').css('margin-top',top_tie_height);
                $('.header-top').removeClass('fixed');
            }
        });
    }

    //global-nav open
    $('.user-tab').click(function()
    {
        if($(this).hasClass('on')==false){
            $('.user-link').slideDown('fast');
            $(this).addClass('on');
        }else{
            $('.user-link').slideUp('fast');
            $(this).removeClass('on');
        }
    })

    
    // dashboard-menu
    if (window.matchMedia( '(max-width: 1200px)' ).matches) {

        // 位置設定
        $('.pages-main').css('margin-top',header_height+top_tie_height);
        dashboard_title_height=$('.dashboard-title-wrap').height();
        $('.dash-aside').css('top',dashboard_title_height);
        
        // 開閉
        $('.dash-humb').click(function(){
            if($(this).hasClass('opened')==true){
                $('.dash-aside').hide('fast');
                $(this).removeClass('opened');
                $('.over').hide();
            }else{
                $('.dash-aside').show('fast');
                $(this).addClass('opened');
                $('.over').show();
            }
            return false;
        })

    }

    $('.open-menu a').click(function(){
        open_menu_href = $(this).attr('href');
        if($(this).hasClass('opened')==true){
            $(this).find('.close-icon').addClass('closed');
            $(this).find('.open-icon').removeClass('closed');
            $(this).removeClass('opened');
        }else{
            $(this).find('.close-icon').removeClass('closed');
            $(this).find('.open-icon').addClass('closed');
            $(this).addClass('opened');
        }
        dashboardMenuOpen(open_menu_href);
        return false;
    })

});

function navShow(target){
    if(target.hasClass('active')==false){
        $('#sp-global-nav').show('fast');
        $('#sp-global-nav').addClass('show');
        $('.header-top').css('margin-top',0);
        $('.header-top').addClass('humb-fixed');
        target.addClass('active');
    }else{
        $('#sp-global-nav').hide('fast');
        $('#sp-global-nav').removeClass('show');
        $('.header-top').removeClass('humb-fixed');
        target.removeClass('active');
        $(window).scroll(function(){
            if($(this).scrollTop() < 500){
                $('.header-top').css('margin-top',top_tie_height);
            }
        });
    }
}

function addFixedHeaderMargin(){
    top_tie_height = $('.header-tie').height();
    header_height = $('.header-top').height();
    $('.header-top').css('margin-top',top_tie_height);
    $('.swiper1').css('margin-top',header_height+20);
}

function dashboardMenuOpen(target){
    if($(target).hasClass('closed')==true){
        $(target).slideDown('fast');
        $(target).removeClass('closed');
    }else{
        $(target).slideUp('fast');
        $(target).addClass('closed');
    }
}