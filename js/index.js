function backToHome() {
    window.location.href = "../index.php"
    // console.log('clickou');
}

  // $(document).ready(function() {
  //   $('#cpf').mask('000.000.000-00', {reverse: true});
  //   $('#cod').mask('0000000000000', {reverse: true});
  // })

  //validação form cliente
  $("#registerNewClient").on('click', function(){
    if( $("#nome").val() == ""){
        alert('Preencha o nome do cliente');
        return false;
    } else if( $("#cpf").val() == ""){
        alert('Preencha o cpf');
        return false;
    } else if( $("#email").val() == ""){
        alert('Preencha o email');
        return false;
    } 
})