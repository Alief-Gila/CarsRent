const links = document.querySelectorAll(".nav-link")

let path = window.location.pathname;
let filename = path.substring(path.lastIndexOf("/") + 1);

links.forEach(link => {
    link.classList.remove("on")

    if (filename == link.getAttribute("data-filename")) {
        link.classList.add("on")
    }
});

const buttonFilterGroup = document.querySelectorAll(".filter-btn")
const carsContainer = document.querySelector(".cars-container")
buttonFilterGroup.forEach((button) => {
    button.addEventListener("click", function () {
        buttonFilterGroup.forEach(item => {
            item.classList.remove("filter-active")
        });
        this.classList.add("filter-active")

        let listCars = document.querySelectorAll(".cars-item")

        listCars.forEach(cars => {
            cars.classList.remove("d-none")
            if (this.getAttribute("data-filter") == "*") {
                cars.classList.remove("d-none")
            } else if (!cars.classList.contains(this.getAttribute("data-filter"))) {
                cars.classList.add("d-none")
            }
        });
    })
});
document.addEventListener('DOMContentLoaded', function () {
  const stars = document.querySelectorAll('.star');
  const starsContainer = document.getElementById('stars');

  starsContainer.addEventListener('mouseleave', function () {
    const checked = document.querySelector('.star:checked');
    if (checked) {
      highlightStars(checked.value);
    } else {
      unhighlightStars();
    }
  });

  stars.forEach((star, index) => {
    star.addEventListener('click', function () {
      highlightStars(star.value);
    });

    star.addEventListener('mouseover', function () {
      highlightStars(star.value);
    });

    star.addEventListener('mouseleave', function () {
      const checked = document.querySelector('.star:checked');
      if (checked) {
        highlightStars(checked.value);
      } else {
        unhighlightStars();
      }
    });
  });
});

function highlightStars(value) {
  const stars = document.querySelectorAll('.star');
  stars.forEach(star => {
    star.checked = star.value <= value;
  });
}

function unhighlightStars() {
  const stars = document.querySelectorAll('.star');
  stars.forEach(star => {
    star.checked = false;
  });
}
document.addEventListener('DOMContentLoaded', function () {
    // Your existing code for handling the input stars
  
    // Display stars for the initial rating
    if (typeof initialRating !== 'undefined') {
      displayStars(initialRating);
    }
  });
  
  function displayStars(rating) {
    const displayStarsContainer = document.getElementById('display-stars');
    displayStarsContainer.innerHTML = ''; // Clear existing stars
  
    for (let i = 1; i <= 5; i++) {
      const starElement = document.createElement('span');
      starElement.className = 'display-star';
      starElement.innerHTML = i <= rating ? '★' : '☆'; // Use Unicode stars
  
      displayStarsContainer.appendChild(starElement);
    }
  }
