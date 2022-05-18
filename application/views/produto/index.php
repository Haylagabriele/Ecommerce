<div class="m-portlet__body">
              <div class="m-section">
                  <div class="row m-row">
                      <ul class="nav nav-tabs  m-tabs-line m-tabs-line--success" role="tablist">
                          <li class="nav-item m-tabs__item">
                              <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1" role="tab">
                                Produtos
                              </a>
                          </li>
                          <li class="nav-item dropdown m-tabs__item">
                              <a class="nav-link m-tabs__link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                 Insumos
                              </a>
                           
                          </li>
                         
                      </ul>
                      </div> 
                      <div class="row m-row">
                            </div> 
                        <div class="input-group m-input-group">
		                    <div class="input-group-prepend">
		                        <span class="input-group-text">
		                            <i class="flaticon-search"></i>
		                        </span>
		                    </div>
                            
                            <input type="text" class="form-control m-input m-input--air m-input--pill" placeholder="Buscar" style="border-radius:0px 10px 10px 0px ;border:1px solid #6EE8F8;" aria-describedby="basic-addon1">		                </div>        
                            <div class="row m-row">
                  </div>
                     </div>
                      <div class="m-section">
                      <div class="col-12" style="text-align: right;">
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#m_modal_1">
                            importar produtos com planilha
                          </button>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#m_modal_1">
                           Baixar plhanilha exemplo
                          </button>
                        
                      </div>
                  </div>
                  <div class="row m-row">
                  </div>
                    
                      <div class="m-section">
                      <div class="col-12" style="text-align: right;">
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#m_modal_1">
                            cadastrar novo produto
                          </button>
                          
                      </div>
                  </div>
                  <div class="row m-row" style="margin-top: 10px;">
                      <div class="col-8">
                      </div>
                      <div class="col-4" style="text-align: right;">
                          <div class="input-group m-input-group" style="margin-left: 50px;">
                              <div class="input-group-prepend">
                                  
                              </div>
                             
                          </div>
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
                                       Produto
                                      </th>
                                      <th title="Field #2">
                                          Categoria
                                      </th>
                                      <th title="Field #3">
                                        Descrição
                                      </th>
                                      <th title="Field #4">
                                         Ativo
                                      </th>
                                      <th title="Field #5">
                                          Acões
                                      </th>
                                     
                                  </tr>
                              </thead>
                              <tbody>
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
          <?php $this->load->view('Produto/form'); ?>