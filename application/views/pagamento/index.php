<div class="m-section">

	<div class="row m-row">

		<div class="col-6" style="border: solid;border-color: #20c99700;background: #00aabd33;; border-radius: 15px;font-size: 12px;color: black;">

			<span class="m-input-icon__icon m-input-icon__icon--left">

				<i class="la la-info-circle" style="color: #36a3f7;">

				</i>

				será cobrado uma taxa de 5% sobre os pagamentos online

			</span>

		</div>

		<div class="col-6">

			<div class="col m--align-right">

				<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#m_modal_1">

					Cancelar

				</button>

				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#m_modal_1">

					Cadastrar

				</button>

			</div>

		</div>

	</div>

</div>

<div class="m-portlet__body" style="border: solid;border-color: #ebedf2;border-radius: 10px;padding: 0px">

	<div class="modal-header" style="background:#ebedf2">

		<h5 class="modal-title" id="exampleModalLabel" style="font-size: 13px;">

			Informações Bancárias

		</h5>

	</div>

	<form class="m-form m-form--fit m-form--label-align-right" id="formLoja" method="POST" action="<?php echo base_url('loja/salvar'); ?>">

		<div class="m-portlet__body">

			<div class="row m-row" style="margin-right: 0;margin-left: 0;">

				<div class="col-3">

					<div class="form-group">

						<label for="nome">

							Razão Social

						</label>

						<input type="text" style="border-radius: 10px" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite a razão social " required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">

					</div>

				</div>

				<div class="col-3">

					<div class="form-group">

						<label for="nome">

							CNPJ

						</label>

						<input type="text" style="border-radius: 10px" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">

					</div>

				</div>

				<div class="col-3">

					<div class="form-group">

						<label for="nome">

							Tipo de conta

						</label>

						<input type="text" style="border-radius: 10px" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o tipo de conta" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">

					</div>

				</div>

				<div class="col-3">
					<div class="form-group">
						<label for="nome" style="font-size:13px">
							conta bancaria de recebimento
						</label>
						<select class="form-control m-input m-input--square" style="border-radius: 10px">
							<option>debito</option>
							<option>credito</option>
							<option>dinheiro</option>

						</select>

					</div>

				</div>

			</div>

			<div class="row m-row" style="margin-right: 0;margin-left: 0;">

				<div class="col-4">

					<div class="form-group">

						<label for="nome">

							Agência com digito

						</label>

						<input type="text" style="border-radius: 10px;" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite agencia com digito" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">

					</div>

				</div>

				<div class="col-2">

					<div class="form-group">

						<label for="nome">

							Digito

						</label>

						<input type="text" style="border-radius: 10px;" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digito" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">

					</div>

				</div>

				<div class="col-4">

					<div class="form-group">

						<label for="nome">

							Conta com digito

						</label>

						<input type="text" style="border-radius: 10px;" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite conta com Digito" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">

					</div>

				</div>

				<div class="col-2">

					<div class="form-group">

						<label for="nome">

							Digito

						</label>

						<input type="text" style="border-radius: 10px;" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digito" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">

					</div>

				</div>

			</div>

		</div>

</div>

</form>

<br>

<div class="m-portlet__body" style="border: solid;border-color: #ebedf2;border-radius: 10px;padding: 0px">

	<div class="modal-header" style="background:#ebedf2">

		<h5 class="modal-title" id="exampleModalLabel" style="font-size: 13px;">

			Pagamentos Online

	</div>

	<br>

	<label style="margin: 15px">

		Bandeiras Crédito

	</label>

	<br>

	<div class="row m-row">

		<div class="col-2" style="margin:3px">

			<a class="nav-link" data-toggle="tab" href="#m_tabs_1_3">
				<i class="fa fa-cc-visa"></i>
				Mastercard
			</a>
		</div>
		<div class="col-2" style="margin:3px">
			<a class="nav-link" data-toggle="tab" href="#m_tabs_1_3">
				<i class="fa fa-cc-visa"></i>
				Visa

			</a>

		</div>
		<div class="col-2" style="margin:3px">
			<a class="nav-link" data-toggle="tab" href="#m_tabs_1_3">
				<i class="fa fa-cc-visa"></i>
				Amex

			</a>

		</div>
		<div class="col-2" style="margin:3px">
			<a class="nav-link" data-toggle="tab" href="#m_tabs_1_3">
				<i class="fa fa-cc-visa"></i>
				Hipercard

			</a>

		</div>
		<div class="col-2" style="margin:3px">
			<a class="nav-link" data-toggle="tab" href="#m_tabs_1_3">
				<i class="fa fa-cc-visa"></i>
				Dineres

			</a>

		</div>



	</div>

