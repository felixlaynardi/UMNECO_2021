$.js = function (el) {
    return $("[data-js=" + el + "]");
 };
 
 function carousel() {
    $.js("timeline-carousel").slick({
       infinite: false,
       arrows: false,
       dots: false,
       autoplay: false,
       speed: 1100,
       slidesToShow: 2,
       slidesToScroll: 2,
       respondTo:"window",
       responsive: [
          {
             breakpoint: 800,
             settings: {
                slidesToShow: 1,
                slidesToScroll: 1
             }
          }
       ]
    });
 }
 
 carousel();

 var vid_width = $(".timeline-carousel__image").width();
 var vid_height = $(".timeline-carousel__image").height();

 $(".dark-vid").css("width", vid_width);
 $(".dark-vid").css("height", vid_height);
 