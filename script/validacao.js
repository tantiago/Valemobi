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
				digits: true,
				min: 1,
			},
			preco: {
				required: true,
				number: true,
				min: 1,
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
				required: 'Informe a quantidade.',
				digits: 'São aceitas quantidades positivas e maiores que zero. Somente número inteiros.',
				min: 'São aceitas quantidades positivas e maiores que zero.',
			},
			preco: {
				required: 'Informe o preço da mercadoria.',
				min: 'São aceitos preços maiores que zero',
			},
			tipo_negocio: {
				required: 'Informe o tipo de negócio.',
			}
		}
	});
}());
