 <?php

if(!isset($_SESSION)) {
    session_start ();
}
	$usuario = new Usuario ($_POST['nome'], $_POST['senha'], $_POST['nome_pet'], $_POST['idade_pet']);
    $nome = $usuario->getNome();
	
$_SESSION['nome'] = $usuario->getNome(); 
$_SESSION['senha'] = $usuario->getSenha();



$criptografia = md5($usuario->getSenha()); 

?> 
<html>

<table> 

<tr> 


 <td> 


<?php echo $_SESSION['nome'];

echo nl2br ($criptografia); ?>

 </td>

</tr> 

 </table>