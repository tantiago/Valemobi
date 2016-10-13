$(function() {

	$.validator.setDefaults({
		errorClass: 'help-block',
		highlight: function(element) {
			$(element)
				.closest('.form-group')
				.addClass('has-error');
		},
		unhighlight: function(element) {
			$(element)
			.closest('.form-group')
			.removeClass('has-error');
		}
	});

	$formdata = $('#form_data');
	$formdata.validate({
		rules: {
			tipo_mercadoria: {
				required: true,
			},
			nome_mercadoria: {
				required: true,
			},
			quantidade: {
				required: true,
			},
			preco: {
				required: true,
			},
			tipo_negocio: {
				required: true,
			}
		},
		messages: {
			tipo_mercadoria: {
				required: 'Informe o tipo de mercadoria.'
			},
			nome_mercadoria: {
				required: 'Informe o nome da mercadoria.',
			},
			quantidade: {
				required: 'Informe o quantidade.',
			},
			preco: {
				required: 'Informe o preço da mercadoria.',
			},
			tipo_negocio: {
				required: 'Informe o tipo de negócio.',
			}
		}
	});
}());
