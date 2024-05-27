document.addEventListener("DOMContentLoaded", () => {
   feather.replace();

   const togglePassword = document.getElementById("togglePassword");
   const passwordField = document.getElementById("password");

   const togglePasswordVisibility = () => {
       const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
       passwordField.setAttribute("type", type);

       if (type === "text") {
           togglePassword.setAttribute("data-feather", "eye-off");
       } else {
           togglePassword.setAttribute("data-feather", "eye");
       }

       feather.replace(); 
   };

   document.addEventListener("mouseup", () => {
       togglePassword.removeEventListener("mousedown", togglePasswordVisibility);
   });

   togglePassword.addEventListener("mousedown", togglePasswordVisibility);
});
