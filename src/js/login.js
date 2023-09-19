let loginForm = document.getElementById("loginForm");
loginForm.addEventListener("submit", function(event, params) {
    event.preventDefault();
    console.log(params);
    let email = loginForm.email.value

    localStorage.setItem("login", email);
    localStorage.setItem("user", true);
    window.location.href = "../../index.html";

})
