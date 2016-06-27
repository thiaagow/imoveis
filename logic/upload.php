<?php
require_once("../class/BD.class.php");
require_once("../class/BANCO.class.php");
$banco= new BANCOGMF();

//print_r($_POST);
//print_r($_FILES);

$descricao=$_POST["descri"];
$endereco=$_POST["end"];
$num=$_POST["num"];
$cidade=$_POST["cid"];
$cep=$_POST["cep"];
$bairro=$_POST["bai"];
$prop=$_POST["prop"];
$inq=$_POST["inq"];
$dt_ini=$_POST["dt_ini"];
$dt_fim=$_POST["dt_fim"];

 $up0 = $_FILES["contrato"]["tmp_name"]; 
 $up1 = $_FILES["imagem"]["tmp_name"]; 
 $upn0 = $_FILES["contrato"]["name"]; 
 $upn1 = $_FILES["imagem"]["name"]; 
 
 $end0 = "../contrato/";
 $end1 = "../foto/";
 
 $upload0 = move_uploaded_file( $up0, $end0.$upn0 ); 
 $upload0 = move_uploaded_file( $up1, $end1.$upn1 ); 
 
 echo $banco->addImovel($descricao,$endereco,$num,$cidade,$cep,$bairro,$prop,$inq,$dt_ini,$dt_fim,$upn0,$upn1);
 
 echo '<meta http-equiv="refresh" content=1;url="../index.php">';
?>