
<div align="center">
	<div  style="background-color:#E9E7E7;border-radius: 8px;box-shadow: 0 15px 20px rgba(0, 0, 0, .175); height: 450px;width:950px; border-style: double;">
		<br>	
		<div id="consulta">


			<div class="col-md-2 column">
				<ul class="nav nav-tabs nav-stacked">
					<li class="nav14 active" id="nav_imovel">
						<a href="#">Por Imovel</a>
					</li>
					<li class="nav24" id="nav_pessoa">
						<a href="#">Por Pessoa</a>
					</li>				
				</ul>
				<br><br><br><br><br><br><br><br><br><br><br>
			</div>


		<div id="imovel" class="col-md-10 column">
			<div id="busca_imovel">
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Descrição</label>
	                <div class="col-sm-7">
	                    <input type="text" class="form-control" align="left" style="width:100%; align:left" id="concept" name="descri">
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Endereço</label>
	                <div class="col-sm-7">
	                    <input type="text" class="form-control" align="left" style="width:100%; align:left" id="concept" name="end">
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Bairro</label>
	                <div class="col-sm-7">
	                    <input type="text" class="form-control" align="left" style="width:100%; align:left" id="concept" name="bai">
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Data</label>
	                <div class="col-sm-3">
	                    <input type="date" class="form-control" align="left" style="width:100%; align:left" id="concept" name="dt_ini">
	                </div>
	                <div class="col-sm-3">
	                    <input type="date" class="form-control" align="left" style="width:100%; align:left" id="concept" name="dt_fim">
	                </div>
	            </div>
				<br>
				<div class="form-group" style="display:none">
	                <label for="concept" align="right" class="col-sm-2 control-label">Vencimento</label>
	                <div class="col-sm-3">
	                    <input type="date" class="form-control" align="left" style="width:100%; align:left" id="concept" name="ven_ini">
	                </div>
	                <div class="col-sm-3">
	                    <input type="date" class="form-control" align="left" style="width:100%; align:left" id="concept" name="ven_fim">
	                </div>
	            </div>

	            <div class="form-group" style="width:755px; position:relative; top:50px" align="right">
		            <input type="button"   name="bt_imovel" id="bt_imovel" value="Buscar" align="center"  class="btn btn-primary btn-lg ">
				</div>
			</div>

			<!--	------------------------------------- TABELAS ------------------------------------------------------------- -->

			<div id="tab_imovel">
				<div align="right" >
					<input type="button" value="voltar" name="voltar_imovel" class="btn btn-primary btn-md " >
				</div>
				<table class="table table-hover table-bordered" style="width:750px;  ">
					<thead style="background-image: linear-gradient(to bottom, #699BF7, #2F75F7); display: table-row; ">
						<tr>
							<th width="217px">
								Descriçaõ
							</th>
							<th width="120px">
								Bairro
							</th>
							<th width="150px">
								Proprietario						
							</th>
							<th width="150px">
								Vencimento						
							</th>
							<th width="90px">
								
							</th>
							<th width="20px">						
							</th>
						</tr>
					</thead>
					<tbody id="tb_imovel" style=" height: 235px; overflow-y: auto; display: block; width:100%;  float: left">
					</tbody>
				</table>
			</div>





			<!--	------------------------------------ DESCRIÇÃO DETALHADA IMOVEL ----------------------------------- -->

			<div id="info_imovel">
				<label align="center"> Informações Gerais </label>
				<br>
				<div align="right" >
					<input type="button" value="voltar" name="voltar_info_imovel" class="btn btn-primary btn-md " >
				</div>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Descrição:</label>
	                <div class="col-sm-7" align="left">
	                    <label style="font-weight: normal;" id="descri">		</label>
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Endereço:</label>
	                <div class="col-sm-6" align="left">
	                    <label style="font-weight: normal;" id="end">		</label>
	                </div>
	                <label for="concept" align="right" class="col-sm-1 control-label">Num:</label>
	                <div class="col-sm-2" align="left">
	                    <label style="font-weight: normal;" id="num">		</label>
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Bairro:</label>
	                <div class="col-sm-7" align="left">
	                    <label style="font-weight: normal;" id="bai">		</label>
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Cidade:</label>
	                <div class="col-sm-7" align="left">
	                    <label style="font-weight: normal;" id="cid">		</label>
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">CEP:</label>
	                <div class="col-sm-7" align="left">
	                    <label style="font-weight: normal;" id="cep">		</label>
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Proprietario:</label>
	                <div class="col-sm-4" align="left">
	                    <label style="font-weight: normal;" id="prop">		</label>
	                </div>
	                <label for="concept" align="right" class="col-sm-2 control-label">Inquilino:</label>
	                <div class="col-sm-4" align="left">
	                    <label style="font-weight: normal;" id="inq">		</label>
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Contrato:</label>
	                <div class="col-sm-3" align="left">
	                    <label style="font-weight: normal;" id="dt_ini">		</label>
	                </div>
	                <div class="col-sm-3" align="left">
	                    <label style="font-weight: normal;" id="dt_fim">		</label>
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label" style="font-size:12px">Cadastrado em:</label>
	                <div class="col-sm-4" align="left">
	                    <label style="font-weight: normal;" id="data">		</label>
	                </div>
	            </div>
	            <br>
	            <!--	<div id="googleMap" style="width:200px;height:200px;"></div>-->

			</div>
		</div>

		<!--	---------------------------------- FIM DO IMOVEL 	--------------------------------------		-->
		<!--	---------------------------------- BUSCA POR PESSOA 	--------------------------------------		-->

		<div id="pessoa" class="col-md-10 column">
			<div id="busca_pessoa">
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Nome</label>
	                <div class="col-sm-7">
	                    <input type="text" class="form-control" align="left" style="width:100%; align:left" id="concept" name="nome">
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">CPF</label>
	                <div class="col-sm-7">
	                    <input type="text" class="form-control" align="left" style="width:100%; align:left" id="concept" name="cpf">
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Tipo</label>
	                <div class="col-sm-7">
	                    <select  class="form-control" align="left" style="width:100%; align:left" id="tipo">
	                    	<option value="1">	Inquilino	</option>
	                    	<option value="0">	Proprietario	</option>
	                    </select>
	                </div>
	            </div>


	            <div class="form-group" style="width:755px; position:relative; top:50px" align="right">
		            <input type="button"   name="bt_pessoa" id="bt_pessoa" value="Buscar" align="center"  class="btn btn-primary btn-lg ">
				</div>
			</div>

			<!--	------------------------------------- TABELAS ------------------------------------------------------------- -->

			<div id="tab_pessoa">
				<div align="right" >
					<input type="button" value="voltar" name="voltar_pessoa" class="btn btn-primary btn-md " >
				</div>
				<table class="table table-hover table-bordered" style="width:750px;  ">
					<thead style="background-image: linear-gradient(to bottom, #699BF7, #2F75F7); display: table-row; ">
						<tr>
							<th width="217px">
								Nome
							</th>
							<th width="135px">
								CPF
							</th>
							<th width="135px">
								RG
							</th>
							<th width="150px">
								Tipo
							</th>
							<th width="90px">
								
							</th>
							<th width="20px">						
							</th>
						</tr>
					</thead>
					<tbody id="tb_pessoa" style=" height: 235px; overflow-y: auto; display: block; width:100%;  float: left">
					</tbody>
				</table>
			</div>


			<!--	------------------------------------ DESCRIÇÃO DETALHADA PESSOA ----------------------------------- -->

			<div id="info_pessoa">
				<label align="center"> Informações Gerais </label>
				<br>
				<div align="right" >
					<input type="button" value="editar" name="editar_info_pessoa" class="btn btn-primary btn-md " >
					<input type="button" value="voltar" name="voltar_info_pessoa" class="btn btn-primary btn-md " >
				</div>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Nome:</label>
	                <div class="col-sm-7" align="left">
	                    <label style="font-weight: normal;" id="nome">		</label>
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">CPF:</label>
	                <div class="col-sm-4" align="left">
	                    <label style="font-weight: normal;" id="cpf">		</label>
	                </div>
	                <label for="concept" align="right" class="col-sm-2 control-label">RG:</label>
	                <div class="col-sm-4" align="left">
	                    <label style="font-weight: normal;" id="rg">		</label>
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Nascimento:</label>
	                <div class="col-sm-3" align="left">
	                    <label style="font-weight: normal;" id="nasc">		</label>
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label" style="font-size:12px">Cadastrado em:</label>
	                <div class="col-sm-4" align="left">
	                    <label style="font-weight: normal;" id="cadastro">		</label>
	                </div>
	            </div>
	            <br>

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
					</tbody>
				</table>
	            <!--	<div id="googleMap" style="width:200px;height:200px;"></div>-->

			</div>


		<!-- 	----------------------- EDITAR INFORMAÇÕES ------------------------------------------ -->

		<div id="edit_info_pessoa">
				<label align="center"> Informações Gerais </label>
				<br>
				<div align="right" >
					<input type="button" value="Cancelar" name="cancelar_pessoa" class="btn btn-primary btn-md " >
				</div>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Nome:</label>
	                <div class="col-sm-7" align="left">
	                    <input type="text" class="form-control" align="left" style="width:100%; align:left" id="concept" name="ed_nome">
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">CPF:</label>
	                <div class="col-sm-4" align="left">
	                    <input type="text" class="form-control" align="left" style="width:100%; align:left" id="concept" name="ed_cpf">
	                </div>
	                <label for="concept" align="right" class="col-sm-2 control-label">RG:</label>
	                <div class="col-sm-4" align="left">
	                    <input type="text" class="form-control" align="left" style="width:100%; align:left" id="concept" name="ed_rg">
	                </div>
	            </div>
				<br>
				<div class="form-group">
	                <label for="concept" align="right" class="col-sm-2 control-label">Nascimento:</label>
	                <div class="col-sm-3" align="left">
	                    <input type="date" class="form-control" align="left" style="width:100%; align:left" id="concept" name="ed_nasc">
	                </div>
	            </div>
				<br><br>
				<div align="right" >
					<input type="button" value="Salvar" name="salvar_pessoa" class="btn btn-primary btn-md " >
				</div>

	            <!--	<div id="googleMap" style="width:200px;height:200px;"></div>-->

			</div>

		</div>


		

	</div>
