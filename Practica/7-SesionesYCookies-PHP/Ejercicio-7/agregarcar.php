<?php
session_start();
extract($_REQUEST);
mysql_connect("localhost","root","marco");
mysql_select_db("carro");
if(!isset($cantidad)){
    $cantidad=1;
}
$qry=mysql_query("select * from catalogo where id='".$id."'");
$row=mysql_fetch_array($qry);
if(isset($_SESSION['carro'])){
    $carro=$_SESSION['carro'];
}
$carro[md5($id)]=array('identificador'=>md5($id),'cantidad'=>$cantidad,'producto'=>$row['producto'],'precio'=>$row['precio'],'id'=>$id);
$_SESSION['carro']=$carro;
header("Location:catalogo.php?".SID);
?>