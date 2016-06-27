$().ready(function(){
	
	function proprietario(){
		$("input[name=cad_prop]").click(function(){
			var nome= $("input[name=nome]").val();
			var rg= $("input[name=rg]").val();
			var cpf= $("input[name=cpf]").val();
			console.log(cpf);
			var nasc= $("input[name=nasc]").val().substr(0,4) + $("input[name=nasc]").val().substr(5,2) + $("input[name=nasc]").val().substr(8,2);
			console.log(nasc)
			
			$.ajax({
				type: "POST",
				data: {flag:0 ,nome:nome, rg:rg, cpf:cpf, nasc:nasc},
				url: "../logic/logic.php",
				datatype:"html",
				success: function(result,status){
					console.log(result);
					if(result == 1){ 	
						alert("Proprietário inserido com sucesso!");
						//window.close("../containers/proprietario_2.php", "_blank", "height=345, width=650");
					}
					else{ 
						alert("Proprietário já existente!");
						$("input[name=nome]").val("");
						$("input[name=rg]").val("");
						$("input[name=cpf]").val("");
						$("input[name=nasc]").val("");
					}
				},
				complete: function(result){
					console.log(status);
					console.log("FINALIZADO!");
				}
			});
		});
	}

	function inqulino(){
		$("input[name=cad_iqui]").click(function(){
			var nome= $("input[name=nome]").val();
			var cpf= $("input[name=cpf]").val();
			var conjugue= $("input[name=conjugue]").val();
			var fiador= $("input[name=fiador]").val();

			$.ajax({
				type: "POST",
				data: {flag:1 ,nome:nome, conjugue:conjugue, cpf:cpf, fiador:fiador},
				url: "../logic/logic.php",
				datatype:"html",
				success: function(result,status){
					console.log(result);
					if(result == 1){ 	
						alert("Inquilino inserido com sucesso!");
						//window.close("../containers/proprietario_2.php", "_blank", "height=345, width=650");
					}
					else{ 
						alert("Inquilino já existente!");
						$("input[name=nome]").val("");
						$("input[name=conjugue]").val("");
						$("input[name=cpf]").val("");
						$("input[name=fiador]").val("");
					}
				},
				complete: function(result){
					console.log(status);
					console.log("FINALIZADO!");
				}
			});
		});
	}
		
	proprietario();
	inqulino();
})
