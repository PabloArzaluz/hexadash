<?php
   session_start();
   include("include/config.php");
	include("include/functions.php");
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
                        <div class="col-lg-12">
                           <div class="card card-horizontal card-default card-md mb-4">
                              <div class="card-header">
                                 <h6>Datos del Cliente</h6>
                              </div>
                              <div class="card-body py-md-30">
                                 <div class="row">
                                 <div class="col-lg-9">
                                    <div class="mb-25 select-style2">
                                       <div class="dm-select ">
                                          <select name="select-alerts2" id="select-alerts2" class="form-control ">
                                             <option value="0">Seleccione o Registre un cliente</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <button id="registrar_cliente" data-bs-toggle="modal" data-bs-target="#modal-registrar-nuevo-cliente" class="btn btn-sm btn-info">Registrar Nuevo Cliente</button>
                                 </div>
                                 </div>
                                 
                              </div>
                           </div>
                           <!-- ends: .card -->
                        </div>
                        <div class="col-lg-12">
                           <div class="card card-default card-md mb-4">
                              <div class="card-header">
                                 <h6>Datos de Cliente</h6>
                              </div>
                              <div class="card-body py-md-30">
                                 <form action="#">
                                    <div class="form-group row mb-n25">
                                       <div class="col-md-6 mb-25">
                                          <div class="with-icon">
                                             <span class="la-user lar color-light"></span>
                                             <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon1" placeholder="Duran Clayton">
                                          </div>
                                       </div>
                                       <div class="col-md-6 mb-25">
                                          <div class="with-icon">
                                             <span class="las la-envelope color-light"></span>
                                             <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon2" placeholder="Email">
                                          </div>
                                       </div>
                                       <div class="col-md-6 mb-25">
                                          <div class="with-icon">
                                             <span class="las la-map-marker color-light"></span>
                                             <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon3" placeholder="Location">
                                          </div>
                                       </div>
                                       <div class="col-md-6 mb-25">
                                          <div class="with-icon">
                                             <span class="la-lock las color-light"></span>
                                             <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon4" placeholder="Password">
                                          </div>
                                       </div>
                                       <div class="col-md-6 mb-25">
                                          <div class="with-icon">
                                             <span class="las la-credit-card color-light"></span>
                                             <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon5" placeholder="Payment Method">
                                          </div>
                                       </div>
                                       <div class="col-md-6 mb-25">
                                          <div class="with-icon">
                                             <span class="la-phone las color-light"></span>
                                             <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon6" placeholder="Phone Number">
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        
                        <div class="col-lg-12">
                           <div class="card card-horizontal card-default card-md mb-4">
                              <div class="card-header">
                                 <h6>Datepicker</h6>
                              </div>
                              <div class="card-body py-md-30">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group form-group-calender mb-20">
                                          <label for="datepicker8" class="il-gray fs-14 fw-500 align-center mb-10">Date</label>
                                          <div class="position-relative">
                                             <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light" id="datepicker8" placeholder="01/10/2021">
                                             <a href="#"><img class="svg" src="img/svg/calendar.svg" alt="calendar"></a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group form-group-calender">
                                          <div id="pageWrapper">
                                             <div id="pageMasthead" class="pageSection"></div>
                                             <div id="pageContentArea" class="pageSection">
                                                <form>
                                                   <label for="txtDateRange" class="il-gray fs-14 fw-500 align-center mb-10">Date
                                                      Range:</label>
                                                   <input type="text" id="txtDateRange" name="txtDateRange" class="inputField shortInputField dateRangeField form-control  ih-medium ip-gray radius-xs b-light" placeholder="01/10/2021 - 01/15/2021" data-from-field="txtDateFrom" data-to-field="txtDateTo" />
                                                   <input type="hidden" id="txtDateFrom" value="" />
                                                   <input type="hidden" id="txtDateTo" value="" />
                                                </form>
                                             </div>
                                             <div id="pageFooter" class="pageSection"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- ends: .card -->
                        </div>
                        <div class="col-lg-12">
                           <div class="card card-horizontal card-default card-md mb-4">
                              <div class="card-header">
                                 <h6>Text Editor</h6>
                              </div>
                              <div class="card-body py-md-30">
                                 <div class="form-group formElement-editor mb-0">
                                    <textarea name="message" id="mail-reply-message2" class="form-control-lg" placeholder="Type your message..."></textarea>
                                 </div>
                              </div>
                           </div>
                           <!-- ends: .card -->
                        </div>
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
            $("#registrar_cliente").on("click",function(){
               $('#select-alerts2').val("0").trigger('change');

            });
        });

        </script>
   <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBgYKHZB_QKKLWfIRaYPCadza3nhTAbv7c"></script>
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
   <!-- endinject-->
</body>

</html>