<?php
ob_start();
@session_start();

require("class/BANCO.class.php");
require("class/BD.class.php");
$banco1 = new BANCOGMF();

if(!isset($_SESSION["login"])){
	$_SESSION["login"] = "";
}
if(!isset($_SESSION["senha"])){
	$_SESSION["senha"] = "";
}

if(isset($_SESSION["login"]) && isset($_SESSION["senha"])) {
	if($banco1->acessoUsuario($_SESSION["login"],$_SESSION["senha"])== 1){
		echo '<meta http-equiv="refresh" content=0;url="pags/inicio.php">';
		exit;
	} else {
		$_SESSION["login"] = "";
		$_SESSION["senha"] = "";
	}
}

if(isset($_POST["usuario"])) {
	if($banco1->acessoUsuario($_POST["usuario"],$_POST["senha"])== 1){
		$_SESSION["login"] = $_POST["usuario"];
		$_SESSION["senha"] = $_POST["senha"];
		echo '<meta http-equiv="refresh" content=0;url="pags/inicio.php">';
		exit;
	} else {
		$erro = 0;
	}
}
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Imóveis</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	
	<script type="text/javascript" src="js/jquery.min.js" ></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	
	
	<link rel="shortcut icon" href="img\Untitled-1.png" type="image/x-icon">
	
  </head>
  <body background="img\background-page.jpg">
   
	
	<br><br>
	
<div id="div-into" />
	<div align="center" style="padding-top:50px; " >
		<div align="center">
			<img src="img\loader.gif" align="center" id="load" style="width:40px; " height="40px" />
		</div>
		<br>
		<div class="container" align="center"  style="background-color:#E9E7E7;border-radius: 8px;box-shadow: 0 15px 20px rgba(0, 0, 0, .175); height: 310px;width:310px"><br>
			<br><br>
            <form action="index.php" method="post">
			<input type="text" name="usuario" autofocus style="border-radius: 3px;border: 1px solid #ccc; width:240px; height:30px;" placeholder="   Usuário"> <br>
			<input type="password" name="senha" style="border-radius: 3px;border: 1px solid #ccc; width:240px; height:30px;" placeholder="   Senha" > <br><br> 
			<input type="submit"  name="entrar" value="ENTRAR" align="center" style="width:100px" class="btn btn-default ">
            </form>
            <?php
			if(isset($erro)) { ?>
            <br>
            <span style="color:#F00">Combina&ccedil;&atilde;o de usu&aacute;rio e senha erradas!</span>
            <?php 
			}
			?>
			<br><br>
			<!--	<a href="#" id="a-alterar-senha">Alterar Senha </a>	-->
		</div>	
	</div>
	
	
	<br>
	<br><br><br><br><br>

	<div class="container" align="center"  style="position:relative; vertical-align:middle ;background-image: linear-gradient(to bottom, #758ff2, #96aaf6); border-style:solid; border-color: #344996 ; border-radius: 4px;box-shadow: 0 15px 20px rgba(0, 0, 0, .175); height: 60px;width:100%">
		<div align="left">
			<label  style=" align:left; margin-top:14px; font-size:19px"> Feira de Santana - Ba:</label> 
			<label style="font-wiegth:normal; margin-left:15px"> Av. Maria Quitéria, nº 1972 - Tel.: (75) 3604-0900 </label>
		</div>
	</div>

	<script>
		$("#load").hide();
		/*$("input[name=entrar]").click(function(){
			window.location.href= "pags/inicio.php";
		});
		
		$(function(){
			
			$("input[name=entrar]").click(function(){
				//$("#div-into")load.("pags/inicio.php");
				$("#load").show();

				var user= $("input[name=usuario]").val();
				console.log(user);
				var senha= $("input[name=senha]").val();
				console.log(senha);	

				$.ajax({
					type: "POST",
					data: {flag: 2, user:user, senha:senha},
					url: "logic/logic.php",
					datatype: "html",
					success: function(result,status){
						console.log(result);
						if(result!=1){
							window.location.href= "pags/inicio.php";
							console.log("entrou");
							$("#load").hide();
						}else{
							alert("Usuário ou senha incorretos!");
							$("#load").hide();
						}
					},
					complete: function(result){
						console.log(status);
					}
				});	
			});

			$("body").keypress(function(event) {
	    		if (event.which == 13) {
	    			console.log("enter!");
	    			$("#load").show();

					var user= $("input[name=usuario]").val();
					console.log(user);
					var senha= $("input[name=senha]").val();
					console.log(senha);	

					$.ajax({
						type: "POST",
						data: {flag: 2, user:user, senha:senha},
						url: "logic/logic.php",
						datatype: "html",
						success: function(result,status){
							console.log(result);
							if(result!=1){
								window.location.href= "pags/inicio.php";
								console.log("entrou");
								$("#load").hide();
							}else{
								alert("Usuário ou senha incorretos!");
								$("#load").hide();
							}
						},
						complete: function(result){
							console.log(status);
						}
					});	
	    		}
	    	});
		});
		*/
	</script>
  </body>
</html>
