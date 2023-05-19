let menu = document.getElementById("menu");
let favoritos = document.getElementById("favoritos");
let tela = document.getElementById('tela');
let sidebar = document.getElementById("sidebar");

menu.getElementsByTagName('i')[0].addEventListener("click",function(){
    sidebar.classList.toggle('showSide');  
});

favoritos.addEventListener("click",function(){
    tela.src = "favorite.html";
    favoritos.classList.toggle('selecionado'); 
    sidebar.classList.toggle('showSide'); 
});

menu.getElementsByTagName('p')[0].addEventListener("click",function(){
    tela.src = "userProfile.html";
    favoritos.classList.toggle('selecionado'); 
    sidebar.classList.toggle('showSide'); 
});

