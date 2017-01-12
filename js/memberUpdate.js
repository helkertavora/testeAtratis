$(document).ready( function() {
		
	$("#memberUpdateForm").validate({
		rules:{
			labelNome:{
				required: true, minlength: 3
			},
			labelEmail: {
                required: true, email: true
            },
			labelSenha:{
				required: true, minlength: 6
			},
			labelConfirmaSenha: {
				required: true,
				minlength: 6,
				equalTo: "#labelSenha"
			}
		},
		messages:{
			labelNome:{
				required: "Digite o Nome do Usuário",
				minlength: "Digite pelo menos 3 caracteres"
			},
			labelEmail:{
             	required: "Digite o seu E-mail",
              	email: "Digite um E-mail válido"
           	},
			labelSenha:{
				required: "Digite a Senha",
				minlength: "Digite pelo menos 6 caracteres"
			},
			labelConfirmaSenha: {
				required: "Digite a Confirmação de Senha",
				minlength: "Digite pelo menos 6 caracteres",
				equalTo: "As senhas devem ser iguais"
			}
		}
	});
	
});