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
});