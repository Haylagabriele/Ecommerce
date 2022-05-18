<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
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
                <form class="m-form m-form--fit m-form--label-align-right" id="formCategoria" method="POST" action="<?php echo base_url('produto/salvar'); ?>">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group" style="padding-top:1px">

                            <label for="nome">
                                Informações do produto <span class="m--font-danger"></span>
                            </label>

                            <input type="text" class="form-control m-input m-input--square" id="Nome" placeholder="Adicione itens ao Cardápio ao seu pedido">
                        </div>

                        <div class="form-group m-form__group row">
                            <div class="col-1" style="margin-top: 35px;">
                                <i class="fa fa-camera"></i>
                            </div>
                            <div class="col-11">
                                <label for="nome">
                                    Nome do produto<span class="m--font-danger"></span>
                                </label>
                                <input type="email" class="form-control m-input" style="border-radius: 10px;">
                            </div>
                        </div>

                        <div class="form-group m-form__group" style="padding-top:1px ">

                            <label for="nome">
                                Descrição do produto<span class="m--font-danger"></span>
                            </label>
                            <textarea class="form-control m-input" id="exampleTextarea" rows="3" style="border-radius: 10px;"></textarea>
                        </div>
                        <div class="form-group m-form__group row">

                            <div class="col-6">
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <label for="exampleInputEmail1">
                                            Preço base
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    $
                                                </span>
                                            </div>
                                            <input type="number" name="nome" placeholder="0,00" style="border-radius:0 8px 8px 0px; border:1px solid #f4f5f8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <label for="exampleInputEmail1">
                                            Código:
                                        </label>
                                        <div class="input-group">
                                            <input class="form-control m-input" type="number" name="nome" style="border-radius:10px; border:1px solid #f4f5f8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <label for="exampleInputEmail1">
                                          Categoria
                                        </label>
                                        <div class="input-group">
                                            <input class="form-control m-input" type="number" name="nome" style="border-radius:10px; border:1px solid #f4f5f8">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <input type="email" class="form-control m-input" style="border-radius: 10px;">
                    <button type="reset" class="btn m-btn--pill btn-secondary m-btn m-btn--custom" disabled="disabled">
                        Complemento
                    </button>
            </div>
        </div>
    </div>
    </form>
    <!--end::Form-->
</div>
</div>
</div>
</div>