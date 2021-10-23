<?php

 include_once 'Paciente.php';

 $paciente = new Paciente();

 $paciente->setNome("Zeca");
 echo 'Nome: '.$paciente->getNome();
 echo '<br>';

 $paciente->setRg("222222222");
 echo 'RG: '.$paciente->getRg();
 echo '<br>';

 $paciente->setCpf("111111111");
 echo 'CPF: '.$paciente->getCpf();
 echo '<br>';

 $paciente->setEndereco("Rua 4, 0");
 echo 'Endereço: '.$paciente->getEndereco();
 echo '<br>';

 $paciente->setProfissao("Contador");
 echo 'Profissão: '.$paciente->getProfissao();
 ?>
