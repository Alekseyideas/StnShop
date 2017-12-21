$('a').each(function () {
   $('a').click(function (e) {
       $(this).attr('href') === '#' ? e.preventDefault() : false;
   })
});
function showPopUpBg() {
    $('.openPopUp').show();
}
function closePopUpBg() {
    $('.openPopUp').hide();
    $('.popUp').removeClass(animatioShow).addClass(animatioHide);
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


const next = '<i class="fa fa-angle-right" aria-hidden="true"></i>';
const prev = '<i class="fa fa-angle-left" aria-hidden="true"></i>';


$('.main-slider').owlCarousel({
    loop: true,
    items: 1,
    animateOut: 'fadeOut',
    autoplay: true,
    autoplayTimeout: 10000,
    autoplayHoverPause: false,
    nav: true,
    navText: [prev,next]
});
$('.main-slider .sliderItem').css('min-height', $(window).height()-149 + 'px');
$('main').css('min-height', $(window).height()-149-158 + 'px');



$('.filter__item').click(function () {
    $(this).toggleClass('active');
    let checkbox =  $(this).parent().find('input:checkbox');
    checkbox.prop("checked", !checkbox.is(':checked') );
});

let wrapper =  $('.category');
let trim = $('.btn__trim.active').attr('id');

function trimFunction(trim) {
    wrapper.removeClass(trim==='list'?'th':'list');
    wrapper.addClass(trim==='th'?'th':'list');
}


trimFunction(trim);

$('.btn__trim').click(function () {
    let trim = $(this).attr('id');
    $('.btn__trim').removeClass('active');
    $(this).addClass('active');
    trimFunction(trim);
});



let slidesCount = $('.sideBar .sideBarCarousel').length;

 for (let i=0; i<slidesCount+1; i++){
     $('.sideBarCar-'+i).owlCarousel({
         items: 1,
         nav: true,
         navText: [prev,next],
         loop: true,
         autoplay: true,
         autoplayTimeout: 7000,
     });
 }


let tabActive = $('.tabBtn.active').attr('data-tab');
    $('#'+tabActive).show();

    $('.tabBtn').click(function () {
        $('.tabContent').hide();
        $('.tabBtn').removeClass('active');
        let tabActive = $(this).attr('data-tab');
        $('.tabBtn[data-tab='+tabActive+']').addClass('active');
        $('#'+tabActive).show();
    });


$('.accessoriesCarousel').owlCarousel({
    items: 4,
    nav: true,
    navText: [prev,next],
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    smartSpeed: 700,
    autoplayHoverPause: true

});

$('button.chars').click(function () {
    $("html, body").animate({ scrollTop: $('.charTabs').offset().top }, 1000);
    $('.tabBtn[data-tab="characteristics"]').click();
});





if($('*').is('.charTabs')) {
    let PosTab = $('.charTabs').position().top;
}



$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 79) {
        $(".header__second").addClass("fixed");
        $('body').addClass('fixedHeader');
    }else {
        $(".header__second").removeClass("fixed");
        $('body').removeClass('fixedHeader');
    }


    if (scroll >=300){
        $('.topProductBuy').addClass('active');
    }else {
        $('.topProductBuy').removeClass('active');
    }

    if($('*').is('.charTabs')) {
        let PosTab = $('.charTabs').position().top;

        if (scroll >=PosTab){
            $('.fixedTabs').addClass('active');
        }else {
            $('.fixedTabs').removeClass('active');
        }
    }

});


let seenPopUp = $('.SeenPopUp');
let heightPopUPSeen = seenPopUp.height();

seenPopUp.css('margin-top','-'+heightPopUPSeen/2 + 'px');


let animatioShow = 'bounceInRight';
let animatioHide = 'bounceOutLeft';

$('.header__btnBlock--views').click(function () {
    seenPopUp.show().removeClass(animatioHide).addClass(animatioShow);
    showPopUpBg();
});

$('.closePopUp').click(function () {
    $(this).parent().removeClass(animatioShow).addClass(animatioHide);
    closePopUpBg();
});



$('.ProductPopUpCarousel').owlCarousel({
    items: 1,
    nav: true,
    navText: [prev,next],
    loop: true,
    autoplay: true,
    autoplayTimeout: 8000,
    smartSpeed: 700,
    autoplayHoverPause: true,
    dots: true
});
$('.product-page__image-item').click(function () {
    $('.ProductPopUp').show().removeClass(animatioHide).addClass(animatioShow);
    showPopUpBg();
    let n = $(this).attr('data-item');
    $('.ProductPopUpCarousel').trigger('to.owl.carousel', n);
});

$('.product-page__image').click(function () {
    $('.ProductPopUp').show().removeClass(animatioHide).addClass(animatioShow)
    showPopUpBg();
    $('.ProductPopUpCarousel').trigger('to.owl.carousel', 0);
});
