"use strict";

const shopSliderEl = document.querySelector(".js-shop-slider");
if (shopSliderEl) {
  const paginationEl = shopSliderEl.querySelector(".swiper-pagination");
  new Swiper(".js-shop-slider", {
    slidesPerView: 1,
    loop: false,
    speed: 500,
    ...(paginationEl
      ? {
          pagination: {
            el: ".js-shop-slider .swiper-pagination",
            clickable: true,
          },
        }
      : {}),
  });
}
