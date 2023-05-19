let loginForm = document.getElementById("loginForm");


loginForm.addEventListener("submit", function(event, params) {
    event.preventDefault();
    console.log(params);


    let email = loginForm.email.value

    sessionStorage.setItem("login", email);

})
