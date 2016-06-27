

<div align="center">
	<div  style="background-color:#E9E7E7;  border-radius: 8px;box-shadow: 0 15px 20px rgba(0, 0, 0, .175); height: 480px;width:950px; border-style: double; ">
		<br>
		<div id="consulta">
			<br>					<!--action="../logic/upload.php"-->
			<table class="table table-hover table-bordered" style="width:750px;  ">
					<thead style="background-image: linear-gradient(to bottom, #699BF7, #2F75F7); display: table-row; ">
						<tr>
							<th width="130px">
								Cod. Imovel
							</th>
							<th width="312px">
								Descrição
							</th>
							<th width="135px">
								Bairro
							</th>
							<th width="150px">
								Vencimento
							</th>
							<th width="20px">						
							</th>
						</tr>
					</thead>
					<tbody id="tb_propriedades" style=" height: 135px; overflow-y: auto; display: block; width:100%;  float: left">
						<?php
							include '../class/BD.class.php';
							include '../class/BANCO.class.php';
							$banco = new BANCOGMF();
							
							$result = $banco->selecionarImovel('','','','',date("Y").date("m").date("d"),'','','','');
							//echo $result;
							$result = json_decode($result,true);
							
							for($i = 0; $i < count($result) ;$i++) {
								$table = $result[$i];
								?>
                        <tr>
                        <td width="130px"><?php echo $table["ID_IMOVEL"] ?></td>
                        <td width="312px"><?php echo $table["DESCRICAO"] ?></td>
                        <td width="135px"><?php echo $table["BAIRRO"] ?></td>
                        <td width="150px"><?php echo $table["CONTRATO_FIM"] ?></td>
                        <td width="20px"></td>
                        </tr>
                        
                                <?php
							}
						?>
                    </tbody>
				</table>
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





