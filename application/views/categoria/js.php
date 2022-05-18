<script>
	var dataTable;


	function construirDataTable() {

		if (this.dataTable) {
			this.dataTable.clear().draw();
		}

		this.dataTable = $('.m-datatable').mDatatable({
			data: {
				type: 'remote',
				source: 'http://localhost/delivery/categoria/consultar'
			},
			pageSize: 10,
			saveState: {
				cookie: false,
				webstorage: false
			},
			search: {
				onEnter: false,
				input: $('#buscar'),
				delay: 100,
			},
			columns: [{
					field: "cat_codigo",
					title: "Código",
					sortable: true,
					filterable: true,
					overflow: 'visible',
					width: 140,
					responsive: {
						visible: 'lg'
					}
				},
				{
					field: "cat_nome",
					title: "Nome",
					sortable: true,
					filterable: true,
					overflow: 'visible',
					responsive: {
						visible: 'lg'
					}
				},
				{
					field: "cat_ordem",
					title: "Ordem",
					sortable: true,
					filterable: true,
					overflow: 'visible',
					responsive: {
						visible: 'lg'
					}
				},
				{
					field: "cat_situacao",
					title: "Situação",
					sortable: true,
					filterable: true,
					overflow: 'visible',
					responsive: {
						visible: 'lg'
					},
					template: function(row) {
						var status = {
							'A': {
								'title': 'Ativo',
								'class': 'm-badge--primary'
							},
							'I': {
								'title': 'Inativo',
								'class': 'm-badge--danger'
							}
						}
						return '<span class="m-badge ' + status[row.cat_situacao].class + ' m-badge--wide">' + status[row.cat_situacao].title + '</span>';
					}
				},
				{
					field: "",
					title: "Ações",
					sortable: false,
					filterable: false,
					overflow: 'visible',
					responsive: {
						visible: 'lg'
					},
					template: function(row) {
						urlFuncaoEditar = "http://localhost/delivery/categoria/editar/" + row.cat_codigo;
						urlFuncaoRemover = "http://localhost/delivery/categoria/remover/" + row.cat_codigo;

						editar = '<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill btn-editar" id="btn-editar" title="Editar" onClick="consultaRegistro(' + row.cat_codigo + ')" chave_primaria="' + row.cat_codigo + '"><i class="la la-edit"></i></a>';
						remover = '<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill btn-remover" id="btn-remover" title="Remover" onClick="removerRegistro(' + row.cat_codigo + ')" chave_primaria="' + row.cat_codigo + '"><i class="la la-trash"></i></a>'
						return editar + remover;
					},

				}
			]
		});
	}

	function consultaRegistro(codigo) {
		//ajax post, obter os dados do registro
		// abrir o modal
		// carregar os dados dentro do formulário do modal
	}

	function removerRegistro(codigo) {
		if (confirm("Você deseja apagar o registro " + codigo + "? ESTA AÇÃO NÃO PODERÁ SER DESFEITA.")) {
			$.ajax({
					method: "POST",
					url: "http://localhost/delivery/categoria/remover",
					data: {
						cat_codigo: codigo
					}
				})
				.done(function(msg) {
					alert("Registro removido com sucesso: " + msg);
					console.log("Registro removido com sucesso: " + msg);
					construirDataTable();
				}).fail(function(msg) {
					console.log("Falha ao executar a solicitação para o servidor: " + msg);
				});
		}
	}


	$('document').ready(function() {

		construirDataTable();

		$("#formCategoria").validate({
			rules: {
				nome: {
					required: true,
					minlength: 3
				}
			}
		});

	});
</script>