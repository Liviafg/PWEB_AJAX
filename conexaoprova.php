<?php 

if(!isset($_SESSION)) {
    session_start ();
}
    require "prova_usuario.class.php";

	$username = "root";
	$password = "";
	$database = "clinica_veterinaria";
	$server = "localhost"; 
	
	$usuario = new Usuario ($_POST['nome'], $_POST['senha']);
    $nome = $usuario->getNome();
	
try {
	
$conexao = new PDO('mysql:host=localhost;dbname=clinica_veterinaria', $username, $password);

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conexao->prepare('SELECT nome, senha, nome_pet, idade_pet FROM usuarios WHERE  
        nome = :nome AND
        senha = :senha AND
		nome_pet = :nome_pet AND
		idade_pet = :idade_pet'
);

                $stmt->bindValue(':nome', $usuario->getNome(), PDO::PARAM_STR);

                $stmt->bindValue(':senha',$usuario->getSenha(), PDO:: PARAM_STR);
				
				$stmt->bindValue(':nome_pet',$usuario->getNome_pet(), PDO:: PARAM_STR);
				
		        $stmt->bindValue(':idade_pet',$usuario->getIdade_pet(), PDO:: PARAM_STR);




    $stmt->execute();

    $resultado = $stmt->fetchAll();
	
    $consulta = "SELECT * FROM usuarios";
	
    $resultado = $conexao->query($consulta);
	
   $rows = $resultado->fetchAll(PDO::FETCH_ASSOC);
 
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
}
?>

