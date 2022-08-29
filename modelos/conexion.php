<?php
date_default_timezone_set("America/Lima");
class Conexion{

	public static function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=u306480249_inventario",
			            "u306480249_inventario",
			            "~AF~FS:td3");

		$link->exec("set names utf8");

		return $link;

	}

}
