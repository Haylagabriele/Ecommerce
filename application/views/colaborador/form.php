<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                   colaborador
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
                <form class="m-form m-form--fit m-form--label-align-right" id="formCategoria" method="POST" action="<?php echo base_url('categoria/salvar'); ?>">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group">
                            <label for="nome">
                                Nome <span class="m--font-danger">*</span>
                            </label>
                            <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="ordem">
                                Ordem
                            </label>
                            <input type="number" class="form-control m-input m-input--square" id="ordem" placeholder="Informe um número">
                            <span class="m-form__help">
                                Permite escolher a ordem de exibição das categorias nos relatórios
                            </span>
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