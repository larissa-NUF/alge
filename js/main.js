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


  const showDropdown = (a) => {
    a.classList.toggle("show")
  }


  showDropdown(dropdown)