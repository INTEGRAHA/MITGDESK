$(document).ready(function() {

	$('.use-datatable').dataTable();

	$(".form-select").change(function() {
		$(this).closest('.form-group').find('label').removeClass('text-danger');
		$(this).removeClass('border-danger');
		$(this).next().empty();
	})

	$(".form-control").change(function() {
		$(this).closest('.form-group').find('label').removeClass('text-danger');
		$(this).removeClass('border-danger');
		$(this).next().empty();
	})

});

function open_modal_add(id_name) {
	$('#modalAdd').modal('show');
	$('#modalTitle').text('Add New Data');
	$('#formModalAdd')[0].reset();
	// $('#id_jenis_penyebab').val('');
	$('#'+ id_name).val('');
	clear_error_form();
}

function open_modal_edit(id_form) {
	$('#modalAdd').modal('show');
	$('#modalTitle').text('Update Data');
	show_data(id_form);
}

function open_modal_delete(id_form) {
	$('#modalDelete').modal('show');
	$('#delete_id').val(id_form);
}

function clear_error_form() {
	$('#formModalAdd').find('label').removeClass('text-danger');
	$('#formModalAdd').find('.form-control').removeClass('border-danger');
	$('#formModalAdd').find('.form-select').removeClass('border-danger');
	$('.message-error').empty();
}
