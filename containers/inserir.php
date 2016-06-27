

<div align="center">
	<div  style="background-color:#E9E7E7;  border-radius: 8px;box-shadow: 0 15px 20px rgba(0, 0, 0, .175); height: 480px;width:950px; border-style: double; ">
		<br>
		<div id="consulta">
			<br>					<!--action="../logic/upload.php"-->
			<form  action="../logic/upload.php" method="post" enctype="multipart/form-data" name="cadastro" >
							
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Descrição</label>
	                <div class="col-sm-9">
	                    <input type="text" name="descri" class="form-control" align="left" style="width:100%; align:left" id="descri">
	                </div>
	            </div>
	            <br>
	            <div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Endereço</label>
	                <div class="col-sm-5">
	                    <input type="text" class="form-control" align="left" style="width:130%; align:left" id="concept" name="end">
	                </div>
	                <label for="concept" align="right" class="col-sm-2 control-label">Num</label>
	                <div class="col-sm-2" align="left">
	                	<input type="text" class="form-control" align="center" style="width:52%; align:center" id="concept" name="num">
	                </div>
	                <div class="col-sm-1" align="left" >
	                	<!-- <input type="button" name="mapa" id="mapa" value="mapa" align="center"  style="position:relative; right:90px" class="btn btn-primary btn-md "> -->
	                </div>
	            </div>
	            <br>
	            <div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Cidade</label>
	                <div class="col-sm-5">
	                    <input type="text" class="form-control" align="left" style="width:100%; align:left" id="concept" name="cid">
	                </div>
	                <label for="concept" align="center" class="col-sm-1 control-label">CEP</label>
	                <div class="col-sm-3">
	                    <input type="text" class="form-control" align="left" style="width:100%; align:left" id="concept" name="cep">
	                </div>
	            </div>
	            <br>
	            <div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Bairro</label>
	                <div class="col-sm-9">
	                    <input type="text" class="form-control" align="left" style="width:100%; align:left" id="concept" name="bai">
	                </div>
	            </div>
	            <br>

	            <div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Proprietário</label>
	                <div class="col-sm-7">
	                    <select type="text" class="form-control" align="left" style="width:106%; align:left; margin-right:80px" id="concept" name="prop">
	                	<option value="0">Nenhum </option>
	                	<?php
	                		require_once("../class/BD.class.php");
							require_once("../class/BANCO.class.php");
							$banco= new BANCOGMF();
							$query= $banco->selectPessoa("","",2);
							
							foreach ($query as $key => $value) {
								echo "<option value=".$query[$key]['id']." > ".$query[$key]['nome']." </option>";
							}
	                	?>
	                	</select>
	                </div>
	                <div class="col-sm-2" style="display:none">
	                     <!-- <input type="button" name="prop" id="prop" value="Cadastrar" align="center"  class="btn btn-primary btn-md " autocomplete="on"> -->
	                </div>
	            </div>
	            <br>
	            <div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Inquilino</label>
	                <div class="col-sm-7">
	                    <select type="text" class="form-control" align="left" style="width:106%; align:left; margin-right:80px" id="concept" name="inq">
	                	<option value="0"> Nenhum </option>
	                	<?php
	                		$query_2= $banco->selectPessoa("","",1);
							foreach ($query_2 as $key => $value) {
								echo "<option value=".$query[$key]['id']." > ".$query[$key]['nome']." </option>";
							}
	                	?>
	                	</select>
	                </div>
	                <div class="col-sm-2" style="display:none">
	                    <!-- <input type="button" name="inq" id="inq" value="Cadastrar" align="center"  class="btn btn-primary btn-md " autocomplete="on"> -->
	                </div>
	            </div>
	            <br>
	            <div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Datas do Contrato</label>
	                <div class="col-sm-3">
	                    <input type="date" class="form-control" align="left" style="width:100%; align:left; margin-right:80px" id="concept" name="dt_ini">
	                </div>
	                <div class="col-sm-3">
	                    <input type="date" class="form-control" align="left" style="width:100%; align:left; margin-right:80px" id="concept" name="dt_fim">
	                </div>
	            </div>

	            <br><br>
	            <div class="form-group">
	            	<div style="">
		            	Selecione o contrato
		            </div>
	            	<input type="file" name="contrato" id="contrato"  align="center"  class="btn btn-primary btn-md " />	
		            <div style="">
		            	Selecione a foto.
		            </div>
		            <input type="file" name="imagem" id="imagem"  align="center"  class="btn btn-primary btn-md " />	
		            
		            <!-- MUDAR PARA SUBMIT PARA FUNCIONAR -->
		            <div  align="right" style="position:relative; right:15px; bottom:60px">
		           		<input type="submit"   name="transferir" id="transferir" value="Cadastrar" align="center"  class="btn btn-primary btn-lg ">
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





