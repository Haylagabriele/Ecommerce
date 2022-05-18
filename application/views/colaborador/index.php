<div class="m-portlet__body">

	<div class="m-section">
		<div class="row m-row">
			<div class="col-8">

				<div class="input-group m-input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="flaticon-search"></i>
						</span>
					</div>
					<input type="text" class="form-control m-input" placeholder="Buscar" aria-describedby="basic-addon1">
				</div>

			</div>
			<div class="col-4" style="text-align: right;">
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#m_modal_1">
					Cadastrar novo colaborador
				</button>
			</div>
		</div>
	</div>

	<div class="m-section">
		<div class="row m-row">
			<div class="col">
				<!--begin: Datatable -->
				<table class="m-datatable m-datatable__table" id="html_table" width="100%">
					<thead>
						<tr>
							<th title="Field #1">
								Nome
							</th>
							<th title="Field #2">
								email
							</th>
							<th title="Field #3">
								Telefone
							</th>
							<th title="Field #4">
								ações
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								syron kun
							</td>
							<td>
								syoran.kun@gmail.com

							</td>
							<td>
							(11)4564-5645
							</td>
							<td>
							Editar excluir							
						</td>
							<td>
								
							</td>
						</tr>
						<tr>

							<td>


							</td>
							<td>

							</td>
							<td>

							</td>
							<td>

							</td>

							<td>

							</td>

						</tr>
						<tr>
							<td>

							</td>
							<td>

							</td>
							<td>

							</td>
							<td>

							</td>
							<td>

							</td>

						</tr>
					</tbody>
				</table>
				<!--end: Datatable -->
			</div>
		</div>
	</div>
</div>

<!-- Carrega o formulário oculto -->

<?php $this->load->view('Colaborador/form'); ?>