</div>
<br>
<br>
<div class="m-portlet__body" style="border: solid;border-color: #ebedf2;border-radius: 10px;padding: 0px">

	<div class="modal-header" style="background:#ebedf2">

		<h5 class="modal-title" id="exampleModalLabel" style="font-size: 13px;">

			Pagamento na entrega

	</div>

	<br>

	<div class="m-checkbox-list">
		<div class="m-form__group form-group">
			<label style="margin: 15px">
				Tipos de Cartão
			</label>
			<div class="m-checkbox-inline">
				<label class="m-checkbox" style="margin:15px">
					<input type="checkbox">
					Credito
					<span></span>
				</label>
				<label class="m-checkbox">
					<input type="checkbox">
					Debito
					<span></span>
				</label>
				<label class="m-checkbox">
					<input type="checkbox">
					Voucher
					<span></span>
				</label>
			</div>
		</div>
	</div>
	<div class="m-checkbox-list">
		<div class="m-form__group form-group">
			<label style="margin: 15px">
				Bandeiras Crédito
			</label>
			<div class="m-checkbox-inline">
				<label class="m-checkbox" style="margin:15px">
					<input type="checkbox">
					Credito
					<i class="fa fa-cc-visa"></i>
					<span></span>
				</label>
				<label class="m-checkbox">
					<input type="checkbox">
					Debito
					<i class="fa fa-cc-visa"></i>
					<span></span>
				</label>
				<label class="m-checkbox">
					<input type="checkbox">
					Voucher
					<i class="fa fa-cc-visa"></i>
					<span></span>
				</label>
			</div>
		</div>
	</div>
	<div class="m-checkbox-list">
		<div class="m-form__group form-group">
			<label style="margin: 15px">
				Bandeiras Débito
			</label>
			<div class="m-checkbox-inline">
				<label class="m-checkbox" style="margin:15px">
					<input type="checkbox">
					Credito
					<i class="fa fa-cc-visa"></i>
					<span></span>
				</label>
				<label class="m-checkbox">
					<input type="checkbox">
					Debito
					<i class="fa fa-cc-visa"></i>
					<span></span>
				</label>
				<label class="m-checkbox">
					<input type="checkbox">
					Voucher
					<i class="fa fa-cc-visa"></i>
					<span></span>
				</label>
			</div>
		</div>
	</div>
	<div class="m-checkbox-list">
		<div class="m-form__group form-group">
			<label style="margin: 15px">
				Bandeiras Voucher
			</label>
			<div class="m-checkbox-inline">
				<label class="m-checkbox" style="margin:15px">
					<input type="checkbox">
					Credito
					<i class="fa fa-cc-visa"></i>
					<span></span>
				</label>
				<label class="m-checkbox">
					<input type="checkbox">
					Debito
					<i class="fa fa-cc-visa"></i>
					<span></span>
				</label>
				<label class="m-checkbox">
					<input type="checkbox">
					Voucher
					<i class="fa fa-cc-visa"></i>
					<span></span>
				</label>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<div class="m-portlet__body" style="border: solid;border-color: #ebedf2;border-radius: 10px;padding: 0px">

	<div class="modal-header" style="background:#ebedf2">

		<h5 class="modal-title" id="exampleModalLabel" style="font-size: 13px;">

			Dados do sócios

	</div>

	<div class="row m-row">
		<div class="col-4" style="margin:3px">
			<label style="margin: 15px">
				Nome
			</label>
			<input type="text" style="border-radius: 15px;" class="form-control m-input m-input--square" id="exampleInputEmail1">
		</div>
		<div class="col-4" style="margin:3px">
			<label style="margin: 15px">
				email
			</label>
			<input type="email" style="border-radius: 15px;" class="form-control m-input m-input--square" id="exampleInputEmail1" aria-describedby="emailHelp">

		</div>

		<div class="col-3" style="margin:3px">

			<label style="margin: 15px">
				CPF
			</label>
			<input type="number" style="border-radius: 15px;" class="form-control m-input m-input--square" id="exampleInputEmail1" aria-describedby="emailHelp">


		</div>



	</div>

</div>

