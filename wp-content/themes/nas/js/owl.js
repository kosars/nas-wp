jQuery(document).ready(function() {
    // Owl Carousel
    var owl = jQuery(".owl-sights");
    owl.owlCarousel({
      items: 1,
      margin: 0,
      loop: true,
      nav: false
    });
  });
  jQuery(document).ready(function() {
    // Owl Carousel
    var owl = jQuery(".owl-post");
    owl.owlCarousel({
      items: 1,
      margin: 0,
      loop: true,
      nav: false
    });
  });
  
  jQuery(document).ready(function() {
    // Owl Carousel instagram
    var owl = jQuery(".owl-inst");
    owl.owlCarousel({
      items: 4,
      margin: 10,
      loop: true,
      nav: false,
      responsive:{
        0:{
          items:1,
          margin:20,
        },
        768:{
          items:3
        },
        1180:{
          items:3
        },
        1380:{
          items:4,
          margin: 10,
        },
        1440:{
          items:4,
          margin: 15,
        },
        1600:{
          items:5,
          margin: 0,
        },
        1920:{
          items:5,
          margin: 10,
        }
      }
    });
  });