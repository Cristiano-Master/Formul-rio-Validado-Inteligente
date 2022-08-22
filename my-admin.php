<?php

	sleep(2);
	if (isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim') {
		$novos_campos = array();
		$campos_post = $_POST['campos'];

		$respostas = array();

		foreach ($campos_post as $indice => $valor) {
			$novos_campos[$valor['name']] = $valor['value'];
		}

		#echo "<pre>";
		#print_r($novos_campos);

		if (!strstr($novos_campos['email'], '@')) {
			$respostas['erro'] = 'sim';
			$respostas['getErro'] = 'Email invalido';
		}elseif ($novos_campos['senha'] != $novos_campos['r_senha']) {
			$respostas['erro'] = 'sim';
			$respostas['getErro'] = 'Senhas diferentes';
		}else{
			$respostas['erro'] = 'nao';
			$respostas['msg'] = 'Iniciando Programa';
		}

		echo json_encode($respostas);
	}

?>