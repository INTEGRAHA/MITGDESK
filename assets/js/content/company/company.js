
function save()
{
	let url  = 'company/insert_db';
	let form = $('#formModalAdd').serialize();
	let fd   = new FormData(); 
	fd.append('form', form);

	ajax_save(url, fd);
}

function remove()
{
	let url  = 'company/delete_db';

	ajax_delete(url);
}

function show_data(id_data)
{
	$.ajax({
		url: "company/get_form_data",
		data: {
			id: id_data,
		},
		method: "POST",
		dataType: "JSON",
		success: function (data) {
			$("#company_id").val(data.t_company_id);
			$("#company_name").val(data.company_name);
			$("#company_phone").val(data.company_phone);
			$("#company_email").val(data.company_email);
			$("#company_address").val(data.company_address);
			$("#company_website").val(data.company_website);
			$("#company_type").val(data.company_type);
			$("#company_description").val(data.company_description);
		}
	}); 
}
