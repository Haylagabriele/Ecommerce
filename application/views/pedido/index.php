          <div class="m-portlet__body">
              <div class="m-section" style="margin-bottom: 10px;">
                  <div class="row m-row m-row--no-padding">
                      <div class="col-3">
                          <ul class="nav nav-tabs m-tabs m-tabs-line" role="tablist">
                              <li class="nav-item m-tabs__item">
                                  <a class="nav-link m-tabs__link active" data-toggle="tab" href="#lista_novos" role="tab">
                                      Novos
                                  </a>
                              </li>
                              <li class="nav-item m-tabs__item">
                                  <a class="nav-link m-tabs__link" data-toggle="tab" href="#lista_concluidos" role="tab">
                                      Concluídos
                                  </a>
                              </li>

                          </ul>
                      </div>
                      <div class="col-9" style="text-align: right;">
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#m_modal_1">
                              Criar novo pedido
                          </button>
                      </div>
                  </div>
              </div>

              <div class="tab-content">

                  <div id="lista_novos" class="tab-pane active">

                      <div class="row m-row m-row--no-padding form-group m-form__group">
                          <div class="col-8" style="margin-top: 10px;">
                              Filtrar por
                              <span class="c_bullet_cinza">
                                  <span class="c_bullet_branco">0</span>
                                  <span>ACEITO</span>
                              </span>
                              <span class="c_bullet_cinza">
                                  <span class="c_bullet_branco">0</span>
                                  <span>PENDENTE</span>
                              </span>
                              <span class="c_bullet_cinza">
                                  <span class="c_bullet_branco">0</span>
                                  <span>DESPACHADO</span>
                              </span>
                          </div>

                          <div class="col-4" style="text-align: right;">
                              <div class="input-group m-input-group">
                                  <div class="m-input-icon m-input-icon--left">
                                      <input type="text" style="border-radius: 15px; border-color:#20c997;" class="form-control m-input" placeholder="Procurar por nome" aria-describedby="basic-addon1">
                                      <span class="m-input-icon__icon m-input-icon__icon--left">
                                          <span>
                                              <i class="la la-search"></i>
                                          </span>
                                      </span>
                                  </div>
                              </div>
                          </div>

                      </div>

                      <div class="m-section">
                          <div class="row m-row">
                              <div class="col">
                                  <!--begin: Datatable -->
                                  <table class="m-datatable m-datatable__table" id="table_novos" width="100%">
                                      <thead>
                                          <tr>
                                              <th title="Field #1">
                                                  # Pedido
                                              </th>
                                              <th title="Field #1">
                                                  Data
                                              </th>
                                              <th title="Field #5">
                                                  Pagamento
                                              </th>
                                              <th title="Field #5">
                                                  Valor
                                              </th>
                                              <th title="Situacao">
                                                  Situacao
                                              </th>
                                              <th title="Field #2">
                                                  Telefone
                                              </th>
                                              <th title="Field #3">
                                                  Nome
                                              </th>
                                              <th title="Field #4">
                                                  CEP
                                              </th>
                                              <th title="Field #5">
                                                  Rua
                                              </th>
                                              <th title="Field #5">
                                                  Nro
                                              </th>
                                              <th title="Field #5">
                                                  Complemento
                                              </th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>123456</td>
                                              <td>2021-10-01 10:02:00</td>
                                              <td>1</td>
                                              <td>79,90</td>
                                              <td>1</td>
                                              <td>(71) 9 9285-6387</td>
                                              <td>Lauzidete</td>
                                              <td>42700-352</td>
                                              <td>Rua dos Brabos</td>
                                              <td>256</td>
                                              <td>Respeite minha história</td>
                                          </tr>
                                          <tr>
                                              <td>125</td>
                                              <td>2021-10-01 10:22:00</td>
                                              <td>2</td>
                                              <td>79,90</td>
                                              <td>2</td>
                                              <td>(71) 9 9285-9325</td>
                                              <td>Fagão guiné</td>
                                              <td>42700-352</td>
                                              <td>Rua dos Programadores</td>
                                              <td>256</td>
                                              <td>Respeite minha história</td>
                                          </tr>
                                          <tr>
                                              <td>1478</td>
                                              <td>2021-10-01 10:42:00</td>
                                              <td>3</td>
                                              <td>79,90</td>
                                              <td>3</td>
                                              <td>(71) 9 9285-1478</td>
                                              <td>Betão da Rua de Cima</td>
                                              <td>42700-352</td>
                                              <td>Rua de Cima</td>
                                              <td>256</td>
                                              <td>Respeite minha história</td>
                                          </tr>
                                          <tr>
                                              <td>9635</td>
                                              <td>2021-10-01 11:52:00</td>
                                              <td>1</td>
                                              <td>79,90</td>
                                              <td>2</td>
                                              <td>(71) 9 9285-3216</td>
                                              <td>Filipis Netis</td>
                                              <td>42700-352</td>
                                              <td>Rua dos Dockers</td>
                                              <td>256</td>
                                              <td>Respeite minha história</td>
                                          </tr>
                                          <tr>
                                              <td>8524</td>
                                              <td>2021-10-01 10:52:00</td>
                                              <td>4</td>
                                              <td>79,90</td>
                                              <td>1</td>
                                              <td>(71) 9 98506-1234</td>
                                              <td>Milton da Bahia</td>
                                              <td>42700-352</td>
                                              <td>Rua dos Abastados</td>
                                              <td>256</td>
                                              <td>Respeite minha história</td>
                                          </tr>
                                      </tbody>
                                  </table>
                                  <!--end: Datatable -->
                              </div>
                          </div>
                      </div>

                  </div>

                  <div id="lista_concluidos" class="tab-pane">

                      <div class="row m-row m-row--no-padding form-group m-form__group">
                          <div class="col-8" style="margin-top: 10px;">
                              Filtrar por
                              <span class="c_bullet_cinza">
                                  <span class="c_bullet_branco">0</span>
                                  <span>CONCLUÍDO</span>
                              </span>
                              <span class="c_bullet_cinza">
                                  <span class="c_bullet_branco">0</span>
                                  <span>CANCELADOS</span>
                              </span>
                          </div>
                          
                          <div class="col-4" style="text-align: right;">
                              <div class="input-group m-input-group">
                              <div class="m-input-icon m-input-icon--left">
                                  <input type="text" style="border-radius: 15px; border-color:#20c997;" class="form-control m-input" placeholder="Procurar por nome do..." aria-describedby="basic-addon1">
                                  <span class="m-input-icon__icon m-input-icon__icon--left">
													<span>
														<i class="la la-search"></i>
													</span>
												</span>
											</div>
                              </div>
                          </div>
                      </div>

                      <div class="m-section">
                          <div class="row m-row">
                              <div class="col">
                                  <!--begin: Datatable -->
                                  <table class="m-datatable m-datatable__table" id="table_concluidos" width="100%">
                                      <thead>
                                          <tr>
                                              <th title="Field #1">
                                                  # Pedido
                                              </th>
                                              <th title="Field #1">
                                                  Data
                                              </th>
                                              <th title="Field #5">
                                                  Pagamento
                                              </th>
                                              <th title="Field #5">
                                                  Valor
                                              </th>
                                              <th title="Situacao">
                                                  Situacao
                                              </th>
                                              <th title="Field #2">
                                                  Telefone
                                              </th>
                                              <th title="Field #3">
                                                  Nome
                                              </th>
                                              <th title="Field #4">
                                                  CEP
                                              </th>
                                              <th title="Field #5">
                                                  Rua
                                              </th>
                                              <th title="Field #5">
                                                  Nro
                                              </th>
                                              <th title="Field #5">
                                                  Complemento
                                              </th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>123456</td>
                                              <td>2021-10-01 10:02:00</td>
                                              <td>1</td>
                                              <td>79,90</td>
                                              <td>5</td>
                                              <td>(71) 9 9285-6387</td>
                                              <td>Lauzidete</td>
                                              <td>42700-352</td>
                                              <td>Rua dos Brabos</td>
                                              <td>256</td>
                                              <td>Respeite minha história</td>

                                          </tr>
                                          <tr>
                                              <td>125</td>
                                              <td>2021-10-01 10:22:00</td>
                                              <td>2</td>
                                              <td>79,90</td>
                                              <td>4</td>
                                              <td>(71) 9 9285-9325</td>
                                              <td>Fagão guiné</td>
                                              <td>42700-352</td>
                                              <td>Rua dos Programadores</td>
                                              <td>256</td>
                                              <td>Respeite minha história</td>
                                          </tr>
                                          <tr>
                                              <td>1478</td>
                                              <td>2021-10-01 10:42:00</td>
                                              <td>3</td>
                                              <td>79,90</td>
                                              <td>4</td>
                                              <td>(71) 9 9285-1478</td>
                                              <td>Betão da Rua de Cima</td>
                                              <td>42700-352</td>
                                              <td>Rua de Cima</td>
                                              <td>256</td>
                                              <td>Respeite minha história</td>
                                          </tr>
                                          <tr>
                                              <td>9635</td>
                                              <td>2021-10-01 11:52:00</td>
                                              <td>1</td>
                                              <td>79,90</td>
                                              <td>4</td>
                                              <td>(71) 9 9285-3216</td>
                                              <td>Filipis Netis</td>
                                              <td>42700-352</td>
                                              <td>Rua dos Dockers</td>
                                              <td>256</td>
                                              <td>Respeite minha história</td>
                                          </tr>
                                          <tr>
                                              <td>8524</td>
                                              <td>2021-10-01 10:52:00</td>
                                              <td>4</td>
                                              <td>79,90</td>
                                              <td>5</td>
                                              <td>(71) 9 98506-1234</td>
                                              <td>Milton da Bahia</td>
                                              <td>42700-352</td>
                                              <td>Rua dos Abastados</td>
                                              <td>256</td>
                                              <td>Respeite minha história</td>
                                          </tr>
                                      </tbody>
                                  </table>
                                  <!--end: Datatable -->
                              </div>
                          </div>
                      </div>

                  </div>

              </div>
          </div>

          <!-- Carrega o formulário oculto -->
          <?php $this->load->view('pedido/form'); ?>