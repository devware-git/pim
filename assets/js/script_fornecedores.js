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
    $("#update_modal_fornecedores").find("input[name=empresa]").val(user.empresa);
    $("#update_modal_fornecedores").find("input[name=cnpj]").val(user.cnpj);
    $("#update_modal_fornecedores").find("input[name=telefone]").val(user.telefone);
    $("#update_modal_fornecedores").find("input[name=responsavel]").val(user.responsavel);
    $("#update_modal_fornecedores").find("input[name=id]").val(user.id);
    $("#update_modal_fornecedores").modal("show");
    // console.log(user);
});