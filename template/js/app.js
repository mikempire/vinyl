$(function() {
    
        /* Fixed Header */
    
    let header = $("#header");
    let intro = $("#intro");
    let introH = intro.innerHeight();
    let scrollPos = $(window).scrollTop();
    let nav_cart = $(".nav_cart");
    
    chekScroll(scrollPos, introH);
    chekScroll2(scrollPos, introH);
    
    $(window).on("scroll resize", function(){
        introH = intro.innerHeight();
        scrollPos = $(this).scrollTop();
        
        chekScroll(scrollPos, introH);
        });
    
        $(window).on("scroll resize", function(){
        introH = intro.innerHeight();
        scrollPos = $(this).scrollTop();
        
        chekScroll2(scrollPos, introH);
        });
    
    
        function chekScroll(scrollPos, introH){
        if( scrollPos > introH){
            header.addClass("fixed");
        } else {
            header.removeClass("fixed")
        }
    }
    
        function chekScroll2(scrollPos, introH){
        if( scrollPos > introH){
            nav_cart.addClass("fixed");
        } else {
            nav_cart.removeClass("fixed")
        }
    }
    
        /* Scroll  */
    
//    $("[data-scroll]").on("click", function(event){
//        event.preventDefault();
//        
//        let elementID = $(this).data('scroll');
//        let elementOffset = $(elementID).offset().top;
//        
//        nav.removeClass("show");
//        
//        $("html, body").animate({
//        scrollTop: elementOffset - 110
//        }, 700);
//    });
    
    /* Nav Toggle */
    
        $('.burger').click(function(event) {
        event.preventDefault();
        
        $('.mobMenu').addClass('open');
        $('body').addClass('overflow-hidden');
        $('.overlay').addClass('ok');
        
    });
    
    
        $('.close').click(function(event) {
        event.preventDefault();
    
        $('.mobMenu').removeClass('open');
        $('body').removeClass('overflow-hidden');
        $('.overlay').removeClass('ok');
    });
    
        $('.overlay').on("click", function(event){
        $(this).removeClass('ok');
        $('.mobMenu').removeClass('open');
        $('body').removeClass('overflow-hidden');
    });
    
    /* Magazine */
    
    $('.magazine__link').click(function(event) {
        event.preventDefault();
        
        $('.magazine__link').removeClass('border');
        $('.magazine__block').removeClass('show');
        
        $(this).addClass('border');
        $($(this).attr('href')).addClass('show');
    });
    

        $('.shop__link').click(function(event) {
        event.preventDefault();
        
        $('.shop__link').removeClass('border');
        $('.shop__block').removeClass('show');
        
        $(this).addClass('border');
        $($(this).attr('href')).addClass('show');
    });
    
    /* Cart */
    // $('.cart__icon').click(function(event) {
    //     event.preventDefault();
    //
    //     $('.cart_cont').addClass('open');
    //     $('body').addClass('overflow-hidden');
    //     $('.overlay').addClass('ok');
    //
    // });
    //
    // $('.close').click(function(event) {
    //     event.preventDefault();
    //
    //     $('.cart_cont').removeClass('open');
    //     $('body').removeClass('overflow-hidden');
    //     $('.overlay').removeClass('ok');
    // });
    //
    // $('.overlay').on("click", function(event){
    //     $(this).removeClass('ok');
    //     $('.cart_cont').removeClass('open');
    //     $('body').removeClass('overflow-hidden');
    // });

});    /* Search */
    $('.search__icon').click(function(event) {
        event.preventDefault();
        
        $('.search').addClass('open');
        $('body').addClass('overflow');
        
    });
    
    $('.close').click(function(event) {
        event.preventDefault();
//
        $('.search').removeClass('open');
        $('body').removeClass('overflow');
//        $('.overlay').removeClass('ok');
    });
//    
//    $('.overlay').on("click", function(event){
//        $(this).removeClass('ok');
//        $('.cart_cont').removeClass('open');
//        $('body').removeClass('overflow-hidden');
//    });

    $('.navSearch').click(function(event) {
        event.preventDefault();
        
        $('.search').addClass('open');
        $('body').addClass('overflow');
        
    });
    
    $('.close').click(function(event) {
        event.preventDefault();
//    
        $('.search').removeClass('open');
        $('body').removeClass('overflow');
//        $('.overlay').removeClass('ok');
    });

$(".ripple").on("click",function(event){
$(this).append("<span class='ripple-effect'>");
$(this).find(".ripple-effect").css({
   left:event.pageX-$(this).position().left,
    top:event.pageY-$(this).position().top
  }).animate({
    opacity: 0,
  }, 1500, function() {
   $(this).remove();
  });
});