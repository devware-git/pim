// var base_url = '<?php echo base_url();?>'

$( ".btn-remover" ).click(function() {
    $("input[name=id_usuario]").val($(this).data('id'));
});

// $('#btn-remove-morador').on('click', function(){
//     $.ajax({
//         type: "POST",
//         url: base_url+"/cadastro_moradores/excluir_moradores",
// 		success: function( data ) {
// 		    console.log( data );
//         },
//         error: function( data ) {
//             console.log( 'error '+ data );
//         }
//     });
// });


$( ".btn-alterar" ).click(function() {
    var user = $(this).data('user');
    $("#update_modal_visitantes").find("input[name=nome]").val(user.nome);
    $("#update_modal_visitantes").find("input[name=cpf]").val(user.cpf);
    $("#update_modal_visitantes").find("input[name=apartamento_visitado]").val(user.apartamento_visitado);
    $("#update_modal_visitantes").find("input[name=id]").val(user.id);
    $("#update_modal_visitantes").modal("show");
    // console.log(user);
});


function myFunction() {
  window.print();
}