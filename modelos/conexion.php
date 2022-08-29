<?php
date_default_timezone_set("America/Lima");
class Conexion{

	public static function conectar(){

		$link = new PDO("mysql:host=u306480249_inventario;dbname=u306480249_inventario",
			            "root",
			            "~AF~FS:td3");

		$link->exec("set names utf8");

		return $link;

	}

}
