<?php
ob_start();
@session_start();

require("../class/BANCO.class.php");
require("../class/BD.class.php");
$banco1 = new BANCOGMF();

if(!isset($_SESSION["login"])){
	$_SESSION["login"] = "";
}
if(!isset($_SESSION["senha"])){
	$_SESSION["senha"] = "";
}

if(isset($_SESSION["login"]) && isset($_SESSION["senha"])) {
	if($banco1->acessoUsuario($_SESSION["login"],$_SESSION["senha"])== 0){
		$_SESSION["login"] = "";
		$_SESSION["senha"] = "";
		echo '<meta http-equiv="refresh" content=0;url="../index.php">';
		exit;
	}
}

?>
<!DOCTYPE html>



<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Imóveis</title>

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
	</script>
	<script type="text/javascript" src="..\js/jquery.min.js" ></script>
	<script type="text/javascript" src="..\js/bootstrap.min.js"></script>
	<script type="text/javascript" src="..\js/bootstrap.js"></script>
	<script type="text/javascript" src="..\js/inicio.js"></script>
    <script type="text/javascript">
	function buscar(){
			$("#container").empty();
			$("#container").load("../containers/pesquisar.php");		
			$("li").removeClass("active");
			$("li.nav6").addClass("nav6 active");
			console.log("inquilino");
			console.log($(window).width() +'x'+ $(window).height());
	}
	</script>
	

	<link rel="shortcut icon" href="..\img\Untitled-1.png" type="image/x-icon">
	<link href="..\css/bootstrap.min.css" rel="stylesheet">
</head>

<body background="..\img\background-page.jpg">
	
	<!--		------------------------------------------------------------ -->
			
			
		<!--<img src="..\img\LINE.png" width="100%" style=" opacity: 0.8; position:absolute; top:80px" />-->
		<div style="position:relative; right:40px">
			<div id="navi" class="container"  align="center" style="position:absolute; top:60px; left:70px; width:1200px;  " >
				<div class="row clearfix "  >
					<div class="col-md-1 column" >				
					</div>
					<div style="padding-right:90px" class="col-md-11 column" >
						<ul class="nav nav-pills " style="background-color:#e3e5e9; border-radius:4px;  align:center; opacity:0.85;">
							<li class="nav1" style="border-right-style:solid; border-color:#bdbdbe;  left:50px">
								<a href="#" id="novo" style="font-size:14px">Cadastro Imóvel</a>
							</li>
							<li class="nav2" style="left:50px">
								<a href="#" id="prop" style="font-size:14px">	Proprietário</a>
							</li>
							<li class="nav5" style="border-left-style:solid; border-color:#bdbdbe;  left:50px">
								<a href="#" id="inq" style="font-size:14px">	Inquilino</a>
							</li>
							<li class="nav6" style="border-left-style:solid; border-color:#bdbdbe;  left:50px">
								<a id="buscara" onClick="buscar()" href="#" style="font-size:14px">	Pesquisar</a>
							</li>
							<li class="nav7" style="border-left-style:solid; border-color:#bdbdbe;  left:50px">
								<a href="#" id="vencimentos" style="font-size:14px">	Vencidos</a>
							</li>
							<li class=" pull-right" style="left:40px">
							</li>
							<li class="nav4 pull-right" style="border-left-style:solid; border-color:#bdbdbe; right:105px">
								<a href="sair.php"  id="sair" style="font-size:14px" >Sair</a>
							</li>
							<li class="nav3 pull-right" style="border-left-style:solid; border-color:#bdbdbe; right:105px">
								<a href="#" id="config" style="font-size:14px">Configurações</a>
							</li>
												
						</ul>
					</div>
				</div>
			</div>

			<img src="..\img\CIRCULO_LOGO_REI.png" width="150px"style="padding-bottom:-50px; margin-left:70px; margin-top:10px; position:absolute" /><!--<img src="..\img\RODAPE_REI_2.png" align="right" width="230px"style="position:absolute; align:right; left:1170px; top: 550px" />-->
			<div style="position:absolute; align:right; margin-top:40%; margin-left:86%"></div>

		</div>
	<!--		------------------------------------------------------------ -->

	
	<div id="container" style="position:relative; top:130px; right:30px" />
	<br><br>
	<!--<img src="..\img\RODAPE_REI.jpg" align="CENTER" height="40px" width="100%"  />-->
	
	
</body>
</html>
