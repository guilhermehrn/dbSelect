<?php

function retornarPastasArquivos($diretorio){

	$files1 = scandir($diretorio);
	return  $files1;
}

function criaHtmlBasesDisponiveis($diretorio){
	
	$bases = retornarPastasArquivos($diretorio);
	for ($i = 2; $i < count($bases); $i++){
		echo "<option>" . $bases[$i] . "</option>";				
	}
}


//retornarPastasArquivos(dirname(__FILE__)."/bases");
//criaHtmlBasesDisponiveis(dirname(__FILE__)."/bases");




?>