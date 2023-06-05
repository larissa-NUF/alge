
$(document).ready(()=>{
    $("#cep").mask("99999-999");
    $("#cpf").mask("999.999.999-99");
    $("#cell").mask("(99) 99999-9999");
})

function consultarCep () {
    let cep = document.getElementById("cep").value;
    let logradouro = document.getElementById("logradouro");
    let bairro = document.getElementById("bairro");
    let complemento = document.getElementById("complemento");
    let cidade = document.getElementById("cidade");
    let uf = document.getElementById("uf");
    let url = `https://viacep.com.br/ws/${cep}/json/`;
    let request = new XMLHttpRequest();

    request.open('GET', url);
    request.onerror = (e) => {
        console.log('API Offline ou CEP inválido');
    }

    request.onload = () => {
        let response = JSON.parse(request.responseText);

        if (response.erro === true) {
            alert('CEP inválido');
        } else {
            logradouro.value = response.logradouro;
            bairro.value = response.bairro;
            complemento.value = response.complemento;
            cidade.value = response.localidade;
            uf.value = response.uf;
        }
    }; 

    request.send();
}
