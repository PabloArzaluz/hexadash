<?php
   session_start();
   error_reporting(E_ALL); ini_set("display_errors", 1);
   include("include/config.php");
	include("include/functions.php");
   include("include/connect.php");
   $menu_active = "ordenes-servicio";
   $submenu_active = "listado-ordenes";
?>
<!doctype html>
<html lang="es" dir="ltr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Listado OS</title>

   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- inject:css-->
   <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
   
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
   <script src="https://kit.fontawesome.com/fa89fd9540.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/style.css">
   <!-- endinject -->
   <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
   <!-- Fonts -->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

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
                     <h4 class="text-capitalize breadcrumb-title">Data Table</h4>
                     <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Dashboard</a></li>
                              <li class="breadcrumb-item"><a href="#">Apps</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                           </ol>
                        </nav>
                     </div>
                  </div>

               </div>
            </div>
            <div class="row">
               <!-- start Table-->
               <div class="col-12">
               <div class="card card-default card-md mb-4">
                        <div class="card-header">
                           <h6>Listado de Ordenes de Servicio</h6>
                        </div>
                        <div class="card-body">
                           
                           
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="cards-wrapper">
                                    <div class="card-single mb-4">
                                    <table id="example" class="display" style="width:100%">
                                       <thead>
                                             <tr>
                                                <th>Folio</th>
                                                <th>Cliente / Empresa</th>
                                                <th>Descripcion</th>
                                                <th>Tipo / Marca / Modelo</th>
                                                <th>Estatus</th>
                                                <th>Asignacion</th>
                                             </tr>
                                       </thead>
                                       <tbody>
                                          <?php 
                                             $consulta = "SELECT 
                                             id_orden_servicio_hx,folio_orden,clientes_hx.nombre as nombrecliente, empresa as empresacliente,
                                              asunto_falla,
                                              cat_marcas_equipo_hx.nombre_marcas_equipos as nombremarca,
                                              cat_tipos_equipos_hx.nombre_tipo_equipo as nombretipoequipo, modelo, numero_serie,status_actual,nombre_dept AS nombredepartamento,fecha_ingreso,
                                              ultima_actualizacion_status
                                          from orden_servicio_hx
                                          inner join clientes_hx on clientes_hx.id_clientes_hx = orden_servicio_hx.id_cliente
                                          inner join cat_marcas_equipo_hx on cat_marcas_equipo_hx.id_cat_marcas_equipo_hx = orden_servicio_hx.id_marca
                                          inner join cat_tipos_equipos_hx on cat_tipos_equipos_hx.id_cat_tipos_equipos_hx = orden_servicio_hx.id_tipo
                                          left JOIN departamentos_internal_hx ON id_depto_inter = orden_servicio_hx.departamento_asignado;";
                                             $result = mysqli_query($mysqli, $consulta);
                                             while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr>';
                                                   echo '<td><a href="#">'.$row['folio_orden'].'</a></td>';
                                                   echo '<td><div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                               <a href="#" class="text-dark fw-500">
                                                                  <h6>'.$row['nombrecliente'].'</h6>
                                                               </a>
                                                               <p class="">
                                                               '.$row['empresacliente'].'
                                                               </p>
                                                            </div>
                                                         </div></td>';
                                                   echo '<td>'.$row['asunto_falla'].'</td>';
                                                   echo '<td><span class="color-dark fs-11">'.strtoupper($row['modelo']).'</span><br>
                                                   <span class="color-light fs-11 mt-0 mb-0"><i class="fa-solid fa-timeline"></i> Serie: '.$row['numero_serie'].'</span><br>
                                                            <span class="color-light fs-11 mt-0 mb-0"><i class="fa-solid fa-timeline"></i> Marca: '.$row['nombremarca'].'</span><br>
                                                            <span class="color-light fs-11 mt-0 mb-0"><i class="fa-solid fa-display"></i> Tipo: '.$row['nombretipoequipo'].'</span></td>';
                                                   echo "<td>".regresa_estatus_os($row['status_actual'],"badge-status")."</td>";
                                                   
                                                   echo '<td><span class="dm-tag tag-secondary tag-transparented">'.$row['nombredepartamento'].'</span><br>
                                                   <span class="color-light fs-11 mt-0 mb-0"><i class="fa-solid fa-calendar-days"></i> Fecha Ingreso: '.formatea_fecha($row['fecha_ingreso'] ,"d-m-Y").'</span><br>
                                                   <span class="color-light fs-11 mt-0 mb-0"><i class="fa-solid fa-calendar-days"></i> Actualizacion Estado: '.formatea_fecha($row['ultima_actualizacion_status'] ,"d-m-Y").'</span><br>
                                                   <span class="color-light fs-11 mt-0 mb-0"><i class="fa-solid fa-calendar-days"></i> Dias desde ingreso: '.formatea_fecha($row['ultima_actualizacion_status'] ,"d-m-Y").'</span>
                                                   </td>';
                                                   
                                                echo '</tr>';
                                             } 
                                          ?>
      
            
        </tbody>
        <tfoot>
            <tr>
            <th>Folio</th>
                                                <th>Cliente / Empresa</th>
                                                <th>Descripcion</th>
                                                <th>Tipo / Marca / Modelo</th>
                                                <th>Estatus</th>
                                                <th>Asignacion</th>
            </tr>
        </tfoot>
    </table>
                                       



                                    </div>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               
               </div>
               <!-- End Table-->
               <div class="col-12 mb-30">
                  <div class="support-ticket-system support-ticket-system--search">

                     <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                        <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                           <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                              <h4 class="text-capitalize fw-500 breadcrumb-title">Data Table</h4>
                           </div>
                        </div>
                        <div class="action-btn">
                           <a href="#" class="btn btn-primary">
                              Export
                              <i class="las la-angle-down"></i>
                           </a>
                        </div>
                     </div>

                     <div class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">
                        <div class="support-form__input">
                           <div class="d-flex flex-wrap">
                              <div class="support-form__input-id">
                                 <label>Id:</label>

                                 <div class="dm-select ">

                                    <select name="select-search" class="select-search form-control ">
                                       <option value="01">All</option>
                                       <option value="02">Option 2</option>
                                       <option value="03">Option 3</option>
                                       <option value="04">Option 4</option>
                                       <option value="05">Option 5</option>
                                    </select>

                                 </div>

                              </div>
                              <div class="support-form__input-status">
                                 <label>status:</label>

                                 <div class="dm-select ">

                                    <select name="select-search" class="select-search form-control ">
                                       <option value="01">All</option>
                                       <option value="02">Option 2</option>
                                       <option value="03">Option 3</option>
                                       <option value="04">Option 4</option>
                                       <option value="05">Option 5</option>
                                    </select>

                                 </div>

                              </div>
                              <button class="support-form__input-button">search</button>
                           </div>
                        </div>
                        <div class="support-form__search">
                           <div class="support-order-search">
                              <form action="/" class="support-order-search__form">
                                 <img src="img/svg/search.svg" alt="search" class="svg">
                                 <input class="form-control border-0 box-shadow-none" type="search" placeholder="Search" aria-label="Search">
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                        <div class="table-responsive">
                           <table class="table mb-0 table-borderless">
                              <thead>
                                 <tr class="userDatatable-header">
                                    <th class="pe-0">
                                       <div class="d-flex align-items-center">
                                          <div class="custom-checkbox  check-all">
                                             <input class="checkbox" type="checkbox" id="check-333">
                                             <label for="check-333" class="ps-0">
                                                <span class="checkbox-text userDatatable-title"></span>
                                             </label>
                                          </div>
                                       </div>
                                    </th>
                                    <th>
                                       <span class="userDatatable-title">User</span>
                                    </th>
                                    <th>
                                       <span class="userDatatable-title">Country</span>
                                    </th>
                                    <th>
                                       <span class="userDatatable-title">Company</span>
                                    </th>
                                    <th>
                                       <span class="userDatatable-title">Position</span>
                                    </th>
                                    <th>
                                       <span class="userDatatable-title">Join Date</span>
                                    </th>
                                    <th>
                                       <span class="userDatatable-title">Status</span>
                                    </th>
                                    <th class="actions">
                                       <span class="userDatatable-title">Actions</span>
                                    </th>
                                 </tr>
                              </thead>
                              <tbody>

                                 <tr>
                                    <td class="pe-0">
                                       <div class="d-flex">
                                          <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                             <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-#01">
                                                      <label for="check-grp-#01" class="ps-0"></label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="d-flex">
                                          <div class="userDatatable-inline-title">
                                             <a href="#" class="text-dark fw-500">
                                                <h6>Kellie Marquot</h6>
                                             </a>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          United Street
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Business Development
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          Web Developer
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          January 20, 2020
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content d-inline-block">
                                          <span class="bg-opacity-success  color-success userDatatable-content-status active">active</span>
                                       </div>
                                    </td>
                                    <td>
                                       <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                          <li>
                                             <a href="#" class="view">
                                                <i class="uil uil-setting"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </td>
                                 </tr>


                                 <tr>
                                    <td class="pe-0">
                                       <div class="d-flex">
                                          <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                             <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-#02">
                                                      <label for="check-grp-#02" class="ps-0"></label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="d-flex">
                                          <div class="userDatatable-inline-title">
                                             <a href="#" class="text-dark fw-500">
                                                <h6>Robert Clinton</h6>
                                             </a>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Japan
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Vehicle Master
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          Senior Manager
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          January 20, 2020
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content d-inline-block">
                                          <span class="bg-opacity-warning  color-warning userDatatable-content-status active">deactivated</span>
                                       </div>
                                    </td>
                                    <td>
                                       <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                          <li>
                                             <a href="#" class="view">
                                                <i class="uil uil-setting"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </td>
                                 </tr>


                                 <tr>
                                    <td class="pe-0">
                                       <div class="d-flex">
                                          <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                             <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-#03">
                                                      <label for="check-grp-#03" class="ps-0"></label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="d-flex">
                                          <div class="userDatatable-inline-title">
                                             <a href="#" class="text-dark fw-500">
                                                <h6>Chris Joe</h6>
                                             </a>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          South Africa
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Business Development
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          Content writer
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          July 30, 2020
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content d-inline-block">
                                          <span class="bg-opacity-danger  color-danger userDatatable-content-status active">blocked</span>
                                       </div>
                                    </td>
                                    <td>
                                       <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                          <li>
                                             <a href="#" class="view">
                                                <i class="uil uil-setting"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </td>
                                 </tr>


                                 <tr>
                                    <td class="pe-0">
                                       <div class="d-flex">
                                          <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                             <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-#04">
                                                      <label for="check-grp-#04" class="ps-0"></label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="d-flex">
                                          <div class="userDatatable-inline-title">
                                             <a href="#" class="text-dark fw-500">
                                                <h6>Jack Kalis</h6>
                                             </a>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          South Korea
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Smart Collection
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          UX/UI Designer
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          June 20, 2020
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content d-inline-block">
                                          <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                       </div>
                                    </td>
                                    <td>
                                       <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                          <li>
                                             <a href="#" class="view">
                                                <i class="uil uil-setting"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </td>
                                 </tr>


                                 <tr>
                                    <td class="pe-0">
                                       <div class="d-flex">
                                          <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                             <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-#05">
                                                      <label for="check-grp-#05" class="ps-0"></label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="d-flex">
                                          <div class="userDatatable-inline-title">
                                             <a href="#" class="text-dark fw-500">
                                                <h6>Black Smith</h6>
                                             </a>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          United Kingdom
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Print Media
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          Graphic Designer
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          August 20, 2020
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content d-inline-block">
                                          <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                       </div>
                                    </td>
                                    <td>
                                       <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                          <li>
                                             <a href="#" class="view">
                                                <i class="uil uil-setting"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </td>
                                 </tr>


                                 <tr>
                                    <td class="pe-0">
                                       <div class="d-flex">
                                          <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                             <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-#06">
                                                      <label for="check-grp-#06" class="ps-0"></label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="d-flex">
                                          <div class="userDatatable-inline-title">
                                             <a href="#" class="text-dark fw-500">
                                                <h6>Aftab Ahmed</h6>
                                             </a>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Bangladesh
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Online Super Shop
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          Marketer
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          January 15, 2021
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content d-inline-block">
                                          <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                       </div>
                                    </td>
                                    <td>
                                       <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                          <li>
                                             <a href="#" class="view">
                                                <i class="uil uil-setting"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </td>
                                 </tr>


                                 <tr>
                                    <td class="pe-0">
                                       <div class="d-flex">
                                          <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                             <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-#07">
                                                      <label for="check-grp-#07" class="ps-0"></label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="d-flex">
                                          <div class="userDatatable-inline-title">
                                             <a href="#" class="text-dark fw-500">
                                                <h6>Daniel White</h6>
                                             </a>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Australia
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Business Development
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          Project Manager
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          January 20, 2021
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content d-inline-block">
                                          <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                       </div>
                                    </td>
                                    <td>
                                       <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                          <li>
                                             <a href="#" class="view">
                                                <i class="uil uil-setting"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </td>
                                 </tr>


                                 <tr>
                                    <td class="pe-0">
                                       <div class="d-flex">
                                          <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                             <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-#08">
                                                      <label for="check-grp-#08" class="ps-0"></label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="d-flex">
                                          <div class="userDatatable-inline-title">
                                             <a href="#" class="text-dark fw-500">
                                                <h6>Black Smith</h6>
                                             </a>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          United Kingdom
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Print Media
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          Graphic Designer
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          August 20, 2020
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content d-inline-block">
                                          <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                       </div>
                                    </td>
                                    <td>
                                       <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                          <li>
                                             <a href="#" class="view">
                                                <i class="uil uil-setting"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </td>
                                 </tr>


                                 <tr>
                                    <td class="pe-0">
                                       <div class="d-flex">
                                          <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                             <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-#09">
                                                      <label for="check-grp-#09" class="ps-0"></label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="d-flex">
                                          <div class="userDatatable-inline-title">
                                             <a href="#" class="text-dark fw-500">
                                                <h6>Aftab Ahmed</h6>
                                             </a>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Bangladesh
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Online Super Shop
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          Marketer
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          January 15, 2021
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content d-inline-block">
                                          <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                       </div>
                                    </td>
                                    <td>
                                       <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                          <li>
                                             <a href="#" class="view">
                                                <i class="uil uil-setting"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </td>
                                 </tr>


                                 <tr>
                                    <td class="pe-0">
                                       <div class="d-flex">
                                          <div class="userDatatable__imgWrapper d-flex align-items-center m-0">
                                             <div class="checkbox-group-wrapper">
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-#10">
                                                      <label for="check-grp-#10" class="ps-0"></label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="d-flex">
                                          <div class="userDatatable-inline-title">
                                             <a href="#" class="text-dark fw-500">
                                                <h6>Daniel White</h6>
                                             </a>
                                          </div>
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Australia
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--subject">
                                          Business Development
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          Project Manager
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content--priority">
                                          January 20, 2021
                                       </div>
                                    </td>
                                    <td>
                                       <div class="userDatatable-content d-inline-block">
                                          <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                       </div>
                                    </td>
                                    <td>
                                       <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                          <li>
                                             <a href="#" class="view">
                                                <i class="uil uil-setting"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </td>
                                 </tr>

                              </tbody>
                           </table>
                        </div>
                        <div class="d-flex justify-content-end pt-30">

                           <nav class="dm-page ">
                              <ul class="dm-pagination d-flex">
                                 <li class="dm-pagination__item">
                                    <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                    <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                                    <a href="#" class="dm-pagination__link active"><span class="page-number">2</span></a>
                                    <a href="#" class="dm-pagination__link"><span class="page-number">3</span></a>
                                    <a href="#" class="dm-pagination__link pagination-control"><span class="page-number">...</span></a>
                                    <a href="#" class="dm-pagination__link"><span class="page-number">12</span></a>
                                    <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                    <a href="#" class="dm-pagination__option">
                                    </a>
                                 </li>
                                 <li class="dm-pagination__item">
                                    <div class="paging-option">
                                       <select name="page-number" class="page-selection">
                                          <option value="20">20/page</option>
                                          <option value="40">40/page</option>
                                          <option value="60">60/page</option>
                                       </select>
                                    </div>
                                 </li>
                              </ul>
                           </nav>


                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 mb-30">
                  <div class="card">
                     <div class="card-header color-dark fw-500">
                        Project List
                     </div>
                     <div class="card-body">

                        <div class="userDatatable projectDatatable project-table w-100 border-0 table-responsive--dynamic">
                           <div class="table-responsive">
                              <table class="table mb-0">
                                 <thead>
                                    <tr class="userDatatable-header">
                                       <th>
                                          <span class="projectDatatable-title">project</span>
                                       </th>
                                       <th>
                                          <span class="projectDatatable-title">start date</span>
                                       </th>
                                       <th>
                                          <span class="projectDatatable-title">deadline</span>
                                       </th>
                                       <th>
                                          <span class="projectDatatable-title">Assigned To</span>
                                       </th>
                                       <th>
                                          <span class="projectDatatable-title">status</span>
                                       </th>
                                       <th>
                                          <span class="projectDatatable-title">completion</span>
                                       </th>
                                       <th>
                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody>

                                    <tr>
                                       <td>
                                          <div class="d-flex">
                                             <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                   <h6>Dashboard UI Project</h6>
                                                </a>
                                                <p class="pt-1 d-block mb-0">
                                                   Web Design
                                                </p>
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             26 Dec 2019
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             18 Mar 2020
                                          </div>
                                       </td>
                                       <td>


                                          <ul class="d-flex user-group-people__parent align-content-center">
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm1.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm2.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm3.png" alt="author"></a>
                                             </li>
                                          </ul>

                                       </td>
                                       <td>

                                          <div class="d-inline-block">
                                             <span class="media-badge color-white bg-primary">early</span>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress d-flex align-items-center">

                                             <div class="user-group-progress-bar">

                                                <div class="progress-wrap d-flex align-items-center mb-0">
                                                   <div class="progress">
                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                   </div>


                                                   <span class="progress-percentage">30%</span>


                                                </div>

                                                <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                             </div>


                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress text-end">


                                             <div class="dropdown  dropdown-click ">

                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                </button>


                                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu--dynamic dropdown-menu">
                                                   <a class="dropdown-item" href="#">Item One</a>
                                                   <a class="dropdown-item" href="#">Item Two</a>
                                                   <a class="dropdown-item" href="#">Item Three</a>

                                                </div>
                                             </div>


                                          </div>
                                       </td>
                                    </tr>


                                    <tr>
                                       <td>
                                          <div class="d-flex">
                                             <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                   <h6>Custom Software Development</h6>
                                                </a>
                                                <p class="pt-1 d-block mb-0">
                                                   Web Design
                                                </p>
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             26 Dec 2019
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             18 Mar 2020
                                          </div>
                                       </td>
                                       <td>

                                          <ul class="d-flex user-group-people__parent align-content-center">
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm1.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm2.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm3.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm4.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm6.png" alt="author"></a>
                                             </li>
                                             <li class="d-flex align-items-center ms-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                          </ul>


                                       </td>
                                       <td>

                                          <div class="d-inline-block">
                                             <span class="media-badge color-white bg-secondary">on time</span>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress d-flex align-items-center">
                                             <div class="user-group-progress-bar">
                                                <div class="progress-wrap d-flex align-items-center mb-0">
                                                   <div class="progress">
                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                   </div>
                                                   <span class="progress-percentage">30%</span>
                                                </div>
                                                <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress text-end">


                                             <div class="dropdown  dropdown-click ">

                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                </button>


                                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu--dynamic dropdown-menu">
                                                   <a class="dropdown-item" href="#">Item One</a>
                                                   <a class="dropdown-item" href="#">Item Two</a>
                                                   <a class="dropdown-item" href="#">Item Three</a>

                                                </div>
                                             </div>


                                          </div>
                                       </td>
                                    </tr>


                                    <tr>
                                       <td>
                                          <div class="d-flex">
                                             <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                   <h6>Application UI Design</h6>
                                                </a>
                                                <p class="pt-1 d-block mb-0">
                                                   Web Design
                                                </p>
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             26 Dec 2019
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             18 Mar 2020
                                          </div>
                                       </td>
                                       <td>

                                          <ul class="d-flex user-group-people__parent align-content-center">
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm1.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm2.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm3.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm4.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm6.png" alt="author"></a>
                                             </li>
                                             <li class="d-flex align-items-center ms-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                          </ul>


                                       </td>
                                       <td>

                                          <div class="d-inline-block">
                                             <span class="media-badge color-white bg-primary">early</span>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress d-flex align-items-center">

                                             <div class="user-group-progress-bar">

                                                <div class="progress-wrap d-flex align-items-center mb-0">
                                                   <div class="progress">
                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                   </div>


                                                   <span class="progress-percentage">30%</span>


                                                </div>

                                                <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                             </div>


                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress text-end">


                                             <div class="dropdown  dropdown-click ">

                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                </button>


                                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu--dynamic dropdown-menu">
                                                   <a class="dropdown-item" href="#">Item One</a>
                                                   <a class="dropdown-item" href="#">Item Two</a>
                                                   <a class="dropdown-item" href="#">Item Three</a>

                                                </div>
                                             </div>


                                          </div>
                                       </td>
                                    </tr>


                                    <tr>
                                       <td>
                                          <div class="d-flex">
                                             <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                   <h6>Website Builder</h6>
                                                </a>
                                                <p class="pt-1 d-block mb-0">
                                                   Web Design
                                                </p>
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             26 Dec 2019
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             18 Mar 2020
                                          </div>
                                       </td>
                                       <td>

                                          <ul class="d-flex user-group-people__parent align-content-center">
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm1.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm2.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm3.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm4.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm6.png" alt="author"></a>
                                             </li>
                                             <li class="d-flex align-items-center ms-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                          </ul>


                                       </td>
                                       <td>

                                          <div class="d-inline-block">
                                             <span class="media-badge color-white bg-primary">early</span>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress d-flex align-items-center">

                                             <div class="user-group-progress-bar">

                                                <div class="progress-wrap d-flex align-items-center mb-0">
                                                   <div class="progress">
                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                   </div>


                                                   <span class="progress-percentage">30%</span>


                                                </div>

                                                <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                             </div>


                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress text-end">


                                             <div class="dropdown  dropdown-click ">

                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                </button>


                                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu--dynamic dropdown-menu">
                                                   <a class="dropdown-item" href="#">Item One</a>
                                                   <a class="dropdown-item" href="#">Item Two</a>
                                                   <a class="dropdown-item" href="#">Item Three</a>

                                                </div>
                                             </div>


                                          </div>
                                       </td>
                                    </tr>


                                    <tr>
                                       <td>
                                          <div class="d-flex">
                                             <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                   <h6>Component Library</h6>
                                                </a>
                                                <p class="pt-1 d-block mb-0">
                                                   Web Design
                                                </p>
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             26 Dec 2019
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             18 Mar 2020
                                          </div>
                                       </td>
                                       <td>

                                          <ul class="d-flex user-group-people__parent align-content-center">
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm1.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm2.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm3.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm4.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm6.png" alt="author"></a>
                                             </li>
                                             <li class="d-flex align-items-center ms-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                          </ul>


                                       </td>
                                       <td>

                                          <div class="d-inline-block">
                                             <span class="media-badge color-white bg-danger">on hold</span>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress d-flex align-items-center">

                                             <div class="user-group-progress-bar">

                                                <div class="progress-wrap d-flex align-items-center mb-0">
                                                   <div class="progress">
                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                   </div>


                                                   <span class="progress-percentage">30%</span>


                                                </div>

                                                <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                             </div>


                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress text-end">


                                             <div class="dropdown  dropdown-click ">

                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                </button>


                                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu--dynamic dropdown-menu">
                                                   <a class="dropdown-item" href="#">Item One</a>
                                                   <a class="dropdown-item" href="#">Item Two</a>
                                                   <a class="dropdown-item" href="#">Item Three</a>

                                                </div>
                                             </div>


                                          </div>
                                       </td>
                                    </tr>


                                    <tr>
                                       <td>
                                          <div class="d-flex">
                                             <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                   <h6>Dashboard UI Project</h6>
                                                </a>
                                                <p class="pt-1 d-block mb-0">
                                                   Web Design
                                                </p>
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             26 Dec 2019
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             18 Mar 2020
                                          </div>
                                       </td>
                                       <td>

                                          <ul class="d-flex user-group-people__parent align-content-center">
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm1.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm2.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm3.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm4.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm6.png" alt="author"></a>
                                             </li>
                                             <li class="d-flex align-items-center ms-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                          </ul>


                                       </td>
                                       <td>

                                          <div class="d-inline-block">
                                             <span class="media-badge color-white bg-warning">late</span>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress d-flex align-items-center">

                                             <div class="user-group-progress-bar">

                                                <div class="progress-wrap d-flex align-items-center mb-0">
                                                   <div class="progress">
                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                   </div>


                                                   <span class="progress-percentage">30%</span>


                                                </div>

                                                <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                             </div>


                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress text-end">


                                             <div class="dropdown  dropdown-click ">

                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                </button>


                                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu--dynamic dropdown-menu">
                                                   <a class="dropdown-item" href="#">Item One</a>
                                                   <a class="dropdown-item" href="#">Item Two</a>
                                                   <a class="dropdown-item" href="#">Item Three</a>

                                                </div>
                                             </div>


                                          </div>
                                       </td>
                                    </tr>


                                    <tr>
                                       <td>
                                          <div class="d-flex">
                                             <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                   <h6>Custom Software Development</h6>
                                                </a>
                                                <p class="pt-1 d-block mb-0">
                                                   Web Design
                                                </p>
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             26 Dec 2019
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             18 Mar 2020
                                          </div>
                                       </td>
                                       <td>


                                          <ul class="d-flex user-group-people__parent align-content-center">
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm1.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm2.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm3.png" alt="author"></a>
                                             </li>
                                          </ul>

                                       </td>
                                       <td>

                                          <div class="d-inline-block">
                                             <span class="media-badge color-white bg-success">complete</span>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress d-flex align-items-center">


                                             <div class="media-ui--completed ">
                                                <div class="user-group-progress-bar">

                                                   <div class="progress-wrap d-flex align-items-center mb-0">
                                                      <div class="progress">
                                                         <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                      </div>



                                                      <span class="progress-icon"><img src="img/svg/check.svg" alt="check" class="svg color-success"></span>

                                                   </div>

                                                   <p class="color-light fs-12 mt-1 mb-0">15 / 15 tasks completed</p>
                                                </div>
                                             </div>

                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress text-end">


                                             <div class="dropdown  dropdown-click ">

                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                </button>


                                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu--dynamic dropdown-menu">
                                                   <a class="dropdown-item" href="#">Item One</a>
                                                   <a class="dropdown-item" href="#">Item Two</a>
                                                   <a class="dropdown-item" href="#">Item Three</a>

                                                </div>
                                             </div>


                                          </div>
                                       </td>
                                    </tr>


                                    <tr>
                                       <td>
                                          <div class="d-flex">
                                             <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                   <h6>Application UI Design</h6>
                                                </a>
                                                <p class="pt-1 d-block mb-0">
                                                   Web Design
                                                </p>
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             26 Dec 2019
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             18 Mar 2020
                                          </div>
                                       </td>
                                       <td>

                                          <ul class="d-flex user-group-people__parent align-content-center">
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm1.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm2.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm3.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm4.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm6.png" alt="author"></a>
                                             </li>
                                             <li class="d-flex align-items-center ms-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                          </ul>


                                       </td>
                                       <td>

                                          <div class="d-inline-block">
                                             <span class="media-badge color-white bg-primary">early</span>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress d-flex align-items-center">

                                             <div class="user-group-progress-bar">

                                                <div class="progress-wrap d-flex align-items-center mb-0">
                                                   <div class="progress">
                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                   </div>


                                                   <span class="progress-percentage">30%</span>


                                                </div>

                                                <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                             </div>


                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress text-end">


                                             <div class="dropdown  dropdown-click ">

                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                </button>


                                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu--dynamic dropdown-menu">
                                                   <a class="dropdown-item" href="#">Item One</a>
                                                   <a class="dropdown-item" href="#">Item Two</a>
                                                   <a class="dropdown-item" href="#">Item Three</a>

                                                </div>
                                             </div>


                                          </div>
                                       </td>
                                    </tr>


                                    <tr>
                                       <td>
                                          <div class="d-flex">
                                             <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                   <h6>Website Builder</h6>
                                                </a>
                                                <p class="pt-1 d-block mb-0">
                                                   Web Design
                                                </p>
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             26 Dec 2019
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             18 Mar 2020
                                          </div>
                                       </td>
                                       <td>

                                          <ul class="d-flex user-group-people__parent align-content-center">
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm1.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm2.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm3.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm4.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm6.png" alt="author"></a>
                                             </li>
                                             <li class="d-flex align-items-center ms-1"><span class="fs-12 color-light fw-500"><i class="las la-plus fs-10"></i>5 more</span></li>
                                          </ul>


                                       </td>
                                       <td>

                                          <div class="d-inline-block">
                                             <span class="media-badge color-white bg-primary">early</span>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress d-flex align-items-center">

                                             <div class="user-group-progress-bar">

                                                <div class="progress-wrap d-flex align-items-center mb-0">
                                                   <div class="progress">
                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                   </div>


                                                   <span class="progress-percentage">30%</span>


                                                </div>

                                                <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                             </div>


                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress text-end">


                                             <div class="dropdown  dropdown-click ">

                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                </button>


                                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu--dynamic dropdown-menu">
                                                   <a class="dropdown-item" href="#">Item One</a>
                                                   <a class="dropdown-item" href="#">Item Two</a>
                                                   <a class="dropdown-item" href="#">Item Three</a>

                                                </div>
                                             </div>


                                          </div>
                                       </td>
                                    </tr>


                                    <tr>
                                       <td>
                                          <div class="d-flex">
                                             <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                   <h6>Custom Software Development</h6>
                                                </a>
                                                <p class="pt-1 d-block mb-0">
                                                   Web Design
                                                </p>
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             26 Dec 2019
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             18 Mar 2020
                                          </div>
                                       </td>
                                       <td>


                                          <ul class="d-flex user-group-people__parent align-content-center">
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm1.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm2.png" alt="author"></a>
                                             </li>
                                             <li>
                                                <a href="#"><img class="rounded-circle wh-34" src="img/tm3.png" alt="author"></a>
                                             </li>
                                          </ul>

                                       </td>
                                       <td>

                                          <div class="d-inline-block">
                                             <span class="media-badge color-white bg-secondary">on time</span>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress d-flex align-items-center">

                                             <div class="user-group-progress-bar">

                                                <div class="progress-wrap d-flex align-items-center mb-0">
                                                   <div class="progress">
                                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                   </div>


                                                   <span class="progress-percentage">30%</span>


                                                </div>

                                                <p class="color-light fs-12 mt-1 mb-0">12 / 15 tasks completed</p>
                                             </div>


                                          </div>
                                       </td>
                                       <td>
                                          <div class="project-progress text-end">


                                             <div class="dropdown  dropdown-click ">

                                                <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                </button>


                                                <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu--dynamic dropdown-menu">
                                                   <a class="dropdown-item" href="#">Item One</a>
                                                   <a class="dropdown-item" href="#">Item Two</a>
                                                   <a class="dropdown-item" href="#">Item Three</a>

                                                </div>
                                             </div>


                                          </div>
                                       </td>
                                    </tr>

                                 </tbody>
                              </table><!-- End: .table -->
                           </div>
                        </div><!-- End: .userDatatable -->

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
   
   
   <!-- inject:js-->
   
   <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
   <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
   <script>
      $(document).ready( function () {
         $('#example').DataTable();
      } );
   </script>
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