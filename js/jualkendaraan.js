document.addEventListener("DOMContentLoaded", () => {
  feather.replace();

  const navbarNav = document.querySelector(".navbar-nav");
  const menu = document.querySelector("#menu");

  menu.onclick = () => {
      navbarNav.classList.toggle("active");
  };

  document.addEventListener("click", function (e) {
      if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
          navbarNav.classList.remove("active");
      }
  });

  const searchIcon = document.getElementById("search");
  const searchBox = document.getElementById("search-box");

  searchIcon.addEventListener("click", (e) => {
      e.preventDefault();
      searchBox.classList.toggle("active");
  });
<<<<<<< HEAD
});
=======

  const carousel = document.getElementById("carousel");
  const nextBtn = document.getElementById("nextBtn");
  const prevBtn = document.getElementById("prevBtn");

  nextBtn.addEventListener("click", () => {
    carousel.scrollBy({ left: 400, behavior: "smooth" });
  });

  prevBtn.addEventListener("click", () => {
    carousel.scrollBy({ left: -400, behavior: "smooth" });
  });
});
>>>>>>> 10a43cf (update html to php and footer)
