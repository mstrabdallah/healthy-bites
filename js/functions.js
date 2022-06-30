function openMenu() {
    var element = document.getElementById("menu");
    var element2 = document.getElementsByTagName('body')[0]

    if (element.classList.contains('active')) {
        element.classList.remove('active');
        element2.classList.remove('active')
    } else {
        element.classList.add('active')
        element2.classList.add('active')
    }
    // element.classList.add("active");

    // document.getElementsByClassName("menu").addcslashes = "block";
}


var swiper = new Swiper(".swiperReviews", {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});


var swiper = new Swiper(".productImages", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".productImages2", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });