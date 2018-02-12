$(document).ready(function(){
$("#txtDataNascimento").mask("99/99/9999");
$("#txtcpf").mask("999.999.999-99");
$("#txtCelular").mask("(99)99999-9999");
$("#txtTelefoneResidencial").mask("(99)9999-9999");
$("#txtCEP").mask("99999-999");
$("#txtCPFDependente").mask("999.999.999-99");
$("#txtDataNascimentoDependente").mask("99/99/9999");
});

function SalvarPaginaTitular(){

	if(validarTitular()){

	document.getElementById('titular').style.display = 'none';
	document.getElementById('titularidade').style.display = 'none';
	document.getElementById('dependencia').style.display = 'block';
	document.getElementById('dependente').style.display = 'block';	

	}
}

function SalvarDependente(){
	document.getElementById('dependencia').style.display = 'none';
	document.getElementById('dependente').style.display = 'none';
	document.getElementById('finalizar').style.display = 'block';
	document.getElementById('Finalizar').style.display = 'block';
}

function validarTitular(){

	var nome = document.getElementById('txtNomeTitular').value;
	var data = document.getElementById('txtDataNascimento').value;
	var cpf = document.getElementById('txtcpf').value;
	var estadocivil = document.getElementById('estadocivil').value;
	var sexo = document.getElementById('sexo').value;
	var nomeMae = document.getElementById('txtNomeMae').value;
	var celular = document.getElementById('txtCelular').value;
	var telefoneResidencial = document.getElementById('txtTelefoneResidencial').value;
	var email = document.getElementById('txtEmail').value;
	var cep = document.getElementById('txtCEP').value;
	var uf = document.getElementById('uf').value;
	var cidade = document.getElementById('txtCidade').value;
	var bairro = document.getElementById('txtBairro').value;
	var logradouro = document.getElementById('txtLogradouro').value;
	var numero =  document.getElementById('txtNumero').value;
	var complemento = document.getElementById('txtComplemento').value;

	if (nome == "") {
		alert('Preencha o campo com seu nome');
		document.getElementById("txtNomeTitular").focus();
		return false;
	}

	if (data == "") {
		alert('Preencha o campo com a sua data de Nascimento');
		document.getElementById("txtDataNascimento").focus();
		return false;
	}	

	if (data.length < 8) {
		alert('Data Inválida');
		document.getElementById("txtDataNascimento").focus();
		return false;
	}

	if (cpf == "") {
		alert('Preencha o campo com o seu CPF');
		document.getElementById("txtcpf").focus();
		return false;
	}	

	if (cpf.length < 11) {
		alert('CPF Inválido');
		document.getElementById("txtcpf").focus();
		return false;
	}

	if (estadocivil == "") {
		alert('Preencha o seu Estado Civil');
		document.getElementById("estadocivil").focus();
		return false;
	}	

	if (sexo == "") {
		alert('Preencha o seu Sexo');
		document.getElementById("sexo").focus();
		return false;
	}

	if (nomeMae == "") {
		alert('Preencha o campo com o nome da sua mãe');
		document.getElementById("txtNomeMae").focus();
		return false;
	}

	if (celular == "") {
		alert('Preencha o campo com o seu telefone');
		document.getElementById("txtCelular").focus();
		return false;
	}

	if (celular.length < 11) {
		alert('Celular Inválido');
		document.getElementById("txtCelular").focus();
		return false;
	}

	if (telefoneResidencial == "") {
		alert('Preencha o campo com o seu Telefone Residencial');
		document.getElementById("txtTelefoneResidencial").focus();
		return false;
	}	

	if (cpf.length < 10) {
		alert('Telefone Residencial Inválido');
		document.getElementById("txtTelefoneResidencial").focus();
		return false;
	}

	if (email == "") {
		alert('Preencha o campo com o seu email');
		document.getElementById("txtEmail").focus();
		return false;
	}

	if (cep == "") {
		alert('Preencha o campo com o seu CEP');
		document.getElementById("txtCEP").focus();
		return false;
	}	

	if (cpf.length < 8) {
		alert('CEP Inválido');
		document.getElementById("txtCEP").focus();
		return false;
	}

	if (uf == "") {
		alert('Preencha o campo com o sua Unidade de Federação');
		document.getElementById("uf").focus();
		return false;
	}

	if (cidade == "") {
		alert('Preencha o campo com a sua cidade');
		document.getElementById("txtCidade").focus();
		return false;
	}

	if (bairro == "") {
		alert('Preencha o campo com o seu bairro');
		document.getElementById("txtBairro").focus();
		return false;
	}

	if (logradouro == "") {
		alert('Preencha o campo com o seu logradouro');
		document.getElementById("txtLogradouro").focus();
		return false;
	}

	if (numero == "") {
		alert('Preencha o campo com o numero do seu endereço');
		document.getElementById("txtNumero").focus();
		return false;
	}

	if (complemento == "") {
		alert('Preencha o campo com o complemento do seu endereço');
		document.getElementById("txtComplemento").focus();
		return false;
	}

	return true;

}
