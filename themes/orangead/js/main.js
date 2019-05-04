$(document).ready(function () {
  toggleMenu();
  sliderSolutions();
  sliderPortfolio();
});

function toggleMenu() {
  $(".home__header__nav__toggle").click(function (e) {
    e.preventDefault();
    $(".home__header__nav__menu").toggle();
  });
}

function sliderSolutions() {
  var options = {
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1, responsive: [{

      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        infinite: true
      }

    }, {

      breakpoint: 767,
      settings: {
        infinite: true,
        slidesToShow: 1,
      }

    }]
  };

  $(".home__about__slider").slick(options);
  $("#about-slider-control-left").click(function () {
    $('.home__about .slick-prev').click()
  })
  $("#about-slider-control-right").click(function () {
    $('.home__about .slick-next').click()
  })
}

function sliderPortfolio() {
  var options = {
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {

        breakpoint: 1024,
        settings: "unslick"

      }, {

        breakpoint: 767,
        settings: {
          infinite: true,
          slidesToShow: 1,
        }

      }]

  }
  $('.home__portfolio__slider').slick(options)

  $('#portfolio-slider-control-right').click(function () {
    $('.home__portfolio .slick-next').click()
  })

  $('#portfolio-slider-control-left').click(function () {
    $('.home__portfolio .slick-prev').click()
  })
}
