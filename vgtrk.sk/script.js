var swiper_first = new Swiper(".mySwiper_first", {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  navigation: {
    nextEl: ".swiper_first_next_button",
    prevEl: ".swiper_first_prev_button",
  },
});

var swiper_second = new Swiper(".mySwiper_second", {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  pagination: {
    el: ".swiper_pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper_second_next_button",
    prevEl: ".swiper_second_prev_button",
  },
});

var swiper = new Swiper(".mySwiper_third", {
  slidesPerView: 1.31,
  spaceBetween: 50,
  loop: true,
  pagination: {
    el: ".swiper_pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper_third_next_button",
    prevEl: ".swiper_third_prev_button",
  }
});

var swiper = new Swiper(".mySwiper_third_phone", {
  slidesPerView: 1.31,
  spaceBetween: 10,
  loop: true,
  pagination: {
    el: ".swiper_pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper_third_next_button_phone",
    prevEl: ".swiper_third_prev_button_phone",
  }
});



const formCalculateACount = document.querySelector('.content_screen_sixth');

const amount =  document.querySelector('.amount');

formCalculateACount.addEventListener('submit', function calculate(e) {
  e.preventDefault();
  let area_key = document.getElementById("area").value;
  let equipment_key = document.getElementById("equipment").value;
  let pression_key = document.getElementById("pression").value;
  let room_key = document.getElementById("room").value;
  let distance_key = document.getElementById("distance").value;
  let distance2_key = document.getElementById("distance2").value;

  let hasEmptyOption = [area_key, equipment_key, pression_key, room_key, distance_key, distance2_key].some(el => el === "none");

  if(hasEmptyOption) {
    amount.textContent = "Вы заполнили не все ячейки"
    return;
  }

  let price = Number(area_key) + Number(equipment_key) + Number(pression_key) + Number(room_key) + Number(distance_key) + Number(distance2_key);
  amount.textContent = "Примерная стоимость будет составлять - " + price + " ₽";

})