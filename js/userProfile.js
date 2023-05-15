let menu = document.getElementById("menu");
let sidebar = document.getElementById("sidebar");
let item = document.getElementsByClassName("item");

menu.addEventListener("click",function(){
    if(sidebar.style.width == "1.2em"){
        sidebarMovimento("17em", "block");
    }else{
        sidebarMovimento("1.2em", "none");
    }
    
});

function sidebarMovimento (tamanho, visibilidade){
    sidebar.style.width = tamanho;
    for (let index = 0; index <= item.length; index++) {
        item[index].getElementsByTagName("p")[0].style.display = visibilidade;
        console.log(item[index])
        
    }
}