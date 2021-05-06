<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {

	$chamado = addslashes($_POST['chamado']);
	$empresa = addslashes($_POST['empresa']);
	$requisitante = addslashes($_POST['requisitante']);
	$email = addslashes($_POST['email']);
	$responsavel = addslashes($_POST['responsavel']);
	$prioridade = addslashes($_POST['prioridade']);
	$status = addslashes($_POST['status']);
	$descricao = addslashes($_POST['descricao']);
	$dt_start = addslashes($_POST['dt_start']);
	$dt_prev = addslashes($_POST['dt_prev']);
	$dt_finish = addslashes($_POST['dt_finish']);

	$to = "douglas.orsino@al.infnet.edu.br";
	$subject = "Testando bd";
	$body = "Chamado: ".$chamado. "\r\n".
			"Empresa: ".$empresa. "\r\n".
			"Requisitante: ".$requisitante. "\r\n".
			"Email: ".$email. "\r\n".
			"Técnico Responsável: ".$responsavel. "\r\n".
			"Prioridade: ".$prioridade. "\r\n".
			"Status: ".$status. "\r\n".
			"Descrição: ".$descricao. "\r\n".
			"Data Início: ".$dt_start. "\r\n".
			"Data Previsão: ".$dt_prev. "\r\n".
			"Data Término: ".$dt_finish;
	$header = "From:douglas.orsino@protonmail.com". "\r\n"
				."Reply-To:".$chamado."\r\n"
				."X=Mailer:PHP/".phpversion();


	if (mail($to, $subject, $body, $header)) {
		echo ("Enviado com sucesso!");
	}else {
		echo("Operação não sucedida, servidor sem capacidade para este tipo de operação, tente rodar a aplicação em outro servidor!");
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
	<title>Formulário de cadastro de clientes</title>
</head>

<body>

		<nav>
			<div class="logo">
				<h4>Formulário de cadastro de clientes</h4>
			</div>
			<ul class="nav-links">
				<li>
					<a class="clicar" href="#" onclick="toggle_visibility('conteudo');">Adicionar Cadastro</a>
				</li>

			</ul>
			<div class="burger">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>

			</div>
		</nav>

	<div id="conteudo">

		<form method="POST" action="cad.php">

		<fieldset class="grupo">

			<div class="close" onclick="toggle_visibility('conteudo');"></div>

			<div class="campo">
				<label for="nome">Nome Completo:</label>
				<input type="text" name="nome" id="nome" required>
			</div>
			<div class="campo">
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" required>
			</div>
			<div class="campo">
				<label for="cpf">CPF/CNPJ:</label>
				<input type="text" name="cpf" id="cpf" required>
			</div>
			<div class="campo">
				<label for="phone">Telefone:</label>
				<input type="tel" name="phone" id="phone" required>
			</div>

		</fieldset>

		<fieldset class="grupo">

			<div class="campo">
				<label for="cep">CEP:</label>
				<input type="text" name="cep" id="cep" required>
			</div>
			<div class="campo">
				<label for="logradouro">Logradouro e Numero:</label>
				<input type="text" name="logradouro" id="logradouro" required>
			</div>
			<div class="campo">
			<br>
	            <label for="bairro">Bairro:</label>
				<input type="text" name="bairro" id="bairro" required>
			</div>
			<div class="campo">
					<label for="cidade">Cidade</label>
					<input type="text" name="cidade" id="cidade" required>
			</div>

		</fieldset>

		<fieldset class="grupo">
			<div class="campo">
				<legend>Selecione o Estado:</legend>
					<select name="uf" id="estado">
					<option value="AC">Acre</option>
					<option value="AL">Alagoas</option>
					<option value="AP">Amapá</option>
					<option value="AM">Amazonas</option>
					<option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
					<option value="DF">Distrito Federal</option>
					<option value="ES">Espirito Santo</option>
					<option value="GO">Goiás</option>
					<option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
					<option value="MS">Mato Grosso do Sul</option>
					<option value="MG">Minas Gerais</option>
					<option value="PA">Pará</option>
					<option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
					<option value="PE">Pernambuco</option>
					<option value="PI">Piauí</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="RN">Rio Grande do Norte</option>
					<option value="RS">Rio Grande do Sul</option>
					<option value="RO">Rondônia</option>
					<option value="RR">Roraima</option>
					<option value="SC">Santa Catarina</option>
					<option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
				</select><br><br>
			</div>
		</fieldset>
		<br>
			<button type="submit">Concluído</button><br>
			<button type="reset">LP Campo</button>

		</form>

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
	<script type="text/javascript" src="app.js"></script>
</body>
</html>