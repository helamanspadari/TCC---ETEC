<?php
	/*Esta pagina esta fazendo as ações de CRUD do USUARIO!*/
	if (isset($_POST['acao'])) {
		if($_POST['acao'] == 'inserir'){
			inserirUsuario();
		}	
		if($_POST['acao'] == 'editar'){
			editarUsuario();
		}
		if($_POST['acao'] == 'deletar'){
			excluirUsuario();
		}
		if($_POST['acao'] == 'visualizar'){
			exibirUsuario();
		}
	}


	function abrirBanco(){
		$conexao = new mysqli("localhost", "root", "", "escola");
		return $conexao;
	}
	
	//add usuario no banco
	function inserirUsuario(){
		
		$banco = abrirBanco();

		$sql = "INSERT INTO tb_usuarios (tipo_usuario,nome,sobrenome, nascimento,rg,endereco,n_endereco,bairro,cidade,estado,email,senha) VALUES ('{$_POST["tipo_usuario"]}','{$_POST["nome"]}','{$_POST["sobrenome"]}','{$_POST["nascimento"]}','{$_POST["rg"]}','{$_POST["endereco"]}','{$_POST["numero_endereco"]}','{$_POST["bairro"]}','{$_POST["cidade"]}','{$_POST["estado"]}','{$_POST["email"]}','{$_POST["senha"]}')";
	
		$banco->query($sql);
		$banco->close();
	
		header('Location: acaosucesso.php');
	}
		
	//puxa os dados da table no banco para exibir na tela
	function exibirUsuario(){

		$banco = abrirBanco();

		//$tipo = $_POST['tipo_usuario'];

		$sql = "SELECT * FROM tb_usuarios ORDER BY ID";

		$resultado = $banco->query($sql);

		while($row = mysqli_fetch_array($resultado)){
			$grupo[] = $row;
		}
		return $grupo;
	}


	//pega o id do usuario para pode puxar do banco para poder usar a function edição do usuario
	function pegarId($ID){
		$banco = abrirBanco();
		//$tipo = $_POST['tipo_usuario'];
		$sql = "SELECT * FROM tb_usuarios WHERE ID =".$ID;
		$resultado = $banco->query($sql);
		$banco->close();
		$usuario = mysqli_fetch_assoc($resultado);
		return $usuario;
	}

	
	//apos pegar os dados e o ID, agora ira alterar os dados diretamente no banco
	function editarUsuario(){
		
		$banco = abrirBanco();

		$sql = "UPDATE tb_usuarios SET nome = '{$_POST["nome"]}',"
									." sobrenome = '{$_POST["sobrenome"]}',"
									." RG = '{$_POST["rg"]}',"
									." endereco = '{$_POST["endereco"]}',"
									." n_endereco = '{$_POST["numero_endereco"]}',"
									." bairro = '{$_POST["bairro"]}',"
									." cidade = '{$_POST["cidade"]}',"
									." estado = '{$_POST["estado"]}',"
									." email = '{$_POST["email"]}',"
									." tipo_usuario = '{$_POST["tipo_usuario"]}',"
									." nascimento = '{$_POST["nascimento"]}' WHERE ID = '{$_POST["ID"]}'";
	
		$banco->query($sql);
		$banco->close();
	
		header('Location: acaosucesso.php');
	}


	function excluirUsuario(){
		
		$banco = abrirBanco();

		$sql = "DELETE FROM tb_usuarios WHERE ID = '{$_POST["ID"]}'";
	
		$banco->query($sql);
		$banco->close();
	
		header('Location: acaosucesso.php');
	}
?>