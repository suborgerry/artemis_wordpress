$('.owl_carousel').owlCarousel({
    loop:true,
    margin:26,
    nav:true,
    // items:3,
    navText:["<img src='/wp-content/themes/artemis/static/images/arrow.png'>", "<img src='/wp-content/themes/artemis/static/images/arrow.png'>"],
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      700: {
        items: 2,
        nav: false
      },
      1080: {
        items: 3
      }
    }
  })