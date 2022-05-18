<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Novo pedido
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
            </div>
            <div class="modal-body">

                <div class="m-form__content">
                    <div class="m-alert m-alert--icon alert alert-danger m--hide" role="alert" id="m_form_1_msg">
                        <div class="m-alert__icon">
                            <i class="la la-warning"></i>
                        </div>
                        <div class="m-alert__text">
                            Ops! Parece que encontramos alguns erros na validação do formulário.
                        </div>
                        <div class="m-alert__close">
                            <button type="button" class="close" data-close="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>



                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right" id="formCategoria" method="POST" action="<?php echo base_url('pedido/salvar'); ?>">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group">
                            <label for="nome">
                                <strong>Resumo do pedido</strong>
                            </label>
                            <div class="m-row c_container_cinza">
                                <span>
                                    <i class="flaticon-tool"></i> Adicione itens do cardápio ao seu Pedido<span class="m--font-danger"></span>
                                </span>
                            </div>

                            <input type="hidden" id="ped_data_criacao" name="ped_data_criacao" value="<?php echo date('Y-m-d')?>">
                            <input type="hidden" id="ped_loja" name="ped_loja" value="1">
                            <input type="hidden" id="ped_cliente" name="ped_cliente" value="1">
                            <input type="hidden" id="ped_usuario" name="ped_usuario" value="1">
                            <input type="hidden" id="ped_situacao" name="ped_situacao" value="1">

                        </div>
                        <div class="form-group m-form__group" style="margin-bottom: -20px;">
                            <strong>Informações do Cliente</strong>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="telefone">
                                Telefone
                            </label>
                            <input type="text" class="form-control m-input m-input--square" id="telefone" placeholder="Informe o telefone">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="nome">
                                Nome
                            </label>
                            <input type="text" class="form-control m-input m-input--square" id="nome" placeholder="Informe o Nome">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="cpf">
                                CPF
                            </label>
                            <input type="text" class="form-control m-input m-input--square" id="cpf" placeholder="Informe o CPF">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="email">
                                E-mail
                            </label>
                            <input type="text" class="form-control m-input m-input--square" id="email" placeholder="Informe o E-mail">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="cep">
                                CEP
                            </label>
                            <input type="text" class="form-control m-input m-input--square" id="cep" placeholder="Informe o CEP">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="rua">
                                Rua
                            </label>
                            <input type="text" class="form-control m-input m-input--square" id="rua" placeholder="Informe o Rua">
                        </div>
                        <div class="row m-row form-group m-form__group">
                            <div class="col-6">
                                <div class="">
                                    <label for="numero">
                                        Nº
                                    </label>
                                    <input type="text" class="form-control m-input m-input--square" id="numero" placeholder="Informe o Nº">
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="">
                                    <label for="complemento">
                                        Complemento
                                    </label>
                                    <input type="text" class="form-control m-input m-input--square" id="complemento" placeholder="Informe o complemento">
                                </div>

                            </div>
                        </div>
                        <div class="form-group m-form__group" style="margin-bottom: -20px;">
                            <strong>Forma de Pagamento</strong>
                        </div>
                    </div>
                    <div class="form-group m-form__group">
                        <label for="rua">
                            Débito
                        </label>
                        <div class="input-group m-input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-credit-card"></i>
                                </span>
                            </div>
                            <input type="number" class="form-control m-input" id="ped_debito" name="ped_debito"placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group m-form__group">
                        <label for="rua">
                            Crédito
                        </label>
                        <div class="input-group m-input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-credit-card"></i>
                                </span>
                            </div>
                            <input type="number" class="form-control m-input" id="ped_credito" name="ped_credito" placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group m-form__group">
                        <label for="rua">
                            Voucher
                        </label>
                        <div class="input-group m-input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-credit-card"></i>
                                </span>
                            </div>
                            <input type="number" class="form-control m-input" id="ped_voucher" name="ped_voucher" placeholder=" ">
                        </div>
                    </div>
                    <div class="form-group m-form__group">
                        <label for="rua">
                            Dinheiro
                        </label>
                        <div class="input-group m-input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-money"></i>
                                </span>
                            </div>
                            <input type="number" class="form-control m-input" id="ped_dinheiro" name="ped_dinheiro" placeholder=" ">
                        </div>
                    </div>

                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions">
                            <button type="submit" class="btn btn-success">
                                Salvar
                            </button>
                            <button type="reset" class="btn btn-secondary">
                                Limpar
                            </button>
                        </div>
                    </div>

                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
</div>