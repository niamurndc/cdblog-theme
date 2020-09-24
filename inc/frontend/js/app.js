new Glider(document.querySelector('.glider'), {
  slidesToShow: 3,
  dots: '#dots',
  loop: true,
  draggable: true,
  arrows: {
    prev: '.glider-prev',
    next: '.glider-next'
  },
  responsive: [
    {
      breakpoint: 200,
      settings: {
        // Set to `auto` and provide item width to adjust to viewport
        slidesToShow: 1,
        slidesToScroll: 1,
        duration: 0.25
      }
    },
    {
      breakpoint: 500,
      settings: {
        // Set to `auto` and provide item width to adjust to viewport
        slidesToShow: 2,
        slidesToScroll: 1,
        duration: 0.25
      }
    },
    {
      // screens greater than >= 775px
      breakpoint: 775,
      settings: {
        // Set to `auto` and provide item width to adjust to viewport
        slidesToShow: 'auto',
        slidesToScroll: 'auto',
        duration: 0.25
      }
    },{
      // screens greater than >= 1024px
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        duration: 0.25
      }
    }
  ]
});

// document.querySelector('.glider').addEventListener('click', function(){
//   console.log('clicked');
// });