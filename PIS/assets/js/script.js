$(function(){
    $('.additional-menu > li').click(function(){
        $('.additional-menu > li').removeClass('active');
        $(this).addClass('active');
    });
});
