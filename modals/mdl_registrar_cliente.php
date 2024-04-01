<div class="modal-basic modal fade show" id="modal-registrar-nuevo-cliente" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
               <div class="modal-content modal-bg-white ">
                  <div class="modal-header">
                     <h6 class="modal-title">Registro de Nuevo Cliente</h6>
                     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <img src="img/svg/x.svg" alt="x" class="svg">
                     </button>
                  </div>
                  <div class="modal-body">
                  <div class="col-lg-12">
                     <form action="registro" id="frm_registrar_cliente" method="post">
                        <div class="form-group row mb-n25">
                           <div class="col-md-12 mb-25">
                              <div class="with-icon">
                                 <span class="la-user lar color-light"></span>
                                 <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light"  name="nombre_cliente" id="nombre_cliente" required placeholder="Nombre del Cliente" >
                              </div>
                           </div>
                           <div class="col-md-12 mb-25">
                              <div class="with-icon">
                                 <span class="la-user lar color-light"></span>
                                 <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" name="empresa_cliente"  id="empresa_cliente" placeholder="Empresa (en caso de aplicar)">
                              </div>
                           </div>
                           <div class="col-md-12 mb-25">
                              <div class="with-icon">
                                 <span class="la-phone las color-light"></span>
                                 <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" name="telefonos_cliente" id="telefonos_cliente" placeholder="Telefono(s)">
                              </div>
                           </div>
                           <div class="col-md-12 mb-25">
                              <div class="with-icon">
                                 <span class="las la-envelope color-light"></span>
                                 <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" name="email_cliente" id="email_cliente" placeholder="Email">
                              </div>
                           </div>
                           <div class="col-md-12 mb-25">
                              <div class="with-icon">
                                 <span class="las la-map-marker color-light"></span>
                                 <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" name="direccion_cliente" id="direccion_cliente" placeholder="Direccion">
                              </div>
                           </div>
                           <div class="col-md-12 mb-25">
                              <div class="with-icon">
                                 <span class="la-lock las color-light"></span>
                                 <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" name="comentarios_clientes" id="comentarios_clientes" placeholder="Comentarios">
                              </div>
                           </div>
                           
                           
                        </div>
                                 
                              
                        
                        
                  </div>
                  <div class="modal-footer">
                     <input type="submit" class="btn btn-primary btn-sm" value="Guardar" id="save_insert_btn">
                     <button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal">Cancelar</button>
                  </div>
                  </form>
               </div>
            </div>


         </div>
         <!-- ends: .modal-Basic -->