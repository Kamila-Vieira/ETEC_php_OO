 <?php
 	include_once 'Pessoa.php';

	$pessoa = new Pessoa();
	$pessoa->setNome("Zeca");
 	echo 'Nome: '.$pessoa->getNome();
 ?>
=