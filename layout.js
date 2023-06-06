let menu = document.getElementById("menu");
let favoritos = document.getElementById("favoritos");
let tela = document.getElementById('tela');
let sidebar = document.getElementById("sidebar");
let logado = document.getElementsByClassName("logado")[0];
let deslogado = document.getElementsByClassName("deslogado")[0];
let userProfile = document.getElementById("userProfile");

const openModal = ()=> {
    modal.style.display = "block"
}

window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }


  /*  Dropdown  */


const dropdown = document.getElementById("myDropdown")

/* Chama uma função que alterna a classe show */
const showDropdown = () => {
    dropdown.classList.toggle("show")
}

/* Função que serve para que quando o alvo não for o Dropdown, o Dropdown tem seu display mudado para none */

window.onclick = (event) => {
  if (event.target == dropdown) {
    dropdown.classList.remove('show');
  }
}


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
        tela.src = "src/page/" + element + ".html";
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
    {btn: "btnPerfil", pagina: "userData"},
    {btn: "btnIconCarrinho", pagina: "shopcart"},
    {btn: "btnVer1", pagina: "product"},
    {btn: "btnVer2", pagina: "product"},
    {btn: "btnVer3", pagina: "product"},
    
];

paginasBtn.forEach(element => {
    let item = document.getElementById(element.btn)
    item.addEventListener("click", function(){
        tela.src = `src/page/${element.pagina}.html`;
    })
});


sidebar.onblur = function() {
    sidebar.classList.remove('showSide');
}

btnSair.addEventListener("click", () => { 
    localStorage.setItem("user", false); 
    statusUser(); 
    tela.src = "src/page/showcase.html";
})

function statusUser(){
    console.log("ok", user)
    deslogado.classList.toggle('ddNone'); 
    logado.classList.toggle('ddShow'); 
    sidebar.classList.toggle('ddShow'); 
    tela.classList.toggle('ddTela'); 
}

let modal = document.querySelector('.login')

