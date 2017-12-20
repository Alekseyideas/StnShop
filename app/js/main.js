'use strict';

$('a').each(function () {
    $('a').click(function (e) {
        $(this).attr('href') === '#' ? e.preventDefault() : false;
    });
});
function showPopUpBg() {
    $('.openPopUp').show();
}
function closePopUpBg() {
    $('.openPopUp').hide();
}

$('.header__btnCategory').click(function () {
    $(this).parent('.header__wrapperCats').toggleClass('open');
    showPopUpBg();
    if ($('.header__wrapperCats').hasClass('open') === false) closePopUpBg();
});

$('.openPopUp').click(function () {
    closePopUpBg();
    $('.header__wrapperCats').removeClass('open');
});

$('.main-slider').owlCarousel({
    loop: true,
    items: 1,
    animateOut: 'fadeOut',
    autoplay: true,
    autoplayTimeout: 10000,
    autoplayHoverPause: false,
    nav: true,
    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
});
$('.main-slider .sliderItem').css('min-height', $(window).height() - 149 + 'px');
$('main').css('min-height', $(window).height() - 149 - 158 + 'px');

$('.filter__item').click(function () {
    $(this).toggleClass('active');
    var checkbox = $(this).parent().find('input:checkbox');
    checkbox.prop("checked", !checkbox.is(':checked'));
});

var wrapper = $('.category');
var trim = $('.btn__trim.active').attr('id');

function trimFunction(trim) {
    wrapper.removeClass(trim === 'list' ? 'th' : 'list');
    wrapper.addClass(trim === 'th' ? 'th' : 'list');
}

trimFunction(trim);

$('.btn__trim').click(function () {
    var trim = $(this).attr('id');
    $('.btn__trim').removeClass('active');
    $(this).addClass('active');
    trimFunction(trim);
});