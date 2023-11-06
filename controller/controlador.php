<?php
	require_once("../model/modelo.php");
	$menu = new carro();
	$pd = $menu->lista_carro();
	require_once("../view/vista.php");
?>