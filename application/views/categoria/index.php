		<div class="m-portlet__body">
		    <div class="m-section">
		        <div class="row m-row">
		            <div class="col-6">

		                <div class="m-input-icon m-input-icon--left m-input-icon--right">
		                    <input type="text" id="buscar" class="form-control m-input" placeholder="Procurando algo?" style="border-radius: 15px;border-color: #34bfa3;" aria-describedby="basic-addon1">
		                    <span class="m-input-icon__icon m-input-icon__icon--left">
		                        <span>
		                            <i class="la la-search"></i>
		                        </span>
		                    </span>
		                </div>

		            </div>
		            <div class="col-6" style="text-align: right;">
		                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#m_modal_1">
		                    Cadastrar Categoria
		                </button>
		            </div>
		        </div>
		    </div>

		    <div class="m-section">
		        <div class="row m-row">
		            <div class="col">
		                <!--begin: Datatable -->
		                <table class="m-datatable m-datatable__table" id="html_table" width="100%">
		                </table>
		                <!--end: Datatable -->
		            </div>
		        </div>
		    </div>
		</div>

		<!-- Carrega o formulário oculto -->

		<?php $this->load->view('categoria/form'); ?>