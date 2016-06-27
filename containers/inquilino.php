<script type="text/javascript" src="../js/cadastro.js"></script>

<div align="center">
	<div  style="background-color:#E9E7E7;  border-radius: 8px;box-shadow: 0 15px 20px rgba(0, 0, 0, .175); height: 480px;width:950px; border-style: double; ">
		<br>
		<div id="consulta">
			<br>					<!--action="../logic/upload.php"-->
			<form  action="../logic/proprietario.php" method="post" enctype="multipart/form-data" name="cadastro" >
							
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Nome</label>
	                <div class="col-sm-9">
	                    <input type="text" name="nome" class="form-control" align="left" style="width:100%; align:left" id="concept">
	                </div>
	            </div>
	            <br>
	            <div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">CPF</label>
	                <div class="col-sm-4">
	                    <input type="text" class="form-control" align="left" style="width:130%; align:left" id="concept" name="cpf">
	                </div>
	            </div>
	            <br>
	            <div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Nascimento</label>
	                <div class="col-sm-3">
	                    <input type="date" class="form-control" align="left" style="width:100%; align:left" id="concept" name="nasc">
	                </div>
	            </div>
                <br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Conjugue</label>
	                <div class="col-sm-9">
	                    <input type="text" class="form-control" align="left" style="width:100%; align:left" id="concept" name="conjugue">
	                </div>
	            </div>
                <br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Fiador</label>
	                <div class="col-sm-9">
	                    <input type="text" class="form-control" align="left" style="width:100%; align:left" id="concept" name="fiador">
	                </div>
	            </div>
                <div class="form-group">
		            <!-- MUDAR PARA SUBMIT PARA FUNCIONAR -->
		            <div  align="right" style="right:15px; bottom:60px">
		           		<input type="button"   name="cad_iqui" id="cad_iqui" value="Cadastrar" align="center"  class="btn btn-primary btn-lg ">
		           	</div>
				</div>
			</form>
		</div>
		<img src="..\img\loader.gif" id="load" style="width:40px" height="40px" />
		<!--
		<a href="#"><img alt="140x140" src="http://lorempixel.com/140/140/" class="img-rounded" /> </a>
		<a href="#"><img alt="140x140" src="http://lorempixel.com/140/140/" class="img-rounded" /> </a>
		-->
	</div>
</div>





<script>

	$("input[name=prop]").click(function(){
		console.log("PROPRIETARIO");
		window.open("../containers/proprietario_2.php", "_blank", "height=285, width=790");
	});
	$("input[name=inq]").click(function(){
		console.log("PROPRIETARIO");
		window.open("../containers/inquilino_2.php", "_blank", "height=285, width=790");
	});
	$("input[name=mapa]").click(function(){
		console.log("MAPA");
		window.open("../containers/google_mapz.php", "_blank", "height=455, width=630");
	});

	var descri= $("input[name=descri]").val();
	
	$("#load").hide();

</script>





