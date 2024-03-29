<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<?php require "html/head.php"; 
		if(!isset($_SESSION)){
			session_start();
		}
		?>

		<script>
		
		function confirma() {
			if (f.senha.value == "") {

				document.getElementById("divConfirma").style.display = 'none';
			} else {
				document.getElementById("divConfirma").style.display = 'block';
			}
		}

		function verifica() {

			if (f.senha.value == f.senha2.value) {
				document.getElementById("erro").style.display = 'none';
				document.getElementById("btn-off").style.display = 'none';
				document.getElementById("btn-on").style.display = 'block';
				<?php $res = false ?>
			} else {
				document.getElementById("erro").style.display = 'block';
				document.getElementById("btn-off").style.display = 'block';
				document.getElementById("btn-on").style.display = 'none';
				<?php $res = true ?>

			}

		}

		</script>
	</head>
	
	<body>
		
		<?php 
		include "html/header.php";
		require_once "src/conexao.php";
		require_once  "src/model/Cliente.php";

		$idCliente = isset($_POST["id"]) ? $_POST["id"] : 0;
		$nome = isset($_POST["nome"]) ? $_POST["nome"] : 0;
		$dataNascimento = isset($_POST["nascimento"]) ? $_POST["nascimento"] : 0;
		$orgao = isset($_POST["orgao"]) ? $_POST["orgao"] : 0;
		$rg = isset($_POST["rg"]) ? $_POST["rg"] : 0;
		$cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : 0;
		$estadoCivil = isset($_POST["estado_civil"]) ? $_POST["estado_civil"] : 0;
		$sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : 0;
		$email = isset($_POST["email"]) ? $_POST["email"] : 0;
		$senha = isset($_POST["senha"]) ? password_hash($_POST["senha"], PASSWORD_DEFAULT) : "";
		$ativo = isset($_POST["ativo"]) ? $_POST["ativo"] : true;

		if(isset($_POST["nome"]) && isset($_POST["senha2"])){
			$cliente = new Cliente(
                $idCliente,
                $nome,
                $dataNascimento,
                $orgao,
                $rg,
                $cpf,
                $estadoCivil,
                $sexo,
                $email,
                $senha,
                $ativo
			);
			
			$sql_code = "INSERT INTO cliente  VALUES (NULL, '$nome', '$dataNascimento', '$orgao', '$rg', '$cpf', '$estadoCivil', '$sexo', '$email', '$senha', true)";
			
			$sql_query = $conexao->query($sql_code);

			if($sql_query){
				$sql_code = "SELECT idCliente, nome FROM cliente WHERE cpf = '$cpf'";
				$sql_query = $conecxao->query($sql_code);

				$cliente = $sql_query->fetch_assoc();

				$_SESSION["id"] = $cliente['idCliente'];
				$_SESSION["id"] = $cliente['nome'];

				echo '<!DOCTYPE html>';
				echo '<html lang="pt-br">';
				echo '<head>';
			echo '</head>';
			echo '<body>';
			echo '<div style="width: 1024px; margin: auto;" class="alert alert-success" role="alert">
				Cadastro realizado com sucesso! <a style="text-decoration: none; float: right;" href="cadastroCliente.php" class="alert-link">x</a>
				<br><a style="text-decoration: none; float: left;" href="cadastroClienteComplemento.php" class="alert-link">Cadastro Coplementar</a><br>
			</div>';
			echo '</body>';
			echo '</html>';
			} else {
				echo '<!DOCTYPE html>';
				echo '<html lang="pt-br">';
				echo '<head>';
				echo '   <meta http-equiv="refresh" content="10; url=cadastroCliente.php">';
				echo '</head>';
				echo '<body>';
				echo '<div style="width: 1024px; margin: auto;" class="alert alert-danger" role="alert">
					Erro ao adicionado! <a style="text-decoration: none; float: right;" href="cadastroCliente.php" class="alert-link">x</a>
				</div>';
				echo '</body>';
				echo '</html>';
			}			

		}

		?>

		<main>
        <div class="container-fluid">
			<h3>Cadastro de Clientes</h3>
			<form class="row g-3 container-fluid" name="f" action="" method="post">

				<div class="col-md-6 col-sm-12">
					<label for="nome_id" class="form-label">Nome completo</label>
					<input type="text" class="form-control" id="nome_id" name="nome" value="" required>
				</div>
				<div class="col-md-6 col-sm-12">
					<label for="email_id" class="form-label">E-mail</label>
					<div class="input-group">
						<span class="input-group-text" id="inputGroupPrepend2">@</span>
						<input type="email" class="form-control" id="email_id" name="email" value="" aria-describedby="inputGroupPrepend2" required>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<label for="cpf_id" class="form-label">CPF</label>
					<input type="cpf" class="form-control" id="cpf_id" name="cpf" value="" required>
				</div>
				<div class="col-md-4 col-sm-12">
					<label for="or_id" class="form-label">Orgão</label>
					<input type="text" class="form-control" id="or_id" name="orgao" value="" required>
				</div>
				<div class="col-md-4 col-sm-12">
					<label for="rg_id" class="form-label">Identidade</label>
					<input type="text" class="form-control" id="rg_id" name="rg" value="" required>
				</div>
				<div class="col-md-3 col-sm-12">
					<label for="dtnasci" class="form-label">Data de nascimento</label>
					<input type="date" class="form-control" id="dtnasci" name="nascimento" value="" required>
				</div>
				<div class="col-md-3 col-sm-12">
					<label for="estadoc" class="form-label">Estado civil</label>
					<select class="form-select" id="estadoc" name="estado_civil" required>
						<option selected disabled value="">Selecione</option>
						<option value="Solterio">Solterio(a)</option>
						<option value="Casado">Casado(a)</option>
						<option value="Divorciado">Divorciado(a)</option>
						<option value="Viuvo">Viuvo(a)</option>
					</select>
				</div>
				<div class="col-md-6 col-sm-12">
					<label class="form-label">Sexo</label><br>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="sexo" id="sexo_id1" value="M">
						<label class="form-check-label" for="sexo_id1">
							Masculino
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="sexo" id="sexo_id2" value="F">
						<label class="form-check-label" for="sexo_id2">
							Feminino
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="sexo" id="sexo_id3" value="O">
						<label class="form-check-label" for="sexo_id3">
							Outros
						</label>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<label for="sen1" class="form-label">Senha</label>
					<input type="password" class="form-control" id="sen1" onblur="confirma()" name="senha" value="" required>
				</div>
				<div class="col-md-6 col-sm-12" id="divConfirma" style="display: none">
					<label for="sen2" class="form-label">Confirmação senha</label>
					<input type="password" class="form-control" id="sen2" onblur="verifica()" name="senha2" value="" required>
					<div id="erro" class="invalid-feedback" style="display: none">
						Senhas divergentes.
					</div>
				</div>
				<div class="col-12">
					<button class="btn btn-primary" type="submit" id="btn-off" disabled style="display: none">Cadastrar</button>
					<button class="btn btn-primary" type="submit" id="btn-on" >Cadastrar</button>
				</div>
			</form>
		</div>
		</main>
		<?php 
			include "html/rodaPe.php";
		?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>