</div>


<script>
	
	$("#pessoa").hide();
	$("#tab_imovel").hide();
	$("#info_imovel").hide();
	$("#tab_pessoa").hide();
	$("#info_pessoa").hide();
	$("#edit_info_pessoa").hide();

	$("#nav_imovel").click(function(){
		$("li.nav24").removeClass("active");
		$("li.nav34").removeClass("active");
		$("li.nav14").addClass("nav14 active");
		$("#imovel").show();
		$("#pessoa").hide();	
		console.log("CONTRATO SELECIONADO");
	});

	$("#nav_pessoa").click(function(){
		$("li.nav14").removeClass("active");
		$("li.nav34").removeClass("active");
		$("li.nav24").addClass("nav24 active");
		$("#imovel").hide();
		$("#pessoa").show();	
		console.log("ASSOCIADO SELECIONADO");
	});

	

		
	$("input[name=bt_imovel]").click(function(){
		$("#tab_imovel").show('b');
		$("#busca_imovel").hide();
		var descri= $("input[name=descri]").val();
		var end= $("input[name=end]").val();
		var bai= $("input[name=bai]").val();
		var dt_ini= $("input[name=dt_ini]").val().substr(0,4)+$("input[name=dt_ini]").val().substr(5,2)+$("input[name=dt_ini]").val().substr(8,2);    
		var dt_fim= $("input[name=dt_fim]").val().substr(0,4)+$("input[name=dt_fim]").val().substr(5,2)+$("input[name=dt_fim]").val().substr(8,2);    
		var ven_ini= $("input[name=ven_ini]").val().substr(0,4)+$("input[name=ven_ini]").val().substr(5,2)+$("input[name=ven_ini]").val().substr(8,2);
		console.log(ven_ini);
		var ven_fim= $("input[name=ven_fim]").val().substr(0,4)+$("input[name=ven_fim]").val().substr(5,2)+$("input[name=ven_fim]").val().substr(8,2);    
		$.ajax({
			type: "POST",
			data: {flag: 6, descri:descri,end:end,bai:bai,dt_ini:dt_ini, dt_fim:dt_fim, dt_v_ini:ven_ini, dt_v_fim:ven_fim,cod_inq:'',cod_prop:''},
			url: "../logic/logic.php",
			datatype: "html",
			success: function(result, status){
				console.log(result);
				//alert(result);
				$("#tb_imovel").empty();
				var retorno= JSON.parse(result);
				$(retorno).each(function(ind, elem){
					$("#tb_imovel").append(	'<tr> <th width="217px"> '+elem.DESCRICAO+' </th>     <th width="120px"> '+elem.BAIRRO+' </th>  <th width="150px"> '+elem.PROPRIETARIO+' </th>  <th width="150px"> '+elem.CONTRATO_FIM.substr(6,2)+'/'+elem.CONTRATO_FIM.substr(4,2)+'/'+elem.CONTRATO_FIM.substr(0,4)+' </th>   <th width="90px"> <a href="#" id="a_'+ind+'"> --> </a> </th></tr>'	);
					// AO CLICAR EM UM ITEM ESPECIFICO
					$("#a_"+ind+"").click(function(){
						$("#info_imovel").show();
						$("#tab_imovel").hide();
						$("#descri").empty();
						$("#descri").append(elem.DESCRICAO);
						$("#end").empty();
						$("#end").append(elem.ENDERECO);
						$("#num").empty();
						$("#num").append(elem.NUMERO);
						$("#bai").empty();
						$("#bai").append(elem.BAIRRO);
						$("#cid").empty();
						$("#cid").append(elem.CIDADE);
						$("#cep").empty();
						$("#cep").append(elem.CEP.substr(0,2)+'.'+elem.CEP.substr(2,3)+'-'+elem.CEP.substr(5,3));
						$("label#prop").empty();
						$("label#prop").append(elem.PROPRIETARIO);
						$("label#inq").empty();
						$("label#inq").append(elem.INQUILINO);
						$("#dt_ini").empty();
						$("#dt_ini").append(elem.CONTRATO_INICIO.substr(6,2)+'/'+elem.CONTRATO_INICIO.substr(4,2)+'/'+elem.CONTRATO_INICIO.substr(0,4));

						$("#dt_fim").empty();
						$("#dt_fim").append(elem.CONTRATO_FIM.substr(6,2)+'/'+elem.CONTRATO_FIM.substr(4,2)+'/'+elem.CONTRATO_FIM.substr(0,4));

						$("#data").empty();
						$("#data").append(elem.DATA.substr(6,2)+'/'+elem.DATA.substr(4,2)+'/'+elem.DATA.substr(0,4));
					});
				});

			},
			complete: function(result){
				console.log(status);
			}
		});
	});

	// BREVEMENTE POR PRA CADA ITEM LISTADO!!
	$("#a_imovel").click(function(){
		$("#info_imovel").show();
		$("#tab_imovel").hide();
	});


	$("input[name=bt_pessoa]").click(function(){
		$("#tab_pessoa").show();
		$("#busca_pessoa").hide();
		var nome= $("input[name=nome]").val();
		var cpf= $("input[name=cpf]").val();
		var tipo= $("#tipo").val();
		$.ajax({
			type: "POST",
			data: {flag: 7, nome:nome,cpf:cpf,tipo:tipo},
			url: "../logic/logic.php",
			datatype: "html",
			success: function(result, status){
				console.log(result);
				$("#tb_pessoa").empty();
				var retorno = JSON.parse(result);
				if(tipo==1) var tp= "Inquilino";
				else var tp= "Proprietário";
				$(retorno).each(function(ind, elem){
					$("#tb_pessoa").append(	'<tr> <th width="217px"> '+elem.NOME+' </th>   <th width="135px"> '+elem.CPF.substr(0,3)+'.'+elem.CPF.substr(3,3)+'.'+elem.CPF.substr(6,3)+'-'+elem.CPF.substr(9,2)+' </th>   <th width="135px"> '+elem.RG+' </th>  <th width="150px"> '+tp+' </th>   <th width="90px"> <a href="#" id="a_'+ind+'"> --> </a> </th></tr>'	);
					
					$("#a_"+ind+"").click(function(){
						$("#info_pessoa").show();
						$("#tab_pessoa").hide();
						$("#nome").empty();
						$("#nome").append(elem.NOME);
						$("#cpf").empty();
						$("#cpf").append(elem.CPF.substr(0,3)+'.'+elem.CPF.substr(3,3)+'.'+elem.CPF.substr(6,3)+'-'+elem.CPF.substr(9,2));
						$("#rg").empty();
						$("#rg").append(elem.RG);
						$("#nasc").empty();
						$("#nasc").append(elem.DATA_NASCIMENTO);
						$("#cadastro").empty();
						$("#cadastro").append(elem.CADASTRO);

						if(elem.ID_PROPRIETARIO){ 
							var tipo_pessoa_1= elem.ID;
							var tipo_pessoa_2= '';
						}
						else{ 	
							var tipo_pessoa_1= '';
							var tipo_pessoa_2= elem.ID;
						}
						$.ajax({
							type: "POST",
							data: {flag: 6, descri:'',end:'',bai:'',dt_ini:'', dt_fim:'', dt_v_ini:'', dt_v_fim:'',cod_inq:tipo_pessoa_2,cod_prop:tipo_pessoa_1},
							url: "../logic/logic.php",
							datatype: "html",
							success: function(result, status){
								console.log(result);
								//alert(result);
								$("#tb_propriedades").empty();
								var retorno_2= JSON.parse(result);
								$(retorno_2).each(function(ind_2, elem_2){
									$("#tb_propriedades").append(	'<tr> <th width="130px"> '+elem_2.ID_IMOVEL+' </th>   <th width="312px"> '+elem_2.DESCRICAO+' </th>   <th width="135px"> '+elem_2.BAIRRO+' </th>  <th width="150px"> '+elem_2.CONTRATO_FIM.substr(6,2)+'/'+elem_2.CONTRATO_FIM.substr(4,2)+'/'+elem_2.CONTRATO_FIM.substr(0,4)+' </th>   </th></tr>'	);
								});
							},
							complete: function(result){
								console.log(status);
							}
						});
						$("input[name=editar_info_pessoa]").click(function(){
							$("#edit_info_pessoa").show();
							$("#info_pessoa").hide();

							$("input[name=ed_nome]").val(elem.NOME);
							$("input[name=ed_cpf]").val(elem.CPF);
							$("input[name=ed_rg]").val(elem.RG);
							$("input[name=ed_nasc]").val(elem.DATA_NASCIMENTO);

							$("input[name=salvar_pessoa]").click(function(){
								$.ajax({
									type: "POST",
									data: {flag:100 ,nome:$("input[name=ed_nome]").val(), rg:$("input[name=ed_rg]").val(), cpf:$("input[name=ed_cpf]").val(), nasc:$("input[name=ed_nasc]").val(), id:elem.ID},
									url: "../logic/logic.php",
									datatype:"html",
									success: function(result,status){
										console.log(result);
										if(result == 1){ 	
											alert("Alterado com sucesso!");
											//window.close("../containers/proprietario_2.php", "_blank", "height=345, width=650");
										}
										else{ 
											alert("Erro ao alterar!");
										} },
											complete: function(result){
												console.log(status);
											}
									
									});
							});
						});
					});
				});
			},
			complete: function(result){
				console.log(status);
			}
		});
	});

	$("input[name=voltar_imovel]").click(function(){
		$("#busca_imovel").show();
		$("#tab_imovel").hide();
	});

	$("input[name=voltar_info_imovel]").click(function(){
		$("#tab_imovel").show();
		$("#info_imovel").hide();
	});

	$("input[name=voltar_pessoa]").click(function(){
		$("#busca_pessoa").show();
		$("#tab_pessoa").hide();
	});

	$("input[name=voltar_info_pessoa]").click(function(){
		$("#tab_pessoa").show();
		$("#info_pessoa").hide();
	});


	

	$("input[name=cancelar_pessoa]").click(function(){
		$("#edit_info_pessoa").hide();
		$("#info_pessoa").show();
	});


	//-------------------- MAPA ------------------------------


var map;
var markers = [];

function initialize() {
  var haightAshbury = new google.maps.LatLng(-12.259915056509431 ,-38.964385986328125);
  var mapOptions = {
    zoom: 13,
    center: haightAshbury,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById("googleMap"),
      mapOptions);

  // This event listener will call addMarker() when the map is clicked.
  google.maps.event.addListener(map, 'click', function(event) {
    addMarker(event.latLng);
  });

  // Adds a marker at the center of the map.
  addMarker(haightAshbury);
}



// Add a marker to the map and push to the array.
function addMarker(location) {
	clearMarkers();
  markers = [];
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  markers.push(marker);
}

// Sets the map on all markers in the array.
function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setAllMap(null);
}

// Shows any markers currently in the array.
function showMarkers() {
  setAllMap(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
  console.log(markers);
}

google.maps.event.addDomListener(window, 'load', initialize);

function show(){
	console.log(markers[0].position['k']);
	console.log(markers[0].position['B']);
	if(confirm("Deseja finalizar marcação?"))	window.close("../containers/google_mapz.php", "_blank");

}


</script>




