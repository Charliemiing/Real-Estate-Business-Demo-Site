document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.querySelector('.top-header-toggle');
    const topHeader = document.querySelector('.top-header');

    toggleButton.addEventListener('click', function () {
        topHeader.style.display = 'none';
    });
});

//Add hover effects or animation triggers
document.querySelectorAll('.btn').forEach(btn => {
    btn.addEventListener('mouseover', () => {
        btn.style.transform = 'scale(1.1)';
    });
    btn.addEventListener('mouseout', () => {
        btn.style.transform = 'scale(1)';
    });
});


// Swiper for the carousel
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 3, 
  spaceBetween: 20, 
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },
  breakpoints: {
    
    1024: {
      slidesPerView: 2
    },
    768: {
      slidesPerView: 1
    }
  }
});

document.addEventListener("DOMContentLoaded", function () {
    const hamburgerBtn = document.querySelector(".hamburger-btn");
    const menuColumn = document.querySelector(".menu-column");

    hamburgerBtn.addEventListener("click", function () {
        menuColumn.classList.toggle("open");
    });
});

