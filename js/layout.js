let menu = document.getElementById("menu");
let favoritos = document.getElementById("favoritos");
let tela = document.getElementById('tela');
let sidebar = document.getElementById("sidebar");
let logado = document.getElementsByClassName("logado")[0];
let deslogado = document.getElementsByClassName("deslogado")[0];
let userProfile = document.getElementById("userProfile");

let user = localStorage.getItem("user");
console.log(user)
if (user != 'false') statusUser()

menu.getElementsByTagName('i')[0].addEventListener("click",function(){
    sidebar.classList.toggle('showSide');  
});

let paginas = ["userProfile", "request", "favorite"];

paginas.forEach(element => {
    let item = document.getElementById(element)
    item.addEventListener("click", function(){
        tela.src = element + ".html";
        item.classList.add('selecionado'); 
        sidebar.classList.remove('showSide');  

        paginas.forEach(el => {
            if (element !== el) document.getElementById(el).classList.remove('selecionado');
        });
    })
});

let paginasBtn = [
    {btn: "btnSobre", pagina: "about"},
    {btn: "btnCarrinho", pagina: "shopcart"},
    {btn: "btnCriarConta", pagina: "singin"},
    {btn: "btnLogo", pagina: "showcase"},
];

paginasBtn.forEach(element => {
    let item = document.getElementById(element.btn)
    item.addEventListener("click", function(){
        tela.src = element.pagina + ".html";
        if (element.funcao) element.funcao()
    })
});


sidebar.onblur = function() {
    sidebar.classList.remove('showSide');
}

btnSair.addEventListener("click", () => { 
    localStorage.setItem("user", false); 
    statusUser(); 
    tela.src = "showcase.html";
})

function statusUser(){
    console.log("ok", user)
    deslogado.classList.toggle('ddNone'); 
    logado.classList.toggle('ddShow'); 
    sidebar.classList.toggle('ddShow'); 
    tela.classList.toggle('ddTela'); 
}