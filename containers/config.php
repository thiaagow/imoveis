<?php
ob_start();
@session_start();
?>
<script type="text/javascript" src="..\js\config.js"></script> 

<div align="center">
	<div  style="background-color:#E9E7E7;border-radius: 8px;box-shadow: 0 15px 20px rgba(0, 0, 0, .175); height: 300px;width:800px; border-style: double;">
		<br>
		<div class="col-md-3 column">
			<ul class="nav nav-tabs nav-stacked">
				<li class="nav12 active" id="nav_login">
					<a href="#">Criar Login</a>
				</li>
				<li class="nav22" id="nav_senha">
					<a href="#">Mudar Senha</a>
				</li>
				<li class="nav32" id="nav_email">
					<a href="#">Configurar E-mail</a>
				</li>			
			</ul>
		</div>
		<!-- 	---------------------- OPÇÕES ---------------------------------- -->

		<div id="login" class="col-md-9 column">
			 <BR>
			<table align="left">
				<tr>
					<th>	<label> Usuário: </label>	</th>
					<th style="padding-left:10px">	<input type="text" name="in_user" class="form-control" style="width:150px; margin-left:47px "  />	</th>
					<th> <label style="font-weight: normal; margin-left:10px">	Mín 6 / Máx 18 - Caractere </label> 	</th>
				</tr>
			</table>
			<br><br>
			<table align="left">
				<tr>
					<th >	<label> Senha: </label>	</th>
					<th style="padding-left:20px">	<input type="password" name="in_senha" class="form-control" style="width:150px; margin-left:47px "  />	</th>
				</tr>
			</table>
			<br><br>
			<table align="left">
				<tr>
					<th >	<label> Repita Senha: </label>	</th>
					<th style="padding-left:20px">	<input type="password" name="in_senha_2" class="form-control" style="width:150px; "  />	</th>
				</tr>
			</table>
			<br><br><br><br><br>
			<div align="right">
				<input type="button"  name="in_usuario" value="Salvar" align="center"  class="btn btn-primary btn-lg ">
			</div>
		</div>	


		<div id="senha" class="col-md-9 column">
			 <BR>
			<table align="left">
				<tr>
					<th>	<label> Senha atual: </label>	</th>
					<th style="padding-left:10px">	<input type="password" name="senha_atual" class="form-control" style="width:150px; margin-left:20px "  />	</th>
				</tr>
			</table>
			<br><br>
			<table align="left">
				<tr>
					<th >	<label> Nova Senha: </label>	</th>
					<th style="padding-left:20px">	<input type="password" name="senha_nova" class="form-control" style="width:150px; margin-left:10px"  />	</th>
				</tr>
			</table>
			<br><br>
			<table align="left">
				<tr>
					<th >	<label> Repita Senha: </label>	</th>
					<th style="padding-left:20px">	<input type="password" name="senha_nova_2" class="form-control" style="width:150px; "  />	</th>
				</tr>
			</table>
			<br><br><br><br><br>
			<div align="right">
            	<input type="hidden" name="login" value="<?php echo $_SESSION["login"] ?>" />
				<input type="button"  name="senha" value="Salvar" align="center"  class="btn btn-primary btn-lg ">
			</div>
		</div>	
		<?php
		include '../class/BD.class.php';
        include '../class/BANCO.class.php';
		$email = new BANCOGMF();
		?>
		<div id="email" class="col-md-9 column">
			 <BR>
			<table align="left">
				<tr>
					<th>	<label> E-mail: </label>	</th>
					<th style="padding-left:10px">	<input type="text" name="email_atual" class="form-control" value="<?php echo $email->selecionarEmail();?>" style="width:250px; margin-left:20px "  />	</th>
				</tr>
			</table>
			<br><br><br><br><br>
			<div align="right">
				<input type="button"  name="confi" value="Salvar" align="center"  class="btn btn-primary btn-lg ">
			</div>
		</div>	

	</div>
</div>

<script>
	$("#senha").hide();
	$("#email").hide();
	$("#nav_login").click(function(){
		$("li.nav22").removeClass("active");
		$("li.nav32").removeClass("active");
		$("li.nav12").addClass("nav12 active");
		$("#login").show();
		$("#email").hide();
		$("#senha").hide();	
		console.log("Login ");		
	});
	$("#nav_senha").click(function(){
		$("li.nav12").removeClass("active");
		$("li.nav32").removeClass("active");
		$("li.nav22").addClass("nav22 active");
		$("#login").hide();
		$("#email").hide();
		$("#senha").show();	
		console.log("Senha ");
	});
	$("#nav_email").click(function(){
		$("li.nav12").removeClass("active");
		$("li.nav22").removeClass("active");
		$("li.nav32").addClass("nav32 active");
		$("#login").hide();
		$("#senha").hide();
		$("#email").show();	
		console.log("EMAIL ");
	});
</script>

