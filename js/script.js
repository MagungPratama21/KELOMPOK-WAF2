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


  const isLoggedIn = localStorage.getItem('isLoggedIn');

  if (isLoggedIn) {
      document.getElementById('login').style.display = 'none';
      document.getElementById('user').style.display = 'inline-block';
  }


  document.getElementById('login').addEventListener('click', (e) => {
      e.preventDefault();
 
      localStorage.setItem('isLoggedIn', true);
      document.getElementById('login').style.display = 'none';
      document.getElementById('user').style.display = 'inline-block';
  });
});
