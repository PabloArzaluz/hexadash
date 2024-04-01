<?php
   session_start();
   include("include/config.php");
	include("include/functions.php");
   include("include/connect.php");
   $menu_active = "ordenes-servicio";
   $submenu_active = "nueva-orden";
?>
<!doctype html>
<html lang="es" dir="ltr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Nueva OS </title>

   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- inject:css-->

   <link rel="stylesheet" href="assets/vendor_assets/css/bootstrap/bootstrap.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/daterangepicker.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/fontawesome.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/footable.standalone.min.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/fullcalendar@5.2.0.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/jquery-jvectormap-2.0.5.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/jquery.mCustomScrollbar.min.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/leaflet.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/line-awesome.min.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/magnific-popup.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/MarkerCluster.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/MarkerCluster.Default.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/select2.min.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/slick.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/star-rating-svg.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/trumbowyg.min.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/wickedpicker.min.css">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <link rel="stylesheet" href="css/style.css">

   <!-- endinject -->

   <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">

   <!-- Fonts -->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
   <script src='js/jquery-3.4.1.min.js' type='text/javascript'></script>
</head>

<body class="layout-light side-menu">
   <div class="mobile-search">
      <form action="/" class="search-form">
         <img src="img/svg/search.svg" alt="search" class="svg">
         <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
      </form>
   </div>
   <div class="mobile-author-actions"></div>
   <header class="header-top">
      <?php include("include/header.php"); ?>
   </header>
   <main class="main-content">

      <div class="sidebar-wrapper">
         <?php include("include/sidebar.php"); ?>
      </div>

      <div class="contents">

         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">

                  <div class="breadcrumb-main">
                     <h4 class="text-capitalize breadcrumb-title">Nuevo Registro de Orden de Servicio</h4>
                     <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Servicio</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Nuevo Registro</li>
                           </ol>
                        </nav>
                     </div>
                  </div>

               </div>
            </div>
            <div class="form-element">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="row">
                        <form action="_registra_nueva_os.php" method="post" id="frm_registro_nueva_orden">
                        <div class="col-lg-12">
                        <?php echo mensaje_esperado_get("folio_duplicado","alert","danger","El folio ya esta registrado, por favor ingresa uno distinto"); ?>
                           <div class="card card-horizontal card-default card-md mb-4">
                              <div class="card-header">
                                 <h6>Datos del Cliente</h6>
                              </div>
                              <div class="card-body py-md-30">
                                 <div class="row">
                                    <div class="col-lg-9">
                                       
                                       <div class="mb-25 select-style2">
                                          <div class="dm-select ">
                                             <select name="cliente" id="select-alerts2" class="form-control" required>
                                                <option value="">Seleccione o Registre un cliente</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-3">
                                       <button id="registrar_cliente" data-bs-toggle="modal" data-bs-target="#modal-registrar-nuevo-cliente" class="btn btn-sm btn-info">Registrar Nuevo Cliente</button>
                                    </div>
                                 </div>
                                 <div id="response_insert">
                                    <div class="alert alert-dark role="alert">
                                       Primero busca el cliente, en caso de que no este registrado, hazlo desde aqui.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- ends: .card -->
                        </div>
                        <div class="col-lg-12">
                           <div class="card card-default card-md mb-4">
                              <div class="card-header">
                                 <h6>Datos de la Orden de Servicio</h6>
                              </div>
                              <div class="card-body py-md-30">
                                 
                                    <div class="form-group row mb-n25">
                                       <div class="col-md-3 mb-25">
                                          <label for="exampleFormControlSelect1" class="il-gray fs-14 fw-500 align-center mb-10">Tipo de Servicio</label>
                                          <select class="form-control px-15" name="tipo-servicio" id="exampleFormControlSelect1">
                                             <option value="servicio-regular">Servicio Regular</option>
                                             <option value="validacion-garantia">Validacion Garantia</option>
                                             <option value="reincidencia">Reincidencia</option>
                                             <option value="otro">Otro</option>
                                          </select>
                                       </div>
                                       <div class="col-md-3 mb-25">
                                          <label for="folio-os" class="il-gray fs-14 fw-500 align-center mb-10">Folio de OS (vacio por default)</label>
                                          <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="folio-os" name="folio-os" placeholder="Folio OS">
                                          <div id="response_folio_os_validate"><span class="dm-tag tag-light ">Se registrara un folio de manera automatica</span></div>
                                       </div>
                                       <div class="col-md-3 mb-25">
                                          <div class="form-group form-group-calender mb-20">
                                             <label for="datepicker8" class="il-gray fs-14 fw-500 align-center mb-10">Fecha de Recepcion</label>
                                             <div class="position-relative">
                                                <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light" id="datepicker8" name="fecha_recepcion" required placeholder="">
                                                <a href="#"><img class="svg" src="img/svg/calendar.svg" alt="calendar"></a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-3 mb-25">
                                          <label for="select-search-recibido-por" class="il-gray fs-14 fw-500 align-center mb-10">Recibido por</label>
                                          <div class="dm-select-list d-flex">
                                             <div class="dm-select">
                                                <select name="recibido_por" id="select-search-recibido-por" class="form-control" required>
                                                   <option value="">Recibido por ...</option>
                                                   <?php 
                                                      $result = mysqli_query($mysqli, "SELECT * FROM user_hx");
                                                      while ($row = mysqli_fetch_assoc($result)) {
                                                         echo '<option value="'.$row['id_user'].'">'.$row['nombre'].' '.$row['apellidos'].'</option>';
                                                      } 
                                                   ?>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group row mb-n25">
                                       <div class="col-md-3 mb-25">
                                          <label for="select-search-asignacion-dpto" class="il-gray fs-14 fw-500 align-center mb-10">Asignado al Departamento</label>
                                          <div class="dm-select-list d-flex">
                                             <div class="dm-select">
                                                <select name="asignacion_dpto" id="select-search-asignacion-dpto" class="form-control" required>
                                                   <option value="">Recibido por ...</option>
                                                   <?php 
                                                      $result = mysqli_query($mysqli, "SELECT * FROM departamentos_internal_hx");
                                                      while ($row = mysqli_fetch_assoc($result)) {
                                                         echo '<option value="'.$row['id_depto_inter'].'">'.$row['nombre_dept'].' ('.$row['descripcion_dpto'].')</option>';
                                                      } 
                                                   ?>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="card card-default card-md mb-4">
                              <div class="card-header">
                                 <h6>Datos del Equipo</h6>
                              </div>
                              <div class="card-body py-md-30">
                                 
                                    <div class="form-group row mb-n25">
                                       <div class="col-md-4 mb-25">
                                          
                                             <label for="select-search-tipo-equipo" class="il-gray fs-14 fw-500 align-center mb-10">Tipo de Equipo</label>
                                             <div class="dm-select-list d-flex">
                                                <div class="dm-select">
                                                   <select name="tipo_equipo" id="select-search-tipo-equipo" class="form-control" required>
                                                      <option value="">Ingresa tipo de equipo... </option>
                                                      <?php 
                                                         $result = mysqli_query($mysqli, "SELECT * FROM cat_tipos_equipos_hx where status=1;");
                                                         while ($row = mysqli_fetch_assoc($result)) {
                                                            echo '<option value="'.$row['id_cat_tipos_equipos_hx'].'">'.$row['nombre_tipo_equipo'].'</option>';
                                                         } 
                                                      ?>
                                                   </select>
                                                </div>
                                             </div>
                                          
                                       </div>
                                       
                                       <div class="col-md-4 mb-25">
                                          <label for="marca" class="il-gray fs-14 fw-500 align-center mb-10">Marca</label>
                                          <div class="dm-select-list d-flex">
                                                <div class="dm-select">
                                             <select name="marca_equipo" id="select-search-marca-equipo" class="form-control" required>
                                                <option value="">Ingresa marca del equipo... </option>
                                          
                                             <?php 
                                                $result = mysqli_query($mysqli, "SELECT * FROM cat_marcas_equipo_hx where status=1;");
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                   echo '<option value="'.$row['id_cat_marcas_equipo_hx'].'">'.$row['nombre_marcas_equipos'].'</option>';
                                                } 
                                             ?>
                                             </select>
                                             </div>
                                             </div>
                                          
                                       </div>
                                       <div class="col-md-4 mb-25">
                                       <label for="modelo-equipo" class="il-gray fs-14 fw-500 align-center mb-10">Modelo del Equipo</label>
                                          <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" list="lista-equipos-registrados" id="modelo-equipo" name="modelo_equipo" required placeholder="Modelo del Equipo">
                                          <datalist id="lista-equipos-registrados">
                                          <?php 
                                                $result = mysqli_query($mysqli, "SELECT modelo FROM orden_servicio_hx;");
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                   echo '<option>'.$row['modelo'].'</option>';
                                                } 
                                             ?>
                                          </datalist>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6 mb-25">
                                             <label for="serial-number" class="il-gray fs-14 fw-500 align-center mb-10">Numero de Serie</label>
                                             <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="serial-number" name="serial-number" required placeholder="Numero de Serie">
                                             
                                             
                                          </div>
                                          <div class="col-md-6 mb-25">
                                             <div id="response_validate_sn"></div>
                                          </div>
                                       </div>
                                    </div>
                                 
                              </div>
                           </div>
                        </div>
                        
                        <div class="col-lg-12">
                           <div class="card card-horizontal card-default card-md mb-4">
                              <div class="card-header">
                                 <h6>Informacion de la Solicitud de Servicio</h6>
                              </div>
                              <div class="card-body py-md-30">
                                 <div class="row">
                                    <div class="col-md-12 mb-25">
                                       <label for="asunto_falla" class="il-gray fs-14 fw-500 align-center mb-10">Asunto o Falla Reportada Breve</label>
                                       <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="asunto_falla" name="asunto_falla" required placeholder="Asunto o Falla Reportada Breve">
                                    </div>   
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12 mb-25">
                                       <label for="descripcion_falla" class="il-gray fs-14 fw-500 align-center mb-10">Descripcion a Detalle de la Falla segun el cliente</label>
                                       <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="descripcion_falla" name="descripcion_falla" required placeholder="Detalle Falla Reportada">
                                    </div>   
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12 mb-25">
                                       <label for="comentarios_observaciones_falla" class="il-gray fs-14 fw-500 align-center mb-10">Comentarios u Observaciones al Recibir el Equipo</label>
                                       <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="comentarios_observaciones_falla" name="comentarios_observaciones_falla"  placeholder="Comentario tecnicos al recibir equipo">
                                    </div>   
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12 mb-25">
                                       <label for="accesorios_adicionales_os" class="il-gray fs-14 fw-500 align-center mb-10">Accesorios / Caja / Cables / Cargador recibidos</label>
                                       <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="accesorios_adicionales_os" name="accesorios_adicionales_os"  placeholder="Ingresar accesorios adicionales recibidos">
                                    </div>   
                                 </div>
                              </div>
                           </div>
                           <!-- ends: .card -->
                           <div class="row justify-content-md-center">
                              <div class="col-md-3 mb-25">
                                 <input type="submit" class="btn btn-success btn-lg btn-squared btn-block" value="GUARDAR REGISTRO">
                                
                              </div>   
                           </div>
                        </div>
                        </form>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>

      </div>
      <footer class="footer-wrapper">
         <div class="footer-wrapper__inside">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                     <div class="footer-copyright">
                        <p><span>© 2023</span><a href="#">Sovware</a>
                        </p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-menu text-end">
                        <ul>
                           <li>
                              <a href="#">About</a>
                           </li>
                           <li>
                              <a href="#">Team</a>
                           </li>
                           <li>
                              <a href="#">Contact</a>
                           </li>
                        </ul>
                     </div>
                     <!-- ends: .Footer Menu -->
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </main>
   <div id="overlayer">
      <div class="loader-overlay">
         <div class="dm-spin-dots spin-lg">
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
            <span class="spin-dot badge-dot dot-primary"></span>
         </div>
      </div>
   </div>
   <div class="overlay-dark-sidebar"></div>
   <div class="customizer-overlay"></div>
   <?php include("modals/mdl_registrar_cliente.php"); ?>
   <script>
      //Loader CLient
        $(document).ready(function(){
            $("#select-alerts2").select2({
                ajax: {
                    url: "ajax/consulta_cliente_listado.php",
                    type: "post",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            searchTerm: params.term // search term
                        };
                    },
                    processResults: function (response) {
                        return {
                            results: response
                            
                        };
                    },
                    cache: true
                }
            });
            //Limpiar Select 
            $("#registrar_cliente").on("click",function(){
               $('#select-alerts2').val("0").trigger('change');

            });
            //Insertar Datos
            $('#frm_registrar_cliente').on("submit", function(event){  
               event.preventDefault();  
               if($('#nombre_cliente').val() == ""){
                  alert("Nombre Requerido");
               }else{  
                     $.ajax({  
                     url:"ajax/ajx_inserta_cliente_nuevo.php",  
                     method:"POST",  
                     data:$('#frm_registrar_cliente').serialize(),  
                     beforeSend:function(){  
                        $('#save_insert_btn').val("Guardando...");  
                     },  
                     success:function(data){  
                        $('#frm_registrar_cliente')[0].reset();  
                        $('#modal-registrar-nuevo-cliente').modal('hide');  
                        $('#response_insert').html(data);
                        $('#save_insert_btn').val("Guardar");
                     }  
                  });  
               }  
            });
            //VAlidar Existentes en Numero de Serie
            $('#serial-number').on("focusout", function(event){ 
               event.preventDefault();  
               if($('#serial-number').val() == ""){
                  data = "<br><br><span class='dm-tag tag-warning'> Requerido el numero de serie</span>";
                  $('#response_validate_sn').html(data);
               }else{  
                  data = "<br><br><span class='dm-tag tag-light'><img width='15px' src='img/loader.gif'> Validando</span>";
                  $('#response_validate_sn').html(data);
                  
                     $.ajax({  
                     url:"ajax/ajx_valida_numero_serie_existente.php",  
                     method:"POST", 
                     data:$('#serial-number').serialize(),  
                     beforeSend:function(){  
                        
                     },  
                     success:function(data){  
                        
                        
                        $('#response_validate_sn').html(data);
                        
                     }  
                  });  
                  
               }  
            });
            //Validar Existentes en Folio
            $('#folio-os').on("focusout", function(event){ 
               event.preventDefault();  
               if($('#folio-os').val() == ""){
                  
                  data = "<span class='dm-tag tag-light'>Se registrara un folio de manera automatica</span>";
                  $('#response_folio_os_validate').html(data);
               }else{  
                  var folio = $('#folio-os').val();
                  data = "<span class='dm-tag tag-light'><img width='15px' src='img/loader.gif'> Validando</span>";
                  $('#response_folio_os_validate').html(data);
                  
                     $.ajax({  
                     url:"ajax/ajx_consulta_folio_os_existente.php",  
                     method:"POST", 
                     data:$('#folio-os').serialize(),  
                     beforeSend:function(){  
                        
                     },  
                     success:function(data){ 
                        
                        var cantidad =parseInt(data);
                        var string_validacion = "";
                        if(cantidad > 0 ){
                           swal("Folio ya registrado: "+folio, "Ingresa Otro Folio o deja vacio para generar uno automaticamente");
                           $('#folio-os').val("");
                           string_validacion = "<span class='dm-tag tag-light'>Se registrara un folio de manera automatica</span>";
                          
                        }else{
                           string_validacion = "<span class='dm-tag tag-success'>Folio Disponible</span>";
                           
                        }
                        $('#response_folio_os_validate').html(string_validacion);
                        
                     }  
                  });  
                  
               }  
            });
        });

   </script>
   <script>
    document.addEventListener('DOMContentLoaded', e => {
        $('#modelo-equipo').autocomplete()
    }, false);
   </script>
   
   <!-- inject:js-->
   <script src="assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"></script>
   <script src="assets/vendor_assets/js/jquery/jquery-ui.js"></script>
   <script src="assets/vendor_assets/js/bootstrap/popper.js"></script>
   <script src="assets/vendor_assets/js/bootstrap/bootstrap.min.js"></script>
   <script src="assets/vendor_assets/js/moment/moment.min.js"></script>
   <script src="assets/vendor_assets/js/accordion.js"></script>
   <script src="assets/vendor_assets/js/apexcharts.min.js"></script>
   <script src="assets/vendor_assets/js/autoComplete.js"></script>
   <script src="assets/vendor_assets/js/Chart.min.js"></script>
   <script src="assets/vendor_assets/js/daterangepicker.js"></script>
   <script src="assets/vendor_assets/js/drawer.js"></script>
   <script src="assets/vendor_assets/js/dynamicBadge.js"></script>
   <script src="assets/vendor_assets/js/dynamicCheckbox.js"></script>
   <script src="assets/vendor_assets/js/footable.min.js"></script>
   <script src="assets/vendor_assets/js/fullcalendar@5.2.0.js"></script>
   <script src="assets/vendor_assets/js/google-chart.js"></script>
   <script src="assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js"></script>
   <script src="assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js"></script>
   <script src="assets/vendor_assets/js/jquery.countdown.min.js"></script>
   <script src="assets/vendor_assets/js/jquery.filterizr.min.js"></script>
   <script src="assets/vendor_assets/js/jquery.magnific-popup.min.js"></script>
   <script src="assets/vendor_assets/js/jquery.peity.min.js"></script>
   <script src="assets/vendor_assets/js/jquery.star-rating-svg.min.js"></script>
   <script src="assets/vendor_assets/js/leaflet.js"></script>
   <script src="assets/vendor_assets/js/leaflet.markercluster.js"></script>
   <script src="assets/vendor_assets/js/loader.js"></script>
   <script src="assets/vendor_assets/js/message.js"></script>
   <script src="assets/vendor_assets/js/moment.js"></script>
   <script src="assets/vendor_assets/js/muuri.min.js"></script>
   <script src="assets/vendor_assets/js/notification.js"></script>
   <script src="assets/vendor_assets/js/popover.js"></script>
   <script src="assets/vendor_assets/js/select2.full.min.js"></script>
   <script src="assets/vendor_assets/js/slick.min.js"></script>
   <script src="assets/vendor_assets/js/trumbowyg.min.js"></script>
   <script src="assets/vendor_assets/js/wickedpicker.min.js"></script>
   <script src="assets/theme_assets/js/apexmain.js"></script>
   <script src="assets/theme_assets/js/charts.js"></script>
   <script src="assets/theme_assets/js/drag-drop.js"></script>
   <script src="assets/theme_assets/js/footable.js"></script>
   <script src="assets/theme_assets/js/full-calendar.js"></script>
   <script src="assets/theme_assets/js/googlemap-init.js"></script>
   <script src="assets/theme_assets/js/icon-loader.js"></script>
   <script src="assets/theme_assets/js/jvectormap-init.js"></script>
   <script src="assets/theme_assets/js/leaflet-init.js"></script>
   <script src="assets/theme_assets/js/main.js"></script>
   <script src="js/bootstrap-autocomplete.js"></script>
   <!-- endinject-->
</body>

</html>