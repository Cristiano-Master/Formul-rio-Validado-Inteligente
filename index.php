<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/icon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta
      name="description"
      content="Formulário > Inteligente > Validado em HTML5, Css, Js e Jquery Puro (CrisDeveloprer)"
    />

	<title>Formulário > Inteligente > Validado</title>

	<link href="css/my-css.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="resposta"></div>
	<form id="formulario" method="post" enctype="multipart/form-data" name="formulario">
		<ul id="progresso">
			<li class="ativo">Fase</li>
			<li>Fase</li>
			<li>Fase</li>
		</ul>

		<fieldset>
			<h2>Primeira Etapa</h2>
			<h3>Cadastra-se</h3>

			<input type="email" name="email" placeholder="exemplo@ex.ex"/>
			<input type="password" name="senha" placeholder="********"  />
			<input type="password" name="r_senha" placeholder="********"  />

			<input type="button" name="next1" class="next next-acao" value="Next" />
		</fieldset>

		<fieldset>
			<h2>Fase 2</h2>
			<h3>Cadastra-se</h3>

			<input type="text" name="email2" placeholder="exemplo@ex.ex"  />
			<input type="text" name="senha2" placeholder="********"  />
			<input type="text" name="r_senha2" placeholder="********"  />

			<input type="button" name="next2" class="next next-acao" value="Next" />
			<input type="button" name="prev" class="prev prev-acao" value="Voltar" />
		</fieldset>

		<fieldset>
			<h2>Fase 3</h2>
			<h3>Cadastra-se</h3>

			<input type="text" name="email3" placeholder="exemplo@ex.ex"  />
			<input type="text" name="senha3" placeholder="********"  />
			<input type="text" name="r_senha3" placeholder="********"  />
			
			<input type="submit" name="Cadastrar" class="next-acao" value="Finalizar" />
			<input type="button" name="prev" class="prev prev-acao" value="Voltar" />
			
		</fieldset>
	</form>

	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/my-js.js"></script>

</body>
</html>