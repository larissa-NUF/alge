let btn = [{
    id: "madeira", 
    nome: 'Madeira', 
    itens: [
      "Baús",
      "Caixotes",
      "Casinhas",
      "Cestas",
      "Corações de Madeira",
      "Peças em MDF",
      "Porta vinhos",
    ]
  },
  {
    id: "pelucias", 
    nome: 'Pelúcias', 
    itens: [
      "Chaveiros",
      "Corações de pelúcia",
      "Urso P nacional - 21cm",
      "Urso M nacional - 23cm",
      "Urso G nacional",
      "Urso GG nacional",
      "Urso importado - 21cm",
      "Urso importado - 23cm",
      "Urso importado - 26cm",
      "Urso importado - 30cm",
      "Urso gigante importado",
    ]
  },
  {
    id: "canecas", 
    nome: 'Canecas', 
    itens: [
      "Aniversário",
      "Café",
      "Chocolate",
      "Mães",
      "Neutras",
      "Pais",
      "Parentes",
      "Profissões",
      "Românticas",
      "Times",
    ]
  },

];

btn.forEach(element => {
  let div = document.createElement("div");
  div.classList.add("filtro");
  div.id = "filtro_" + element.id;
  let montar = /*html*/`
    <a href="#" >
      ${element.nome}
      <i class="fa-solid fa-chevron-down"></i>
    </a>
    <div id="${element.id}" contentEditable class="dropdown" >
  `;

  element.itens.forEach(el => {
    montar +=/*html*/`
      <label class="container_check">${el}
        <input type="checkbox"  disabled="" readonly>
        <span class="checkmark"></span>
      </label>
    `;
  });

  montar += "</div>";
  div.innerHTML = montar;
  document.getElementById("filtros")?.appendChild(div);

  let item = document.getElementById(element.id);
  let itemA = document.getElementById("filtro_" + element.id)
  if (itemA) itemA.querySelector('a').addEventListener('click', function(){
      item.classList.toggle('show');
      item.focus();
    })
  
  if (item) {
    item.onblur = function() {
      item.classList.remove('show');
    }
    item.querySelectorAll('label').forEach(el => {
      el.addEventListener('click', function(){
        let itemAttr = el.querySelector('input');
        itemAttr.getAttribute('checked' ) ? 
        itemAttr.removeAttribute('checked' ) :
        itemAttr.setAttribute('checked', 'checked' )
      })
    });
  }
});


$('#formToggle').click(function(){
  if ($('#createItemForm').css('display') === 'none') {
    $('#createItemForm').css('display', 'flex');
    $('#formToggle').hide();
  } else {
    $('#createItemForm').hide();
    $('#formToggle').show();
  }
})
