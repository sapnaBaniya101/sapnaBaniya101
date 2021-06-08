const bar = document.querySelector("#bar");
const nav = document.querySelector("#nav");
bar.addEventListener("click", () => {
  if (nav.classList.contains("hidden")) {
    nav.classList.remove("hidden");
  } else {
    nav.classList.add("hidden");
  }
});

$(".show").slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  nextArrow: $(".next"),
  prevArrow: $(".prev"),
});
