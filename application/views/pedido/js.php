<script>
	//listener

	$('document').ready(function() {

		var table_novos = $('#table_novos').mDatatable({
			data: {
				saveState: {
					cookie: false
				},
			},
			columns: [{
					field: 'Data',
					type: 'date',
					template: function(row) {
						var dt = moment(row.Data).format('DD/MM/YYYY h:mm:ss a');
						return dt;
					},
				},
				{
					field: 'Valor',
					template: function(row) {
						var valor = "R$ " + row.Valor;
						return valor;
					},
				},
				{
					field: 'Situacao',
					title: 'Situação',
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {
								'title': 'Aceito',
								'class': 'm-badge--brand'
							},
							2: {
								'title': 'Pendente',
								'class': 'm-badge--metal'
							},
							3: {
								'title': 'Despachado',
								'class': 'm-badge--warning'
							},
							4: {
								'title': 'Concluído',
								'class': 'm-badge--success'
							},
							5: {
								'title': 'Cancelado',
								'class': 'm-badge--danger'
							}
						};
						return '<span class="m-badge ' + status[row.Situacao].class + ' m-badge--wide">' + status[row.Situacao].title + '</span>';
					},
				},
				{
					field: 'Pagamento',
					title: 'Pagamento',
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {
								'title': 'Débito',
								'class': 'm-badge--brand'
							},
							2: {
								'title': 'Crédito',
								'class': 'm-badge--info'
							},
							3: {
								'title': 'Voucher',
								'class': 'm-badge--warning'
							},
							4: {
								'title': 'Dinheiro',
								'class': 'm-badge--success'
							},
						};
						return '<span class="m-badge ' + status[row.Pagamento].class + ' m-badge--wide">' + status[row.Pagamento].title + '</span>';
					}
				}
			]
		});

		var table_concluidos = $('#table_concluidos').mDatatable({
			data: {
				saveState: {
					cookie: false
				},
			},
			columns: [{
					field: 'Data',
					type: 'date',
					template: function(row) {
						var dt = moment(row.Data).format('DD/MM/YYYY h:mm:ss a');
						return dt;
					},
				},
				{
					field: 'Valor',
					template: function(row) {
						var valor = "R$ " + row.Valor;
						return valor;
					},
				},
				{
					field: 'Situacao',
					title: 'Situação',
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {
								'title': 'Aceito',
								'class': 'm-badge--brand'
							},
							2: {
								'title': 'Pendente',
								'class': 'm-badge--metal'
							},
							3: {
								'title': 'Despachado',
								'class': 'm-badge--warning'
							},
							4: {
								'title': 'Concluído',
								'class': 'm-badge--success'
							},
							5: {
								'title': 'Cancelado',
								'class': 'm-badge--danger'
							}
						};
						return '<span class="m-badge ' + status[row.Situacao].class + ' m-badge--wide">' + status[row.Situacao].title + '</span>';
					},
				},
				{
					field: 'Pagamento',
					title: 'Pagamento',
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {
								'title': 'Débito',
								'class': 'm-badge--brand'
							},
							2: {
								'title': 'Crédito',
								'class': 'm-badge--info'
							},
							3: {
								'title': 'Voucher',
								'class': 'm-badge--warning'
							},
							4: {
								'title': 'Dinheiro',
								'class': 'm-badge--success'
							},
						};
						return '<span class="m-badge ' + status[row.Pagamento].class + ' m-badge--wide">' + status[row.Pagamento].title + '</span>';
					}
				}
			]
		});


		$("#formCategoria").validate({
			rules: {
				nome: {
					required: true,
					minlength: 3
				}
			}
		});
	});

	/*
	    status de componentes
	    - click 
	    - change
	    - hover
	    - check
	    - mouseover
	    - mouseout
	    - key
	    - ready
	*/
</script>