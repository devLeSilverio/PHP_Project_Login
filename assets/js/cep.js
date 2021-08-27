window.onload = function(){
	const buscar = document.querySelector("#buscar");
	const cep = document.querySelector("#cep");
	const cancelar = document.querySelector("#cancelar");

	const opt = {
		method:'GET',
		mode:'cors',
		cache:'default'
	}

	buscar.addEventListener("click", function(){
		fetch(`https://viacep.com.br/ws/${cep.value}/json`, opt)
			.then(
					response =>{
						response.json().then(
							data =>{
								document.querySelector("#rua").value = data['logradouro'];
								document.querySelector("#bairro").value = data['bairro'];
								document.querySelector("#cidade").value = data['localidade'];
								document.querySelector("#estado").value = data['uf'];
							}
						)
					}
			)
	});

	cancelar.addEventListener("click", function(){
		document.querySelector("#rua").value = '';
		document.querySelector("#cep").value = '';
		document.querySelector("#number").value = '';
		document.querySelector("#bairro").value = '';
		document.querySelector("#cidade").value = '';
		document.querySelector("#estado").value = '';

	});




}
