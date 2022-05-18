<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Dados do cardapio
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
                <form class="m-form m-form--fit m-form--label-align-left" id="formCategoria" method="POST" action="<?php echo base_url('Cardapio/cadastrar'); ?>">
                    <div class="m-portlet__body">
                        <div class='m-row row'>
                            <div class='col'>
                                <div class="form-group m-form__group">
                                    <label for="nome">
                                        Nome do cardapio
                                    </label>
                                    <input type="text" class="form-control m-input m-input--square" style="border-radius: 10px;" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome do Cardapio" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                                </div>
                            </div>
                        </div>
                        <div class='row m-row form-group m-form__group m--margin-top-50'>
                            <div class='col-6 '>
                                <div class="m-form__group form-group row ">
                                    <div class="col-3 vertical-align">
                                        <label class="col-form-label">
                                            Segunda
                                        </label>
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <span class="m-switch m-switch--lg m-switch--icon">
                                            <label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <label>
                                            Inicial
                                        </label>

                                        <input type="text" class="form-control m-input" style="border-radius:10px" readonly="" placeholder="00:00">
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <label>
                                            Final
                                        </label>

                                        <input type="text" class="form-control m-input" style="border-radius:10px" readonly="" placeholder="00:00">
                                    </div>
                                </div>
                            </div>
                            <div class='col-6 '>
                                <div class="m-form__group form-group row">
                                    <div class="col-3 vertical-align">
                                        <label class="col-form-label">
                                            Sexta
                                        </label>
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <span class="m-switch m-switch--lg m-switch--icon">
                                            <label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <label>
                                            Inicial
                                        </label>

                                        <input type="text" class="form-control m-input" style="border-radius:10px" readonly="" placeholder="00:00">
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <label>
                                            Final
                                        </label>

                                        <input type="text" class="form-control m-input" style="border-radius:10px" readonly="" placeholder="00:00">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='row m-row form-group m-form__group m--margin-top-50'>
                            <div class='col-6 '>
                                <div class="m-form__group form-group row">
                                    <div class="col-3 vertical-align">
                                        <label class="col-form-label">
                                            Terça
                                        </label>
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <span class="m-switch m-switch--lg m-switch--icon">
                                            <label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <label>
                                            Inicial
                                        </label>

                                        <input type="text" class="form-control m-input" style="border-radius:10px" readonly="" placeholder="00:00">
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <label>
                                            Final
                                        </label>

                                        <input type="text" class="form-control m-input" style="border-radius:10px" readonly="" placeholder="00:00">
                                    </div>
                                </div>
                            </div>
                            <div class='col-6 '>
                                <div class="m-form__group form-group row">
                                    <div class="col-3 vertical-align">
                                        <label class="col-form-label">
                                            Sábado
                                        </label>
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <span class="m-switch m-switch--lg m-switch--icon">
                                            <label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <label>
                                            Inicial
                                        </label>

                                        <input type="text" class="form-control m-input" style="border-radius:10px" readonly="" placeholder="00:00">
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <label>
                                            Final
                                        </label>

                                        <input type="text" class="form-control m-input" style="border-radius:10px" readonly="" placeholder="00:00">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='row m-row form-group m-form__group m--margin-top-50'>
                            <div class='col-6 '>
                                <div class="m-form__group form-group row">
                                    <div class="col-3 vertical-align">
                                        <label class="col-form-label">
                                            Quarta
                                        </label>
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <span class="m-switch m-switch--lg m-switch--icon">
                                            <label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <label>
                                            Inicial
                                        </label>

                                        <input type="text" class="form-control m-input" style="border-radius:10px" readonly="" placeholder="00:00">
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <label>
                                            Final
                                        </label>

                                        <input type="text" class="form-control m-input" style="border-radius:10px" readonly="" placeholder="00:00">
                                    </div>
                                </div>
                            </div>
                            <div class='col-6 '>
                                <div class="m-form__group form-group row">
                                    <div class="col-3 vertical-align">
                                        <label class="col-form-label">
                                            Domingo
                                        </label>
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <span class="m-switch m-switch--lg m-switch--icon">
                                            <label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <label>
                                            Inicial
                                        </label>

                                        <input type="text" class="form-control m-input" style="border-radius:10px" readonly="" placeholder="00:00">
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <label>
                                            Final
                                        </label>

                                        <input type="text" class="form-control m-input" style="border-radius:10px" readonly="" placeholder="00:00">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='row m-row form-group m-form__group m--margin-top-50'>
                            <div class='col-6 '>
                                <div class="m-form__group form-group row">
                                    <div class="col-3 vertical-align">
                                        <label class="col-form-label">
                                            Quinta
                                        </label>
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <span class="m-switch m-switch--lg m-switch--icon">
                                            <label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <label>
                                            Inicial
                                        </label>

                                        <input type="text" class="form-control m-input" style="border-radius:10px" readonly="" placeholder="00:00">
                                    </div>
                                    <div class="col-3 vertical-align">
                                        <label>
                                            Final
                                        </label>

                                        <input type="text" class="form-control m-input" style="border-radius:10px" readonly="" placeholder="00:00">
                                    </div>
                                </div>
                            </div>
                            <div class='col-6 '>
                                &nbsp; &nbsp; &nbsp;
                            </div>
                        </div>
                    </div>
            </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
</div>