<?php
require_once("../class/BD.class.php");
require_once("../class/BANCO.class.php");
$banco= new BANCOGMF();

$flag=$_POST['flag'];

if($flag != 6 && $flag != 3 && $flag != 31){
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
}


if($flag == 0) {
$rg=$_POST['rg'];
$nasc=$_POST['nasc'];
if($banco->selecionarPessoa($nome,$cpf,0) == 1)
	echo "0";
else{
	echo $banco->addProprietario($nome,$cpf,$rg,$nasc);
}
}


if($flag == 100) {
$rg=$_POST['rg'];
$nasc=$_POST['nasc'];
$id=$_POST["id"];
if($banco->alterarProprietario($id,$nome,$cpf,$rg,$nasc) == 1)
	echo "1";
else{
	echo "0";
}
}


if($flag == 1){
$conjugue=$_POST["conjugue"];
$fiado=$_POST["fiador"];

if($banco->selecionarPessoa($nome,$cpf,1) == 1)
	echo "0";
else{
	echo $banco->addInquilino($nome,$cpf,$conjugue,$fiado);
}
}

if($flag == 6){
	
$descricao=$_POST['descri'];
$endereco=$_POST['end'];
$bairro=$_POST['bai'];
$dtini=$_POST['dt_ini'];
$dtfim=$_POST['dt_fim'];
$vini=$_POST['dt_v_ini'];
$vfim=$_POST['dt_v_fim'];
$inq=$_POST['cod_inq'];
$prop=$_POST['cod_prop'];


echo($banco->selecionarImovel($descricao,$endereco,$bairro,$dtini,$dtfim,$vini,$vfim,$prop,$inq));

}

if($flag == 7){
	$tipo=$_POST['tipo'];
	echo $banco->selecionarPessoaCampos($nome,$cpf,$tipo);
}

if($flag == 3){
	$usuario=$_POST['login'];
	$senhanova=$_POST['senha_nova'];
	$senhaantiga=$_POST['senha_atual'];
	echo $banco->alterarUsuario($usuario,$senhaantiga,$senhanova);
}

if($flag == 31){
	$login=$_POST['user'];
	$senha=$_POST['senha'];
	echo $banco->novoUsuario($login,$senha);
}

if($flag == 99){
	$email=$_POST['email'];
	echo $banco->alterarEmail($email);
}
?>