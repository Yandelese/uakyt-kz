const swiper1 = new Swiper(".mainSwiper", {
    navigation: {
      nextEl: ".swiper-button-next-1",
      prevEl: ".swiper-button-prev-1",
    },
    autoplay: {
        delay: 4000,
      },
    pagination: {
      el: ".swiper-pagination-1",
      clickable: true,
    },
    spaceBetween: 30,
    loop: 1,
    breakpoints: {
  
      0: {
        slidesPerView: 1,
      },
    },
    autoHeight: true,
  });

  const swiper2 = new Swiper(".headerSwiper", {
    navigation: {
      nextEl: ".swiper-button-next-2",
      prevEl: ".swiper-button-prev-2",
    },
    autoplay: {
        delay: 5000,
      },
    // pagination: {
    //   el: ".swiper-pagination-1",
    //   clickable: true,
    // },
    spaceBetween: 30,
    loop: 1,
    breakpoints: {
  
      0: {
        slidesPerView: 8,
      },
      1200: {
        slidesPerView: 7, 
      },
      1024: {
        slidesPerView: 6,
      },
      991: {
        slidesPerView: 4,
      },
      640: {
        slidesPerView: 3 
      },
      480:{
        slidesPerView: 3
      },
      414:{
        slidesPerView: 3
      },
      390:{
        slidesPerView: 3
      },
      375: {
        slidesPerView: 3
      },
      360: {
        slidesPerView: 3
      },
      320: {
        slidesPerView: 3
      }

    },
    autoHeight: true,
  });

