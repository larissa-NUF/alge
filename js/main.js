let modal = document.querySelector('.login')


const openModal = ()=> {
    modal.style.display = "block"
}

window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
