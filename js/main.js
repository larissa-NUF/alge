let modal = document.querySelector('.login')


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
