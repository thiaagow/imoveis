<?php
class BANCOGMF{
	public $conexao;
	public $bd;
	
	public function __construct(){
		$this->bd = new BD();
		$this->conexao = new MySQLi($this->bd->server,$this->bd->usuario,$this->bd->senha,$this->bd->db);
	}
	
	public function selectPessoa($a1,$a2,$tipo){
		$conexao = $this->conexao;
		$retorno = "";
		if($tipo == '1') {//inquilino
			$sql = "SELECT * FROM `pessoa` WHERE tipo=1";
			$res = $conexao->query($sql);
		}
		if($tipo == '2'){//proprietario
			$sql = "SELECT * FROM `pessoa` WHERE tipo=0";
			$res = $conexao->query($sql);
		}
		$i =0;
		while($linha = $res->fetch_array()){
			$retorno[$i] = $linha;
			$i++;
		}
		return $retorno;
	}
	function selecionarPessoa($nome,$cpf,$tipo) {
		$sql = "SELECT * FROM `pessoa` WHERE tipo=".$tipo." AND nome='".$nome."' AND cpf='".$cpf."'";
		$res = $this->conexao->query($sql);
		if($res->num_rows > 0) {
			$retorno = 1;
		} else {
			$retorno = 0;
		}
		return $retorno;
	}
	function addProprietario($nome,$cpf,$rg,$nasc) {
		$data = date("Y-m-d H:i:s");
		$sql = "INSERT INTO `pessoa` (tipo,nome,cpf,rg,nascimento,cadastrado) VALUES (0,";
		$sql .= "'".$nome."','".$cpf."','".$rg."','".$nasc."','".$data."')";
		$this->conexao->query($sql);
		
		return 1;
	}
	
	
	function addInquilino($nome,$cpf,$conjugue,$fiador) {
		$data = date("Y-m-d H:i:s");
		$sql = "INSERT INTO `pessoa` (tipo,nome,cpf,conjugue,fiador,cadastrado) VALUES (1,";
		$sql .= "'".$nome."','".$cpf."','".$conjugue."','".$fiador."','".$data."')";
		$this->conexao->query($sql);
		
		return 1;
	}
	
	
	function addImovel($desc,$end,$num,$cid,$cep,$bairro,$prop,$inq,$dtini,$dtfim,$contrato,$foto) {
		$sql =  "INSERT INTO `imovel`(`descricao`, `endereco`, `num`, `cidade`, `cep`, `bairro`, `proprietario`, ";
		$sql .= "`inquilino`, `contr`, `foto`, `dtini`, `dtfim`) VALUES (";
		$sql .= "'".$desc."','".$end."','".$num."','".$cid."','".$cep."','".$bairro."','".$prop."','".$inq."',";
		$sql .= "'".$contrato."','".$foto."','".$dtini."','".$dtfim."')";
		
		$this->conexao->query($sql);
		
		return "Inserido com sucesso!";
	}
	
	
	function selecionarPessoaCampos($nome,$cpf,$tipo) {
		$sql = "SELECT * FROM `pessoa` WHERE tipo = ".$tipo;
		$retorno = "";
		if($nome != '') {
			$sql .= " AND nome='".$nome."'";
		}
		if($cpf != '') {
			$sql .= " AND cpf='".$cpf."'";
		}
		$res = $this->conexao->query($sql);
		
		$i =0;
		while($linha = $res->fetch_array()){
			$retorno[$i]["ID"] = $linha["id"];
			$retorno[$i]["NOME"] = $linha["nome"];
			$retorno[$i]["CPF"] = $linha["cpf"];
			$retorno[$i]["RG"] = $linha["rg"];
			$retorno[$i]["DATA_NASCIMENTO"] = $linha["nascimento"];
			$retorno[$i]["CADASTRO"] = $linha["cadastrado"];
			$i++;
		}
		
		if($retorno != '') {
			$retorno = json_encode($retorno);
		}
		
		return $retorno;
	}
	
