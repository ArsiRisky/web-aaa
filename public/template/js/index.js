const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage() {
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);


(function ($) {

    $(document).ready(function () {

        var s = $('.product'),
            sWrapper = s.find('.slider-wrapper'),
            sItem = s.find('.slide'),
            btn = s.find('.slider-link'),
            sWidth = sItem.width(),
            sCount = sItem.length,
            slide_date = s.find('.slide-date'),
            slide_title = s.find('.slide-title'),
            slide_text = s.find('.slide-text'),
            slide_more = s.find('.slide-more'),
            slide_image = s.find('.slide-image img'),
            sTotalWidth = sCount * sWidth;

        sWrapper.css('width', sTotalWidth);
        sWrapper.css('width', sTotalWidth);

        var clickCount = 0;

        btn.on('click', function (e) {
            e.preventDefault();

            if ($(this).hasClass('next')) {

                (clickCount < (sCount - 1)) ? clickCount++ : clickCount = 0;
            } else if ($(this).hasClass('prev')) {

                (clickCount > 0) ? clickCount-- : (clickCount = sCount - 1);
            }
            TweenMax.to(sWrapper, 0.4, {
                x: '-' + (sWidth * clickCount)
            })


            //CONTENT ANIMATIONS

            var fromProperties = {
                autoAlpha: 0,
                x: '-50',
                y: '-10'
            };
            var toProperties = {
                autoAlpha: 0.8,
                x: '0',
                y: '0'
            };

            TweenLite.fromTo(slide_image, 1, {
                autoAlpha: 0,
                y: '40'
            }, {
                autoAlpha: 1,
                y: '0'
            });
            TweenLite.fromTo(slide_date, 0.4, fromProperties, toProperties);
            TweenLite.fromTo(slide_title, 0.6, fromProperties, toProperties);
            TweenLite.fromTo(slide_text, 0.8, fromProperties, toProperties);
            TweenLite.fromTo(slide_more, 1, fromProperties, toProperties);

        });

    });
})(jQuery);

$('.overlay').addClass('overlay-blue');


function myFunction1(imgs) {
  var expandImg1 = document.getElementById("expandedImg1");
  expandImg1.src = imgs.src;
}
function myFunction2(imgs) {
  var expandImg2 = document.getElementById("expandedImg2");
  expandImg2.src = imgs.src;
}
function myFunction3(imgs) {
  var expandImg3 = document.getElementById("expandedImg3");
  expandImg3.src = imgs.src;
}
function myFunction4(imgs) {
  var expandImg4 = document.getElementById("expandedImg4");
  expandImg4.src = imgs.src;
}
function myFunction5(imgs) {
  var expandImg5 = document.getElementById("expandedImg5");
  expandImg5.src = imgs.src;
}
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
    });
<script type="text/javascript">
  $(document).ready(function () {
    $(".readmore").expander({
          slicePoint : 30,
          expandText: 'More',
          userCollapseText : 'Less'
    });
});
  $(document).on('ready', function() {
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });