function confirmarApagar(id){
    var confirmar = confirm("Tem certeza que deseja excluir o registro id: " + id + " selecionado?");

    if(confirmar){
       // console.log("confirmou apagar");
       location.href = "src/controler/cliente_bd/excluirCliente.php?id=" + id;
    } else {
        console.log("CANCELADO");
    }
}