const navbarNav = document.querySelector(".navbar-nav");

document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

const menu = document.querySelector("#menu");

document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

// Pop Up Product //

// Mengatur variabel yang akan digunakan
let prevScrollPos = window.pageYOffset;
const navbar = document.getElementById("navbar");

// Event listener untuk mengatur efek menghilangkan navbar
window.onscroll = function () {
  const currentScrollPos = window.pageYOffset;

  // Periksa arah scroll (ke atas atau ke bawah)
  if (prevScrollPos > currentScrollPos) {
    // Scroll ke atas, tampilkan navbar
    navbar.style.top = "20rem";
  } else {
    // Scroll ke bawah, sembunyikan navbar
    navbar.style.top = "-100px"; // Sesuaikan dengan tinggi navbar Anda
  }

  prevScrollPos = currentScrollPos;
};

let currentSlide = 0;

function showSlide(index) {
  const slides = document.querySelectorAll(".slide");
  const slider = document.querySelector(".slider");

  if (index >= slides.length) {
    currentSlide = 0;
  } else if (index < 0) {
    currentSlide = slides.length - 1;
  } else {
    currentSlide = index;
  }

  const offset = -currentSlide * 100; // Move the slider
  slider.style.transform = `translateX(${offset}%)`;
}

function moveSlide(direction) {
  showSlide(currentSlide + direction);
}

document.addEventListener("DOMContentLoaded", () => {
  showSlide(currentSlide);
});

const slides = document.querySelectorAll(".slide");
let currentSlide = 0;

function showNextSlide() {
  slides[currentSlide].classList.remove("active");
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].classList.add("active");
}

setInterval(showNextSlide, 5000); // Ganti setiap 5 detik

// Navbar hide on scroll down, show on scroll up
let prevScrollPos = window.pageYOffset;
const navbar = document.getElementById("navbar");

window.onscroll = function () {
  const currentScrollPos = window.pageYOffset;

  if (prevScrollPos > currentScrollPos) {
    // Scroll ke atas, tampilkan navbar
    navbar.style.top = "0";
  } else {
    // Scroll ke bawah, sembunyikan navbar
    navbar.style.top = "-100px"; // Sesuaikan tinggi navbar
  }

  prevScrollPos = currentScrollPos;
};