	function alterarProprietario($id,$nome,$cpf,$rg,$nasc) {
		$sql =  "UPDATE `pessoa` SET nome='".$nome."'";
		$sql .= ",cpf='".$cpf."'";
		$sql .= ",rg='".$rg."'";
		$sql .= ",nascimento='".$nasc."'";
		$sql .= " WHERE id =".$id;
		
		$res = $this->conexao->query($sql);
		
		return 1;
	}
	
	function selecionarImovel($descri,$end,$bai,$dt_ini,$dt_fim,$dt_v_ini,$dt_v_fim,$prop,$ind){
		$retorno="";
		if($prop != "" || $ind != ""){
			$sql =  "SELECT * FROM imovel";
			$sql .= " WHERE"; 
			if($prop != "") {
			$sql .= " proprietario=".$prop;
			} else {
			$sql .= " inquilino=".$ind;
			}
			$res = $this->conexao->query($sql);
		} else {
			$sql =  "SELECT * FROM imovel";
			$sql .= " WHERE"; 
			$sql .= " descricao LIKE '".$descri."%' AND";
			$sql .= " endereco LIKE '".$end."%' AND";
			$sql .= " bairro LIKE '".$bai."%'";
			if($dt_ini != "")
			$sql .= " AND dtini >= ".$dt_ini;
			
			if($dt_fim != "")
			$sql .= " AND dtfim <= ".$dt_fim;
			$res = $this->conexao->query($sql);
		}
		$i = 0;
		while($linha = $res->fetch_array()){
			$retorno[$i]["ID_IMOVEL"] = $linha["id"];
			$retorno[$i]["DESCRICAO"] = $linha["descricao"];
			$retorno[$i]["ENDERECO"] = $linha["endereco"];
			$retorno[$i]["NUMERO"] = $linha["num"];
			$retorno[$i]["BAIRRO"] = $linha["bairro"];
			$retorno[$i]["CIDADE"] = $linha["cidade"];
			$retorno[$i]["CEP"] = $linha["cep"];
			$retorno[$i]["PROPRIETARIO"] = $linha["proprietario"];
			$retorno[$i]["INQUILINO"] = $linha["inquilino"];
			$retorno[$i]["CONTRATO_INICIO"] = $linha["dtini"];
			$retorno[$i]["CONTRATO_FIM"] = $linha["dtfim"];
			$retorno[$i]["DATA"] = date("d/m/Y");
			$i++;
		}
		
		
		if($retorno != '') {
			$retorno = json_encode($retorno);
		}
		
		return $retorno;
	}
	
	function selecionarEmail(){
		$sql = "SELECT * FROM conf";
		$res = $this->conexao->query($sql)->fetch_array();
		
		return $res["email"];
	}
	
	
	function alterarEmail($email){
		$sql = "UPDATE conf SET email='".$email."' WHERE id = 0";
		$res = $this->conexao->query($sql);
		
		return 1;
	}
	
	function acessoUsuario($login,$senha) {
		$sql = "SELECT * FROM acesso WHERE login='".$login."' AND senha='".$senha."'";
		$res = $this->conexao->query($sql);
		if($res->num_rows > 0) {
			$retorno = 1;
		} else {
			$retorno = 0;
		}
		return $res->num_rows;
	}
	
	function novoUsuario($login,$senha){
		if($this->acessoUsuario($login,$senha) == 0) {
		$sql = "INSERT INTO acesso (login,senha) VALUES ('".$login."','".$senha."')";
		$res = $this->conexao->query($sql);
		$retorno = 1;
		} else {
		$retorno = 0;
		}
		
		return $retorno;
	}
	
	function alterarUsuario($login,$senhaantiga,$senhanova){
		if($this->acessoUsuario($login,$senhaantiga) == 1) {
			$sql = "UPDATE acesso SET senha='".$senhanova."' WHERE login='".$login."'";
			$res = $this->conexao->query($sql);
			$retorno = 1;
		} else {
			$retorno = 0;
		}
		return $retorno;
	}
}
?>