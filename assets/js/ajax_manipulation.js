function ajax_save(url_controller, fd)
{
	$.ajax({
		url: url_controller,
		type: 'POST',
		data: fd,
		dataType: "JSON",
		processData: false,
		contentType: false,
		beforeSend: function() { 
			$('#modalAdd').modal('hide'); 
			show_loading();
		},
		success: function(response)
		{
			setTimeout(function(){
				$('#modalLoading').modal('hide');
			}, 1000);

			if(response.status){
				show_notification(response);
				setTimeout(function(){
					location.reload();
				}, 1000);
			}else{
				setTimeout(function(){
					$('#modalAdd').modal('show'); 
					show_error_validation(response);
				}, 2000);
			}
		},
		error: function (jqXHR, textStatus, errorThrown)
		{ 
			setTimeout(function(){
				$('#modalLoading').modal('hide');
				show_error_ajax();
			}, 1000);	
		}
	});
}

function ajax_delete(url_controller)
{
	$.ajax({
		url: url_controller,
		data: {
			id: $('#delete_id').val(),
		},
		method: "POST",
		dataType: "JSON",
		beforeSend: function() {  
			$('#modalDelete').modal('hide');
			show_loading();
		},
		success: function (response)
		{
			show_notification(response);
			setTimeout(function(){
				location.reload();
			}, 1000);
		},
		error: function (jqXHR, textStatus, errorThrown)
		{ 
			setTimeout(function(){
				$('#modalLoading').modal('hide');
				show_error_ajax();
			}, 1000);	
		}
	});
}

function show_error_validation(param)
{	
	for(var i = 0; i < param.field.length; i++)
	{
		// Untuk Label
		 $('[for ="'+param.field[i]+'" ]').removeClass('text-primary');
		 $('[for ="'+param.field[i]+'" ]').addClass('text-danger');
	 
		// Untuk Input text
		 $('[name ="'+param.field[i]+'" ]').addClass('border-danger');
		 $('[name="'+param.field[i]+'"]').next().text(param.message[i]);
	}
}

function show_loading()
{

	$('#modalLoading').modal('show'); 

	let timerInterval
	Swal.fire({
	title: 'Loading!',
	html: 'Process saving data in <b></b> seconds.',
	timer: 2000,
	timerProgressBar: true,
	didOpen: () => {
		Swal.showLoading()
		const b = Swal.getHtmlContainer().querySelector('b')
		timerInterval = setInterval(() => {
			b.textContent = (Swal.getTimerLeft() / 1000).toFixed(0)
		}, 100)
	},
		willClose: () => {
			clearInterval(timerInterval)
		}
	});
}

function show_notification(param)
{

	Swal.fire({
        icon: param.icon,
        title: param.title,
        text: param.message,
    });

	// swal({
	// 	title: param.title,
	// 	text: param.message,
	// 	icon: param.icon,
	// 	buttons: {
	// 		confirm: {
	// 			text: "OK",
	// 			value: true,
	// 			visible: true,
	// 			className: "btn btn-success",
	// 			closeModal: true
	// 		}
	// 	}
	// });
}

function show_error_ajax()
{
	Swal.fire({
        icon: 'error',
        title: 'Error!',
        text: 'There is a problem with your submit data',
    });
}

