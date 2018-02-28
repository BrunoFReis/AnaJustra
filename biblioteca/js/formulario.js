$(document).ready(function(){
	$(".data").mask("99/99/9999");
	$(".cpf").mask("999.999.999-99");
	$(".celular").mask("(99)99999-9999");
	$(".telefone").mask("(99)9999-9999");
	$(".cep").mask("99999-999");
	$('[data-toggle="tooltip"]').tooltip();

	$("#clicep").keyup(function(){
		var cep = $(this).val();

		if(cep.length == 9){
			cep = $(this).val().replace(/\D/g, '');	//remover mascara

    		var validacep = /^[0-9]{8}$/;	//Expressão regular para validar o CEP.

	        if(validacep.test(cep)) {	//Valida o formato do CEP.

	            //Preenche os campos com "..." enquanto consulta webservice.
	            $("#cliendereco, #clibairro, #clicidade").val("...");

	            //Consulta o webservice viacep.com.br/
	            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

	                if (!("erro" in dados)) {
	                    //Atualiza os campos com os valores da consulta.
	                    $("#cliendereco").val(dados.logradouro);
	                    $("#clibairro").val(dados.bairro);
	                    $("#clicidade").val(dados.localidade);
	                    $("#cliuf").val(dados.uf);
	                    console.log(dados);
	                } //end if.
	                else {
	                    //CEP pesquisado não foi encontrado.
	                    limpaCep();
	                    alert("CEP não encontrado.");
	                }
	            });
	        } //end if.
	        else {
	            //cep é inválido.
	            limpaCep();
	            alert("Formato de CEP inválido.");
	        }    		
		}
	});

});

function limpaCep(){
	$("#cliendereco, #clibairro, #clicidade, #clicep").val("");
}

function SalvarPaginaTitular(){
	if(validarTitular()){
		$('#titular, #titularidade').hide()
		$('#dependencia, #dependente').show();
		$('#lblTitular').html($('#clinome').val());
	}
}

function SalvarDependente(){
	document.getElementById('dependencia').style.display = 'none';
	document.getElementById('dependente').style.display = 'none';
	document.getElementById('finalizar').style.display = 'block';
	document.getElementById('Finalizar').style.display = 'block';
}

function validarTitular(){
	var nome = document.getElementById('clinome').value;
	var data = document.getElementById('clinasc').value;
	var cpf = document.getElementById('clicpf').value;
	var cliestadocivil = document.getElementById('cliestadocivil').value;
	var clisexo = document.getElementById('clisexo').value;
	var nomeMae = document.getElementById('clinomemae').value;
	var celular = document.getElementById('clicelular').value;
	var telefoneResidencial = document.getElementById('clitelefone').value;
	var email = document.getElementById('cliemail').value;
	var cep = document.getElementById('clicep').value;
	var cliuf = document.getElementById('cliuf').value;
	var cidade = document.getElementById('clicidade').value;
	var bairro = document.getElementById('clibairro').value;
	var logradouro = document.getElementById('cliendereco').value;
	var numero =  document.getElementById('cliendnumero').value;
	var complemento = document.getElementById('cliendcomp').value;

	if (nome == "") {
		alert('Preencha o campo com seu nome');
		document.getElementById("clinome").focus();
		return false;
	}

	if (data == "") {
		alert('Preencha o campo com a sua data de Nascimento');
		document.getElementById("clinasc").focus();
		return false;
	}	

	if (data.length < 8) {
		alert('Data Inválida');
		document.getElementById("clinasc").focus();
		return false;
	}

	if (cpf == "") {
		alert('Preencha o campo com o seu CPF');
		document.getElementById("clicpf").focus();
		return false;
	}	

	if (cpf.length < 11) {
		alert('CPF Inválido');
		document.getElementById("clicpf").focus();
		return false;
	}

	if (cliestadocivil == "") {
		alert('Preencha o seu Estado Civil');
		document.getElementById("cliestadocivil").focus();
		return false;
	}	

	if (clisexo == "") {
		alert('Preencha o seu clisexo');
		document.getElementById("clisexo").focus();
		return false;
	}

	if (nomeMae == "") {
		alert('Preencha o campo com o nome da sua mãe');
		document.getElementById("clinomemae").focus();
		return false;
	}

	if (celular == "") {
		alert('Preencha o campo com o seu telefone');
		document.getElementById("clicelular").focus();
		return false;
	}

	if (celular.length < 11) {
		alert('Celular Inválido');
		document.getElementById("clicelular").focus();
		return false;
	}

	if (cpf.length < 10) {
		alert('Telefone Residencial Inválido');
		document.getElementById("clitelefone").focus();
		return false;
	}

	if (email == "") {
		alert('Preencha o campo com o seu email');
		document.getElementById("cliemail").focus();
		return false;
	}

	if (cep == "") {
		alert('Preencha o campo com o seu CEP');
		document.getElementById("clicep").focus();
		return false;
	}	

	if (cpf.length < 8) {
		alert('CEP Inválido');
		document.getElementById("clicep").focus();
		return false;
	}

	if (cliuf == "") {
		alert('Preencha o campo com o sua Unidade de Federação');
		document.getElementById("cliuf").focus();
		return false;
	}

	if (cidade == "") {
		alert('Preencha o campo com a sua cidade');
		document.getElementById("clicidade").focus();
		return false;
	}

	if (bairro == "") {
		alert('Preencha o campo com o seu bairro');
		document.getElementById("clibairro").focus();
		return false;
	}

	if (logradouro == "") {
		alert('Preencha o campo com o seu logradouro');
		document.getElementById("cliendereco").focus();
		return false;
	}

	if (numero == "") {
		alert('Preencha o campo com o numero do seu endereço');
		document.getElementById("cliendnumero").focus();
		return false;
	}

	if (complemento == "") {
		alert('Preencha o campo com o complemento do seu endereço');
		document.getElementById("cliendcomp").focus();
		return false;
	}

	return true;

}

