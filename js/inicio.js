$(document).ready(function(){
	
	function nav(){
		$("#novo").click(function(){
			$("#container").empty();
			$("#container").load("../containers/inserir.php");
			$("li").removeClass("active");
			$("li.nav1").addClass("nav1 active");
			console.log("novo");
			console.log($(window).width() +'x'+ $(window).height());
		});
		$("#prop").click(function(){
			$("#container").empty();
			$("#container").load("../containers/proprietario.php");
			$("li").removeClass("active");
			$("li.nav2").addClass("nav2 active");
			console.log("proprietario");
			console.log($(window).width() +'x'+ $(window).height());
		});
		$("#config").click(function(){
			$("#container").empty();
			$("#container").load("../containers/config.php");		
			$("li").removeClass("active");
			$("li.nav3").addClass("nav3 active");
			console.log("config");
			console.log($(window).width() +'x'+ $(window).height());
		});
		$("#inq").click(function(){
			$("#container").empty();
			$("#container").load("../containers/inquilino.php");		
			$("li").removeClass("active");
			$("li.nav5").addClass("nav5 active");
			console.log("inquilino");
			console.log($(window).width() +'x'+ $(window).height());
		});
		$("#buscar").click(function(){
			$("#container").empty();
			$("#container").load("../containers/inquilino.php");		
			$("li").removeClass("active");
			$("li.nav6").addClass("nav6 active");
			console.log("inquilino");
			console.log($(window).width() +'x'+ $(window).height());
		});
		$("#vencimentos").click(function(){
			$("#container").empty();
			$("#container").load("../containers/vencimentos.php");		
			$("li").removeClass("active");
			$("li.nav7").addClass("nav7 active");
			console.log("vencimentos");
			console.log($(window).width() +'x'+ $(window).height());
		});
		//----------------------------------------------------------------------------------------------------
		$("input[name=voltar]").click(function(){
			console.log("VOLTANDO");
			$("#container").empty();
			$("#container").load("../containers/tipo_contrato.php");

		});

		if($(window).width() < 992) console.log("RUIM");

		//----------------------------------------------------------------------------------------------------
		
		/*
		$("input[name=entrar]").click(function(){
			var contrato= $("input[name=entrar]").attr("id");
			$("#container").empty();
			console.log(contrato);
		});
		*/
		


		
	};


	if (window.File && window.FileReader && window.FileList && window.Blob) {
	  // Great success! All the File APIs are supported.
	} else {
	  alert('The File APIs are not fully supported in this browser.');
	}

	
	nav();
})
