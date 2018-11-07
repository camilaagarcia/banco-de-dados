<?php
class Conexao
{
	//credenciais de conexão ao BD
	private $host = 'localhost';
	private $dbname = 'rodrigod';
	private $user = 'postgres';
	private $pass = 'ifc';
	//variável que vai armazenar a conexão feita
	private $conexao;
	//método que vai efetuar a conexão e retorná-la 
	public function getConexao(){
		$this->conexao = null; //this.conexao
		try{
			$this->conexao = new PDO('psql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->pass);
			 $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			echo 'Erro de conexão: '.$e->getMessage();
		}
		//ao final, retorna a conexão efetuada
		return $this->conexao;
	}
}
private $conexao;
	
	public function __construct($con)
	{
		$this->conexao = $con;
	}




$query = "select count(email) where email=:email"
$stmt = $this->conexao->prepare($query);
//executa a consulta
$stmt->execute();
//transforma o resultado em um Array
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
//retorna o resultado
return $resultado;

if($resultado = 1){
	$query = "update usuario set nome=:nome, senha=:senha,qtdMediaFumada=:qtdMediaFumada, preco=:preco where email=:email"
	$stmt = $this->conexao->prepare($query);
	//executa a consulta
	$stmt->execute();
	//transforma o resultado em um Array
	$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
	//retorna o resultado
	return $resultado;
}else{
	$query = "insert";
	$stmt = $this->conexao->prepare($query);
	//executa a consulta
	$stmt->execute();
}