<div class="m-portlet__title">
    <h5>Informações Iniciais</h5>
</div>
<form class="m-form m-form--fit m-form--label-align-right" id="formLoja" method="POST" action="<?php echo base_url('loja/salvar'); ?>">
    <div class="m-portlet__body">
        <div class="row m-row">
            <div class="col-5">

                <div class="form-group">
                    <label for="nome">
                        Razão Social
                    </label>
                    <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="nome">
                        Nome Fantasia
                    </label>
                    <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="nome">
                        CNPJ
                    </label>
                    <input type="text" class="form-control m-input m-input--square m-input--solid" disabled id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                </div>
            </div>
        </div>
        <div class="row m-row">
            <div class="col-2">
                <div class="form-group">
                    <label for="nome">
                        CEP
                    </label>
                    <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="nome">
                        Endereço
                    </label>
                    <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                </div>
            </div>
            <div class="col-1">
                <div class="form-group">
                    <label for="nome">
                        Número
                    </label>
                    <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="nome">
                        Complemento
                    </label>
                    <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                </div>
            </div>
            <div class="col-1">
                <div class="form-group">
                    <label for="nome">
                        Estado
                    </label>
                    <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="nome">
                        Cidade
                    </label>
                    <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                </div>
            </div>
        </div>
        <div class="row m-row c_border_bottom_15">
            <div class="col-3">
                <div class="form-group">
                    <label for="nome">
                        Tipos de Entrega
                    </label>
                    <select class="form-control m-input m-input--square" multiple >
                        <option value="">-- Selecione um Tipo de Entrega --</option>
                        <option value='1'>Entrega pelo Restaurante</option>
                        <option value='2'>Retirada na Loja</option>
                        <option value='3'>Consumo no Local</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="nome">
                        Whatsapp
                    </label>
                    <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="nome">
                        Raio de Atendimento
                    </label>
                    <div class="input-group m-input-group">
                        <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                km
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="nome">
                        Tempo Médio de Espera
                    </label>
                    <div class="input-group m-input-group">
                        <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                min
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-row">
            <div class="col-4">
                <div class="form-group">
                    <label for="nome">
                        Logo
                    </label>
                    <div class="c_circulo_pontilhado_pequeno">
                        <span>Adicionar Logo</span>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="nome">
                        Cor de Botões e Links
                    </label>
                    <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="nome">
                        Cor de Apoio (opcional)
                    </label>
                    <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                </div>
            </div>
        </div>
        <div class="row m-row c_border_bottom_15">
            <div class="col-12">
                <div class="form-group">
                    <label for="nome">
                        Banner do Site
                    </label>
                    <div class="c_retangulo_pontilhado">
                        <span>Adicionar Logo</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-row">
            <div class="col-4">
                <div class="form-group">
                    <label for="nome">
                        Tipo de Taxa
                    </label>
                    <select class="form-control m-input m-input--square">
                        <option>-- Selecione um Tipo de Taxa --</option>
                        <option value="1">Taxa Base + Variável por Deslocamento (Km)</option>
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="nome">
                        Valor Base
                    </label>
                    <div class="input-group m-input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                R$
                            </span>
                        </div>
                        <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="nome">
                        Valor por Km
                    </label>
                    <div class="input-group m-input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                R$
                            </span>
                        </div>
                        <input type="text" class="form-control m-input m-input--square" id="nome" aria-describedby="nomeHelp" placeholder="Digite o nome da categoria" required="required" data-rule-minlenght="true" data-msg-required="Este campo é obrigatório" data-msg-minlength="O tamanho do campo não atende aos requisitos mínimos de 3 caracteres">
                    </div>
                </div>
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

    </div>
</form>
<?php $this->load->view('loja/form'); ?>