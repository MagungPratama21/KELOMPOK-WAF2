document.addEventListener("DOMContentLoaded", () => {
  feather.replace();

  const navbarNav = document.getElementById("navbarNav");
  const menu = document.getElementById("menu");

  menu.onclick = () => {
    navbarNav.classList.toggle("active");
  };

  document.addEventListener("click", function (e) {
    if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
      navbarNav.classList.remove("active");
    }
  });

  const usernameElement = document.getElementById("username");
  const userInfoElement = document.getElementById("user-info");

  if (usernameElement) {
    usernameElement.addEventListener("click", function () {
      userInfoElement.style.display =
        userInfoElement.style.display === "block" ? "none" : "block";
    });
  }
});
