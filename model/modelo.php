<?php
class carro
{
	private $carro;
	private $dbh;

	public function __construct()
	{
		$this->carro = array();
		$this->dbh = new PDO('mysql:host=localhost;dbname=bd_autopartes', "root", "");
	}

	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}

	public function lista_carro()
	{
		self::set_names();
		$sql="select marca, modelo, año, color, tipo, cilindros, precio from carro where id_carro";
		foreach ($this->dbh->query($sql) as $res)
		{
			$this->carro[]=$res;
		}
		return $this->carro;
		$this->dbh=null;
	}
}
?>