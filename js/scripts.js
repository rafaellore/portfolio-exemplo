$(function(){
    // Aqui vai todo o nosso codigo Javascript
     $('nav.mobile').click(function(){
     // Oque vai acontecer quando o icone da nav for clicado
     var menuList = $('nav.mobile ul');
    if(menuList.is(':hidden') == true){
        var icon = $('.button-mobile i');
        icon.removeClass('fa-bars');
        icon.addClass('fa-times');
        menuList.slideToggle();
     }else{
        var icon = $('.button-mobile i');
        icon.removeClass('fa-times');
        icon.addClass('fa-bars');
        menuList.slideToggle();  
     }
     })
})