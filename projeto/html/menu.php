<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">Produtos</a></li>
            <?php
				if(isset($_SESSION['tipo'])){								
			?>
            <li><a href="clientes.php">Clientes</a></li>
            <?php } ?>
            <li><a href="src/controler/cliente_bd/editarCliente.php">Meus Dados</a></li>
            <li><a href="sobre_nos.php">Sobre nós</a></li>
            <li><a href="contato.php">Contatos</a></li>
        </ul>
    </nav>