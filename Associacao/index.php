<?php

require_once "Pessoa.php";
require_once "Documento.php";

// Criando documentos
$rg = new Documento("RG","12345678");
$cpf = new Documento("CPF","1444444454-45");

// Criando pessoa
$pessoa = new Pessoa("Roberval");
$pessoa->addDocumento($rg);
$pessoa->addDocumento($cpf);

// Obtendo os dados da pessoa e seus documentos associados
echo "Nome: ".$pessoa->getNome()."<BR>";
$pessoa->listarDocumento();

