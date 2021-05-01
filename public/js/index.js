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

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);


( function($) {
  
  $(document).ready(function() {
    
    var s           = $('.product'),
        sWrapper    = s.find('.slider-wrapper'),
        sItem       = s.find('.slide'),
        btn         = s.find('.slider-link'),
        sWidth      = sItem.width(),
        sCount      = sItem.length,
        slide_date  = s.find('.slide-date'),
        slide_title = s.find('.slide-title'),
        slide_text  = s.find('.slide-text'),
        slide_more  = s.find('.slide-more'),
        slide_image = s.find('.slide-image img'),
        sTotalWidth = sCount * sWidth;
    
    sWrapper.css('width', sTotalWidth);
    sWrapper.css('width', sTotalWidth);
    
    var clickCount  = 0;
    
    btn.on('click', function(e) {
      e.preventDefault();

      if( $(this).hasClass('next') ) {
        
        ( clickCount < ( sCount - 1 ) ) ? clickCount++ : clickCount = 0;
      } else if ( $(this).hasClass('prev') ) {
        
        ( clickCount > 0 ) ? clickCount-- : ( clickCount = sCount - 1 );
      }
      TweenMax.to(sWrapper, 0.4, {x: '-' + ( sWidth * clickCount ) })


      //CONTENT ANIMATIONS

      var fromProperties = {autoAlpha:0, x:'-50', y:'-10'};
      var toProperties = {autoAlpha:0.8, x:'0', y:'0'};

      TweenLite.fromTo(slide_image, 1, {autoAlpha:0, y:'40'}, {autoAlpha:1, y:'0'});
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
function myFunction6(imgs) {
  var expandImg6 = document.getElementById("expandedImg6");
  expandImg6.src = imgs.src;
}
function myFunction7(imgs) {
  var expandImg7 = document.getElementById("expandedImg7");
  expandImg7.src = imgs.src;
}
function myFunction8(imgs) {
  var expandImg8 = document.getElementById("expandedImg8");
  expandImg8.src = imgs.src;
}
function myFunction9(imgs) {
  var expandImg9 = document.getElementById("expandedImg9");
  expandImg9.src = imgs.src;
}
function myFunction0(imgs) {
  var expandImg0 = document.getElementById("expandedImg0");
  expandImg0.src = imgs.src;
}
