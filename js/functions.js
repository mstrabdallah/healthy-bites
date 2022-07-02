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

// header


const navbar = document.getElementById('header')
 
console.log(document.documentElement.scrollTop)
// OnScroll event handler
const onScroll = () => {

  // Get scroll value
  const scroll = document.documentElement.scrollTop
  // If scroll value is more than 0 - add class
  if (scroll > 20) {
    navbar.classList.add("headerFixed");
  } else {
    navbar.classList.remove("headerFixed")
  }
}

// Use the function
window.addEventListener('scroll', onScroll)
onScroll();


const priceRange = document.getElementById("priceRange")

priceRange.addEventListener('change', function() {
 
  document.getElementById("priceTo").value = priceRange.value;

});

function setPrice(e){
  document.getElementById("priceTo").value = 12

  console.log('---',e)
}