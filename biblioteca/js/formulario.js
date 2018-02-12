$(document).ready(function(){
$("#txtDataNascimento").mask("99/99/9999");
$("#txtcpf").mask("999.999.999-99");
$("#txtCelular").mask("(99)99999-9999");
$("#txtTelefoneResidencial").mask("(99)9999-9999");
$("#txtCEP").mask("99999-999");
});

function SalvarPaginaTitular(){
	document.getElementById('titular').style.display = 'none';
	document.getElementById('titularidade').style.display = 'none';
	document.getElementById('dependencia').style.display = 'block';
	document.getElementById('dependente').style.display = 'block';
}

