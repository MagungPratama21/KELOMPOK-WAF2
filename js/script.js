document.addEventListener("DOMContentLoaded", () => {
    feather.replace();

    const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';

    const toggleLogin = (loggedIn) => {
        if (loggedIn) {
            document.getElementById('login').style.display = 'none';
            document.getElementById('user').style.display = 'inline-block';
            document.getElementById('user-info').style.display = 'inline-block';
            document.getElementById('username').textContent = localStorage.getItem('username');
        } else {
            document.getElementById('login').style.display = 'inline-block';
            document.getElementById('user').style.display = 'none';
            document.getElementById('user-info').style.display = 'none';
        }
    };

    toggleLogin(isLoggedIn);

    document.getElementById('logout').addEventListener('click', (e) => {
        e.preventDefault();
        localStorage.removeItem('isLoggedIn');
        localStorage.removeItem('username');
        toggleLogin(false);
        window.location.href = 'logout2.php';
    });

    document.getElementById('user').addEventListener('click', (e) => {
        e.preventDefault();
        const userInfo = document.getElementById('user-info');
        userInfo.style.display = userInfo.style.display === 'block' ? 'none' : 'block';
    });
});