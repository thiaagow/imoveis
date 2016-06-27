$().ready(function(){

	function novo_usuario(){

		$("input[name=in_usuario]").click(function(){

			var user= $("input[name=in_user]").val();
			console.log(user.length);
			var senha_1= $("input[name=in_senha]").val();
			var senha_2= $("input[name=in_senha_2]").val();

			if(senha_1=="" || senha_2 =="" || user=="") alert("Insira as informações necessárias!");
			else{
				if(user.length < 6 || user.length > 18 ) alert("Usuário invalido! Verifique as exigencias!");
				else{
					if(senha_1 != senha_2)	alert("As senhas não são iguais!");
					else{
						$.ajax({
							type: "POST",
							data: {flag: 31, user:user, senha:senha_1},
							url: "../logic/logic.php",
							datatype: "html",
							success: function(result, status){
								console.log(result);
								if(result == 0) alert("Usuário já existe!");
								else alert("Usuário criado com sucesso!");
							},
							complete: function(result){
								console.log(status);
							}
						});	
					}
				}
			}
		});
	}

	function mudar_senha(){
		$("input[name=senha]").click(function(){
			console.log("mudar senha");
			var senha_1= $("input[name=senha_atual]").val();
			console.log(senha_1);
			var senha_2= $("input[name=senha_nova]").val();
			console.log(senha_2);
			var senha_3= $("input[name=senha_nova_2]").val();
			console.log(senha_3);
			var login1= $("input[name=login]").val();
			
			if(senha_2 != senha_3 || senha_2 == "")	alert("As senhas não são iguais!");
			else{
				$.ajax({
					type: "POST",
					data: {flag: 3, senha_atual: senha_1, senha_nova:senha_3, login:login1},
					url: "../logic/logic.php",
					datatype: "html",
					success: function(result, status){
						console.log(result);
						if(result == 0) alert("Erro: senha invalida!");
						else {alert("Senha alterada com sucesso!");
						$(location).attr('href', '../index.php');
						}
					},
					complete: function(result){
						console.log(status);
					}
				});	
			}
		});
	}
	
	function mudar_conf(){
		$("input[name=confi]").click(function(){
			console.log("mudar configuracao");
			var email= $("input[name=email_atual]").val();
			
				$.ajax({
					type: "POST",
					data: {flag: 99, email: email},
					url: "../logic/logic.php",
					datatype: "html",
					success: function(result, status){
						console.log(result);
						if(result == 0) alert("Erro: senha invalida!");
						else alert("Configuracao alterada com sucesso!");
					},
					complete: function(result){
						console.log(status);
					}
				});	
		});
	}

	novo_usuario();
	mudar_senha();
	mudar_conf();

});
