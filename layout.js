let menu = document.getElementById("menu");
let favoritos = document.getElementById("favoritos");
let tela = document.getElementById('tela');
let userProfile = document.getElementById("userProfile");

/*  Dropdown  */


let dropdown = document.getElementById("myDropdown")

/* Chama uma função que alterna a classe show */

const showDropdown = () => {
    dropdown.classList.toggle("show")
}

/* Função que serve para que quando o alvo não for o Dropdown, o Dropdown tem seu display mudado para none */

dropdown.addEventListener("blur", ()=>{
    dropdown.classList.remove("show");
})

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
    {btn: "btnSobre", pagina: "about.html"},
    {btn: "btnCarrinho", pagina: "shopcart.html"},
    {btn: "btnCriarConta", pagina: "singin.html"},
    {btn: "btnLogo", pagina: "showcase.html"},
    {btn: "btnPerfil", pagina: "userData.php"},
    {btn: "saida", pagina: "deslogar.php"},
    {btn: "btnIconCarrinho", pagina: "shopcart.html"},
    {btn: "btnVer1", pagina: "product.html"},
    {btn: "btnVer2", pagina: "product.html"},
    {btn: "btnVer3", pagina: "product.html"},
];

paginasBtn.forEach(element => {
    let item = document.getElementById(element.btn);
    if(item){
        item.addEventListener("click", function(){
            tela.src = `src/page/${element.pagina}`;
        })
    }
});


sidebar.onblur = function() {
    sidebar.classList.remove('showSide');
}

let modal = document.querySelector('.login')

