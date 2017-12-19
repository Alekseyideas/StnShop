$('a').each(function () {
   $('a').click(function (e) {
       $(this).attr('href') === '#' ? e.preventDefault() : false;
   })
});


$('.header__btnCategory').click(function () {
   $(this).parent('.header__wrapperCats').toggleClass('open');
});
