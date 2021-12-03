function featuredCarousel(){
    //To get the entire width of the carousel, use scrollWidth.
    
     var carouselWidth = $(".featured-carousel-inner")[0].scrollWidth;
    //To get the width of a single card in the carousel, use width().
    
     var cardWidth = $(".featured-carousel-item").width();
    //Now, let’s use a variable to store the current scroll position which will initially be 0.
    
     var scrollPosition = 0;
    //When the next button is clicked, check if you’ve reached the 7th card, as you don’t want to scroll any further.
    
    $(".featured-carousel-control-next").on("click", function () {
      if (scrollPosition < (carouselWidth - cardWidth * 4)) { //check if you can go any further
        scrollPosition += cardWidth;  //update scroll position
        $(".featured-carousel-inner").animate({ scrollLeft: scrollPosition },600); //scroll left
      }
    });
    //Similarly, when the previous button is clicked, check if you are on the first card.
    
    $(".featured-carousel-control-prev").on("click", function () {
      if (scrollPosition > 0) {
        scrollPosition -= cardWidth;
        $(".featured-carousel-inner").animate(
          { scrollLeft: scrollPosition },
          600
        );
      }
    });

    var multipleCardCarousel = document.querySelector(
      "#featured-products-carouselControls"
    );
    if (window.matchMedia("(min-width: 768px)").matches) {
      //rest of the code
      var carousel = new bootstrap.Carousel(multipleCardCarousel, {
        interval: false
      });
    } else {
      $(multipleCardCarousel).addClass("slide");
    }
}

featuredCarousel();

