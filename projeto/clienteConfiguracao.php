<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php
	 require "html/head.php";
	 ?>
    
</head>

	<!--  -->
	<body>
		<?php 
        include "html/header.php";
        require_once "src/protect.php";
        require_once "src/conexao.php";
        

		if(isset($_SESSION['id'])){
            $id = $_SESSION['id'];
		}
        
        $idendereco = isset($_GET["id"]) ? $_GET["id"] : 0;
		
			$sql_code = "SELECT * FROM cliente LEFT JOIN endereco ON idcliente = id_cliente WHERE idcliente = '$idendereco'";
			$sql_query = $conexao->query($sql_code);

			//  if($sql_query->num_rows > 0){
			// 	$cliente = $sql_query->fetch_assoc();
            //  }

        ?>

		<main>
        <div class="row row-cols-1 row-cols-md-3 g-4">
           
            <?php if($id>0){ ?>
				<a href="edicaoCliente.php?id=<?=$id; ?>">
					<div class="col">
						<div class="card" >
						<i class="bi bi-person-square text-center text-success" style="font-size: 10rem;"></i>
							<div class="card-body">
								<h5 class="card-title text-center">Dados Pessoais</h5>
								
							</div>
						</div>
					</div>
				</a>
            <?php } else { ?>
                <a href="edicaoCliente.php?id=<?=$id; ?>">
					<div class="col">
						<div class="card" >
						<i class="bi bi-person-square text-center text-danger" style="font-size: 10rem;"></i>
							<div class="card-body">
								<h5 class="card-title text-center">Dados Pessoais</h5>
							</div>
						</div>
					</div>
				</a>
            <?php } ?>

            <?php if($sql_query->num_rows > 0){ ?>
				<a href="cadastroClienteComplemento.php?id=<?=$id; ?>">
					<div class="col">
						<div class="card" >
						<i class="bi bi-house text-center text-success" style="font-size: 10rem;"></i>
							<div class="card-body">
								<h5 class="card-title text-center">Endereço</h5>
								
							</div>
						</div>
					</div>
				</a>
                <?php } else { ?>
                    <a href="cadastroClienteComplemento.php?aba=<?=$aba=1; ?>">
					<div class="col">
						<div class="card" >
						<i class="bi bi-house text-center text-danger" style="font-size: 10rem;"></i>
							<div class="card-body">
								<h5 class="card-title text-center">Endereço</h5>
								
							</div>
						</div>
					</div>
				    </a>
                <?php } ?>

				<a href="cadastroClienteComplemento.php?aba=<?=$aba; ?>">
					<div class="col">
						<div class="card" >
						<i class="bi bi-telephone text-center text-danger" style="font-size: 10rem;"></i>
							<div class="card-body">
								<h5 class="card-title text-center">Contatos</h5>
								
							</div>
						</div>
					</div>
				</a>
				
				<a href="#">
				<div class="col">
					<div class="card" >
					<i class="bi bi-table text-center text-danger" style="font-size: 10rem;"></i>
						<div class="card-body">
							<h5 class="card-title text-center">Histórico de compras</h5>
						</div>
					</div>
				</div>
				</a>
				
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