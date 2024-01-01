
    let slideIndex = 1;
showSlides(slideIndex);

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000);
}

// login
const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');
let isLoginOpen = false; // Biến flag kiểm tra xem phần đăng nhập đã mở hay chưa
let isPopupOpen = false; // Biến flag kiểm tra xem phần popup đã mở hay chưa

registerLink.addEventListener('click', () => {
  wrapper.classList.add('active');
  isLoginOpen = true; // Đặt flag khi mở phần đăng nhập
});

loginLink.addEventListener('click', () => {
  wrapper.classList.remove('active');
  isLoginOpen = false; // Đặt flag khi đóng phần đăng nhập
});

btnPopup.addEventListener('click', () => {
  if (isPopupOpen) {
    wrapper.classList.remove('active-popup');
    isPopupOpen = false; // Đặt flag khi đóng phần popup
  } else {
    wrapper.classList.add('active-popup');
    isPopupOpen = true; // Đặt flag khi mở phần popup
  }
});

iconClose.addEventListener('click', () => {
  wrapper.classList.remove('active-popup');
  isPopupOpen = false; // Đặt flag khi đóng phần popup
});

// Bổ sung sự kiện click cho tất cả các thẻ a
const allLinks = document.querySelector('.btnLogin-popup');
allLinks.forEach(link => {
  link.addEventListener('click', () => {
    if (isLoginOpen && isPopupOpen) {
      wrapper.classList.remove('active-popup');
      isPopupOpen = false; // Đặt lại flag khi click vào thẻ a
    }
  });
});

















