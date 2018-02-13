$(document).ready(function(){
	$(".data").mask("99/99/9999");
	$(".cpf").mask("999.999.999-99");
	$(".celular").mask("(99)99999-9999");
	$(".telefone").mask("(99)9999-9999");
	$(".cep").mask("99999-999");
=======
$("#txtDataNascimento").mask("99/99/9999");
$("#txtcpf").mask("999.999.999-99");
$("#txtCelular").mask("(99)99999-9999");
$("#txtTelefoneResidencial").mask("(99)9999-9999");
$("#txtCEP").mask("99999-999");
$("#txtCpfDp").mask("999.999.999-99");
$("#txtdpnasc").mask("99/99/9999");
>>>>>>> 2ef5cf84a3fe009a42a2fdd301d53516ee83b189
});

function SalvarPaginaTitular(){

<<<<<<< HEAD
	//if(validarTitular()){
		document.getElementById('titular').style.display = 'none';
		document.getElementById('titularidade').style.display = 'none';
		document.getElementById('dependencia').style.display = 'block';
		document.getElementById('dependente').style.display = 'block';
	//}
=======
	if(validarTitular()){

	document.getElementById('titular').style.display = 'none';
	document.getElementById('titularidade').style.display = 'none';
	document.getElementById('dependencia').style.display = 'block';
	document.getElementById('dependente').style.display = 'block';
	var nome = document.getElementById('txtNomeTitular').value;
	document.getElementById('lblTitular').innerHTML = nome;
	}
>>>>>>> 2ef5cf84a3fe009a42a2fdd301d53516ee83b189
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

function ValidarDependente(){

	var dpnome = document.getElementById('txtdpNome').value;
	var dpcpf = document.getElementById('txtCpfDp').value;
	var dpnascimento = document.getElementById('txtdpnasc').value;
	var dpparentesco = document.getElementById('dp_graudeparentesco').value;
	var dpsexo = document.getElementById('slcsexo').value;
	var dpcivil = document.getElementById('dp_estadocivil').value;
	var dpsos = document.getElementById('sosDental').value;
	var dpnomemae = document.getElementById('depnomemae').value;
	
	if (dpnome == "") {
		alert('Preencha o campo com nome do dependente');
		document.getElementById("txtdpNome").focus();
		return false;
	}

	if (dpcpf == "") {
		alert('Preencha o campo com o CPF do dependente');
		document.getElementById("txtCpfDp").focus();
		return false;
	}	

	if (dpcpf.length < 11) {
		alert('CPF Inválido');
		document.getElementById("txtCpfDp").focus();
		return false;
	}

	if (dpnascimento == "") {
		alert('Preencha o campo com a sua data de Nascimento do dependente');
		document.getElementById("txtdpnasc").focus();
		return false;
	}	

	if (dpnascimento.length < 8) {
		alert('Data Inválida');
		document.getElementById("txtdpnasc").focus();
		return false;
	}

	if (dpparentesco == "") {
		alert('Preencha o seu grau de parentesco com o dependente');
		document.getElementById("dp_graudeparentesco").focus();
		return false;
	}

	if (dpsexo == "") {
		alert('Preencha o campo com o sexo do dependente');
		document.getElementById("slcsexo").focus();
		return false;
	}

	if (dpcivil == "") {
		alert('Preencha o Estado Civil do dependente');
		document.getElementById("dp_estadocivil").focus();
		return false;
	}	

	if (dpsos == "") {
		alert('Campo Inválido');
		document.getElementById("sosDental").focus();
		return false;
	}
	
	if (dpnomemae == "") {
		alert('Preencha o campo com o nome da mãe do dependente');
		document.getElementById("depnomemae").focus();
		return false;
	}	

	return true;

}

function LimparDependente(){

	document.getElementById('txtdpNome').value = "";
	document.getElementById('txtCpfDp').value = "";
	document.getElementById('txtdpnasc').value = "";
	document.getElementById('dp_graudeparentesco').value="";
	document.getElementById('slcsexo').value="";
	document.getElementById('dp_estadocivil').value="";
	document.getElementById('sosDental').value="";
	document.getElementById('depnomemae').value="";
}

var listaDependentes = [];
var contador = 0;


	contador++;
	var dependente = {};
	dependente.id = contador;
	dependente.nome = $("#depnome").val();
	dependente.sexo = $("#depsexo").val();
	dependente.parentesco = $("#depparentesco").val();
	dependente.estadocivil = $("#depestadocivil").val();
	dependente.cpf = $("#depcpf").val();
	dependente.nasc = $("#depnasc").val();
	dependente.nomemae = $("#depnomemae").val();
	dependente.sosdental = $('[name="sosdental"]').val();
=======
	dependente.nome = $("#txtdpNome").val();
	dependente.sexo = $("#slcsexo").val();
	dependente.parentesco = $("#dp_graudeparentesco").val();
	dependente.estadocivil = $("#dp_estadocivil").val();
	dependente.cpf = $("#txtCpfDp").val();
	dependente.nasc = $("#txtdpnasc").val();
	dependente.nomemae = $("#depnomemae").val();
	dependente.sosdental = $("#sosDental").val();
>>>>>>> 2ef5cf84a3fe009a42a2fdd301d53516ee83b189

	listaDependentes.push(dependente);
	
	atualizaListaDep();
	$("#depnome, #depsexo, #depparesntesco, #depestadocivil, #depcpf, #depnasc, #depnomemae").val("");
=======
	$("#txtdpNome, #slcsexo, #dp_graudeparentesco, #dp_estadocivil, #txtCpfDp, #txtdpnasc, #depnomemae,#sosDental").val("");
>>>>>>> 2ef5cf84a3fe009a42a2fdd301d53516ee83b189
}

function atualizaListaDep(){
	$("#tblListDependentes tbody tr").remove();
	var table = $("#tblListDependentes tbody");
	table.append("<tr><th>#</th><th>Nome</th><th></th></tr>");

	$.each(listaDependentes, function(i, elem){
		table.append('<tr index="'+elem.id+'"><td>'+elem.id+'</td><td>'+elem.nome+' - '+elem.cpf+'</td><td><button type="button" onclick="removeDependente('+elem.id+')">X</button></td></tr>');
	});
}

function removeDependente(id){
	var index = listaDependentes.findIndex(e => e.id == id);
	if(index != -1){
		listaDependentes.splice(index,1);
	}
	$('#tblListDependentes tbody tr[index="'+id+'"]').remove();
}

function enviaForm(){
	$.each(listaDependentes, function(i, dep){
		var dependente = "";
		dependente += "depnome:"+dep.nome;
		dependente += ",depsexo:"+dep.sexo;
		dependente += ",parentesco:"+dep.parentesco;
		dependente += ",depestadocivil:"+dep.estadocivil;
		dependente += ",depcpf:"+dep.cpf;
		dependente += ",depnasc:"+dep.nasc;
		dependente += ",depnomemae:"+dep.nomemae;
		dependente += ",sosdental :"+dep.sosdental;

		$('#frmCadastro').append('<input type="hidden" name="dependentes[]" value="'+dependente+'">');
	});	

	$('#frmCadastro').submit();
}
=======
		$("#tblListDependentes tbody").append("<tr><th>"+(i+1)+" - "+elem.nome+" - "+elem.cpf+" </th></tr>");
	});
}



>>>>>>> 2ef5cf84a3fe009a42a2fdd301d53516ee83b189
