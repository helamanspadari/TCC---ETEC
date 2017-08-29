<?php include ('verificar_sessao.php'); ?>

<?php 
	include ('acao.php');
	$usuario = pegarId($_POST['ID']);
	//var_dump($usuario);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro do Usuario</title>
</head>
<body>
	<form name="editar"  method="post" action="acao.php">
		<table border="0">
			<tbody>
				<tr>
					<td>Selecione o tipo do Usuario</td>
					<tr>
						<td><input type="radio" name="tipo_usuario" value="<?=$usuario['tipo_usuario']?>">Aluno</input></td>
						<td><input type="radio" name="tipo_usuario" value="<?=$usuario['tipo_usuario']?>">Professor</input></td>
						<td><input type="radio" name="tipo_usuario" value="<?=$usuario['tipo_usuario']?>">Administração</input></td>
					</tr>
				</tr>
				<tr>
					<td>Nome</td>
					<td><input type="text" name="nome" value="<?=$usuario['nome']?>" size="20"></td>
				</tr>
				<tr>
					<td>Sobrenome</td>
					<td><input type="text" name="sobrenome" value="<?=$usuario['sobrenome']?>" size="20"></td>
				</tr>
				<tr>
					<td>Data de Nascimento</td>
					<td><input type="date" name="nascimento" value="<?=$usuario['nascimento']?>"></td>
				</tr>
				<tr>
					<td>RG</td>
					<td><input type="text" name="rg" value="<?=$usuario['RG']?>" size="20"></td>
				</tr>
				<tr>
					<td>Endereço</td>
					<td><input type="text" name="endereco" value="<?=$usuario['endereco']?>" size="20"></td>
				</tr>
				<tr>
					<td>Nº do Endereço</td>
					<td><input type="text" name="numero_endereco" value="<?=$usuario['n_endereco']?>" size="20"></td>
				</tr>
				<tr>
					<td>Bairro</td>
					<td><input type="text" name="bairro" value="<?=$usuario['bairro']?>" size="20"></td>
				</tr>
				<tr>
					<td>Cidade</td>
					<td><input type="text" name="cidade" value="<?=$usuario['cidade']?>" size="20"></td>
				</tr>
				<tr>
					<td>Estado</td>
					<td><input type="text" name="estado" value="<?=$usuario['estado']?>" size="20"></td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td><input type="email" name="email" value="<?=$usuario['email']?>"></td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input type="password" name="senha" value="*********"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="acao" value="editar">
						<input type="hidden" name="ID" value="<?=$usuario['ID']?>">
					</td>
					<td><input type="submit" value="Salvar Alterações" name="editar"></td>
					<td><a href="index.php">Cancelar</a></td>
				</tr>	
			</tbody>
		</table>
	</form>
</body>
</html>