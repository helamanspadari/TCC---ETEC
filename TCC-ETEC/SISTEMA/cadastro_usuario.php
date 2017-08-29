<?php include ('verificar_sessao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro do Usuario</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
  	<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
</head>
<body>
	<br>
	<form name="inserir"  method="post" action="acao.php">
		<table border="0" class="form-control">
			<tbody>
				<tr>
					<td colspan="3"><center><h4>Selecione o tipo do Usuario</h4></center></td>
					<tr>
						<td><input type="radio" name="tipo_usuario" value="Aluno">Aluno</input></td>
						<td><input type="radio" name="tipo_usuario" value="2">Professor</input></td>
						<td><input type="radio" name="tipo_usuario" value="3">Administração</input></td>
					</tr>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>Nome</td>
					<td><input type="text" name="nome" value=""></td>
				</tr>
				<tr>
					<td>Sobrenome</td>
					<td><input type="text" name="sobrenome" value=""></td>
				</tr>
				<tr>
					<td>Data de Nascimento</td>
					<td><input type="date" name="nascimento"></td>
				</tr>
				<tr>
					<td>RG</td>
					<td><input type="text" name="rg" value=""></td>
				</tr>
				<tr>
					<td>Endereço</td>
					<td><input type="text" name="endereco" value=""></td>
				</tr>
				<tr>
					<td>Nº do Endereço</td>
					<td><input type="text" name="numero_endereco" value=""></td>
				</tr>
				<tr>
					<td>Bairro</td>
					<td><input type="text" name="bairro" value=""></td>
				</tr>
				<tr>
					<td>Cidade</td>
					<td><input type="text" name="cidade" value=""></td>
				</tr>
				<tr>
					<td>Estado</td>
					<td><input type="text" name="estado" value=""></td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input type="password" name="senha" value=""></td>
				</tr>
				<tr>
					<td><input type="hidden" name="acao" value="inserir"></td>
					<td><input type="submit" value="Cadastrar" class="btn btn-success" name="cadastrar"></td>
					<td><a href="index.php" class="btn  btn-danger">Cancelar</a></td>
				</tr>	
			</tbody>
		</table>
	</form>
</body>
</html>