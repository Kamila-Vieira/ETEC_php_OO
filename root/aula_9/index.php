<body>
 <?php
 	include_once 'classes/Pessoa.php';

	$p = new Pessoa();
	$p->setNome("Zeca");
 	echo $p->getNome();
 ?>
</body>