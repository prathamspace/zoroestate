console.log('test');


$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
       $('header').addClass('stickyHeader');
    } else {
       $('header').removeClass('stickyHeader');
    }
});