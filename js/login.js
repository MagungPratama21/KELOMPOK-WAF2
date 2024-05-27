const loginForm = document.getElementById("loginform");

const handleLogin = (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "username" && password === "password") {
        window.location.href = 'file:///C:/xampp/xampp2/htdocs/jualbelikendaraan/index.html'; 
    } else {
        alert('Invalid username or password');
    }
};

loginForm.addEventListener("submit", handleLogin);

const loginButton = document.getElementById("loginButton");
loginButton.addEventListener("click", handleLogin);


const togglePassword = document.getElementById("togglePassword");
const passwordField = document.getElementById("password");

togglePassword.addEventListener("click", function () {
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
    
    this.classList.toggle("feather-eye-off");
});

feather.replace();