function ValidarDependente(){
	var dpnome = document.getElementById('depnome').value;
	var dpcpf = document.getElementById('depcpf').value;
	var dpnascimento = document.getElementById('depnasc').value;
	var dpparentesco = document.getElementById('depparentesco').value;
	var dpclisexo = document.getElementById('depsexo').value;
	var dpcivil = document.getElementById('depestadocivil').value;
	var dpsos = document.getElementById('sosdental').value;
	var dpnomemae = document.getElementById('depnomemae').value;
	
	if (dpnome == "") {
		alert('Preencha o campo com nome do dependente');
		document.getElementById("depnome").focus();
		return false;
	}

	if (dpcpf == "") {
		alert('Preencha o campo com o CPF do dependente');
		document.getElementById("depcpf").focus();
		return false;
	}	

	if (dpcpf.length < 11) {
		alert('CPF Inválido');
		document.getElementById("depcpf").focus();
		return false;
	}

	if (dpnascimento == "") {
		alert('Preencha o campo com a sua data de Nascimento do dependente');
		document.getElementById("depnasc").focus();
		return false;
	}	

	if (dpnascimento.length < 8) {
		alert('Data Inválida');
		document.getElementById("depnasc").focus();
		return false;
	}

	if (dpparentesco == "") {
		alert('Preencha o seu grau de parentesco com o dependente');
		document.getElementById("depparentesco").focus();
		return false;
	}

	if (dpclisexo == "") {
		alert('Preencha o campo com o clisexo do dependente');
		document.getElementById("depsexo").focus();
		return false;
	}

	if (dpcivil == "") {
		alert('Preencha o Estado Civil do dependente');
		document.getElementById("depestadocivil").focus();
		return false;
	}	

	if (dpsos == "") {
		alert('Campo Inválido');
		document.getElementById("sosdental").focus();
		return false;
	}
	
	if (dpnomemae == "") {
		alert('Preencha o campo com o nome da mãe do dependente');
		document.getElementById("depnomemae").focus();
		return false;
	}	

	return true;

}

var listaDependentes = [];
var contador = 0;

function AdicionarDependente(){
	if(ValidarDependente()){
		contador++;
		var dependente = {};
		dependente.id = contador;
		dependente.nome = $("#depnome").val();
		dependente.depsexo = $("#depsexo").val();
		dependente.parentesco = $("#depparentesco").val();
		dependente.depestadocivil = $("#depestadocivil").val();
		dependente.cpf = $("#depcpf").val();
		dependente.nasc = $("#depnasc").val();
		dependente.nomemae = $("#depnomemae").val();
		dependente.sosdental = $('#sosdental').val();

		listaDependentes.push(dependente);
		
		atualizaListaDep();
		resetar();
	}
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

	if(validarFinal()){
		$.each(listaDependentes, function(i, dep){
			var dependente = "";
			dependente += "depnome:"+dep.nome;
			dependente += ",depsexo:"+dep.depsexo;
			dependente += ",parentesco:"+dep.parentesco;
			dependente += ",depestadocivil:"+dep.depestadocivil;
			dependente += ",depcpf:"+dep.cpf;
			dependente += ",depnasc:"+dep.nasc;
			dependente += ",depnomemae:"+dep.nomemae;
			dependente += ",sosdental:"+dep.sosdental;

			$('#frmCadastro').append('<input type="hidden" name="dependentes[]" value="'+dependente+'">');
		});	

		$('#frmCadastro').submit();
	}
}

function resetar(){
	$("#depnome, #depclisexo, #depparentesco, #depestadocivil, #depcpf, #depnasc, #depnomemae, #depsexo, #sosdental").val("");
}

function validarFinal(){

	var plano =  document.getElementsByName('plano');
	var valor_autorizar = null
	var valor_plano = null;

	var checkeds = new Array();
	$("input[name='autorizar']:checked").each(function ()
	{
	  valor_autorizar=1;
	});

	
	for(var i = 0; i < plano.length; i++){
	   if(plano[i].checked){
	   		valor_plano = plano[i].value;
		}
		
	}

	if (valor_plano == null) {
		alert('Escolha um dos planos');		
		return false;
	}

	if (valor_autorizar == null) {
		alert('Autorize o desconto do valor do plano');
		document.getElementById("autorizar").focus();
		return false;
	}

	return true;

}

function ConfereCPF(){
	var cpf = document.getElementById('clicpf').value;

	if (cpf.length == 14 ){

		cpf = cpf.replace(".", "");
		cpf = cpf.replace(".", "");
		cpf = cpf.replace("-", "");

		$.ajax({
		  method: "GET",
		  url: "views/ConfereCPF.php",
		  data: { 'cpf': cpf}
		})
		.done(function( msg ) {
			if(msg==1){
		    	alert('CPF já cadastrado, por favor insira outro CPF');
				document.getElementById("clicpf").value = "";
			}	
		});
	}

}

function confereNome(){
	var nome = document.getElementById('clinome').value;
	var string = nome.split(/\s+/);

	for (var i; i<string.length;i++){
		console.log(string(i));

		if(string.length <= 1){

			alert("O nome do Titular não pode ser Abreviado");
		}
	}

}