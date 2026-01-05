/* ===============================
   INIT PAGE SCRIPTS
================================ */
function initPageScripts() {

  // -------- Slick Sliders --------
  $('.gallery-slider').not('.slick-initialized').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    dots: true,
    arrows: false,
    responsive: [
      { breakpoint: 1024, settings: { slidesToShow: 2 } },
      { breakpoint: 600, settings: { slidesToShow: 1 } }
    ]
  });

  $('.artist-slider').not('.slick-initialized').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    dots: true,
    arrows: false,
    responsive: [
      { breakpoint: 1024, settings: { slidesToShow: 2 } },
      { breakpoint: 600, settings: { slidesToShow: 1 } }
    ]
  });

  $('.event-slider').not('.slick-initialized').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    arrows: true,
    responsive: [
      { breakpoint: 1024, settings: { slidesToShow: 2 } },
      { breakpoint: 600, settings: { slidesToShow: 1 } }
    ]
  });

  $('.testimonials-slider').not('.slick-initialized').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    arrows: true
  });

  // -------- Masonry --------
  const grid = document.querySelector('.masonry-grid');
  if (grid) {
    imagesLoaded(grid, function () {
      new Masonry(grid, {
        itemSelector: '.masonry-item',
        percentPosition: true,
        gutter: 22
      });
    });
  }
}

/* ===============================
   SIDEBAR (DELEGATED EVENTS)
================================ */
$(document).on('click', 'a.nav-toggle-button', function (e) {
  e.preventDefault();
  $('.sidebar').addClass('show-sidebar');
});

$(document).on('click', '.sidebar-close a', function (e) {
  e.preventDefault();
  $('.sidebar').removeClass('show-sidebar');
});


barba.init({
  transitions: [{
    leave({ current }) {
      return new Promise(resolve => {
        current.container.classList.add('fade-out');
        // Wait for CSS animation duration before resolving
        setTimeout(resolve, 400); 
      });
    },
    enter({ next }) {
      next.container.classList.add('fade-in');
    }
  }]
});

// Reinitialize sliders and Masonry after each page enter
barba.hooks.afterEnter(() => {
  initPageScripts(); // your slick/masonry function
  $('.sidebar').removeClass('show-sidebar'); // auto close sidebar
});