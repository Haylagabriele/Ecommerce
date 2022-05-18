<script>
	//listener

	$('document').ready(function() {

		var dataTable = $('.m-datatable').mDatatable({
			data: {
				saveState: {
					cookie: false
				},
			},
			columns: [{
					field: 'Order Date',
					type: 'date',
					template: function(data) {
						var dt = moment(data).format('DD/MM/YYYY');
						return dt;
					},
				},
				{
					field: 'Status',
					title: 'Status',
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {
								'title': 'Pendente',
								'class': 'm-badge--brand'
							},
							2: {
								'title': 'Entregue',
								'class': ' m-badge--metal'
							},
							3: {
								'title': 'Cancelado',
								'class': ' m-badge--primary'
							},
							4: {
								'title': 'Sucesso',
								'class': ' m-badge--success'
							},
							5: {
								'title': 'Info',
								'class': ' m-badge--info'
							},
							6: {
								'title': 'Perigo',
								'class': ' m-badge--danger'
							},
							7: {
								'title': 'Atenção',
								'class': ' m-badge--warning'
							},
						};
						return '<span class="m-badge ' + status[row.Status].class + ' m-badge--wide">' + status[row.Status].title + '</span>';
					},
				},
				{
					field: 'Type',
					title: 'Type',
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {
								'title': 'Online',
								'state': 'danger'
							},
							2: {
								'title': 'Aluguel',
								'state': 'primary'
							},
							3: {
								'title': 'Direto',
								'state': 'accent'
							},
						};
						return '<span class="m-badge m-badge--' + status[row.Type].state + ' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-' +
							status[row.Type].state + '">' +
							status[row.Type].title + '</span>';
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