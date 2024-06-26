<?php 
   session_start();
   include("include/connect.php");
	include("include/config.php");
	include("include/functions.php");
   $menu_active = "dashboard";
   $submenu_active = "";
?>
<!doctype html>
<html lang="es" dir="ltr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>HexaDash - Dashboard </title>
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

         <div class="demo4">
            <div class="container-fluid">
               <div class="row ">
                  <div class="col-lg-12">

                     <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Dashboard</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Dashboard</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                              </ol>
                           </nav>
                        </div>
                     </div>

                  </div>
                  <div class="col-xxl-4 col-lg-6 mb-25">
                     <div class="card banner-feature banner-feature--5 mb-0">
                        <div class="banner-feature__shape">
                           <img src="img/svg/group3320.svg" alt="img" class="svg">
                        </div>
                        <div class="d-flex justify-content-center">
                           <div class="card-body">
                              <h1 class="banner-feature__heading color-white">Bienvenido <?php echo $_SESSION['nombre_user_hx'] ;?></h1>
                              <p class="banner-feature__para ">Best Seller on the last month.</p>
                              <button class="banner-feature__btn btn color-secondary btn-md px-20 bg-white radius-xs fs-15" type="button">Learn More</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-lg-6 mb-25">

                     <div class="card border-0">
                        <div class="card-header">
                           <h6>Sales Overview</h6>
                           <div class="dropdown dropleft">
                              <a href="#" role="button" id="performance" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                              </a>
                              <div class="dropdown-menu" aria-labelledby="performance">
                                 <a class="dropdown-item" href="#">Action</a>
                                 <a class="dropdown-item" href="#">Another action</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                           </div>
                        </div>
                        <!-- ends: .card-header -->
                        <div class="card-body pt-20 pb-30">
                           <div class="device-pieChart-wrap position-relative">

                              <div class="">
                                 <div class="performance_overview"></div>
                              </div>

                           </div>
                           <div class="session-wrap session-wrap--top--4">
                              <div class="session-single">
                                 <div class="chart-label new">
                                    <span class="label-dot dot-primary"></span>
                                    Target
                                 </div>
                              </div>
                              <div class="session-single">
                                 <div class="chart-label new">
                                    <span class="label-dot dot-info"></span>
                                    In Progress
                                 </div>
                              </div>
                              <div class="session-single">
                                 <div class="chart-label new">
                                    <span class="label-dot dot-warning"></span>
                                    Completed
                                 </div>
                              </div>
                           </div>
                           <!-- ends: .session-wrap -->
                        </div>
                        <!-- ends: .card-body -->
                     </div>

                  </div>
                  <div class="col-xxl-4 col-xl-6 col-lg-12 mb-25">
                     <div class="row">
                        <div class="col-md-6">





                           <div class="overview-content overview-content3 pt-20 pb-20 text-center radius-xl">
                              <div class="d-inline-flex flex-column align-items-center justify-content-center">
                                 <div class="revenue-chart-box__Icon order-bg-opacity-primary me-0">
                                    <i class="uil uil-briefcase-alt"></i>
                                 </div>
                                 <div class="d-flex align-items-start flex-wrap">
                                    <div class="mt-3">
                                       <p class="mb-1 mb-0 color-gray">Total Products </p>
                                       <h2>21K</h2>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                        <div class="col-md-6">





                           <div class="overview-content overview-content3 pt-20 pb-20 text-center radius-xl">
                              <div class="d-inline-flex flex-column align-items-center justify-content-center">
                                 <div class="revenue-chart-box__Icon order-bg-opacity-secondary me-0">
                                    <i class="uil uil-award"></i>
                                 </div>
                                 <div class="d-flex align-items-start flex-wrap">
                                    <div class="mt-3">
                                       <p class="mb-1 mb-0 color-gray">Total Awards</p>
                                       <h2>15K</h2>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                        <div class="col-12 mt-25">
                           <div class="card banner-feature banner-feature--7 border-0 mb-0">
                              <div class="d-flex justify-content-center">
                                 <div class="card-body py-30 px-30">
                                    <div class="banner-feature__shape me-20">
                                       <img src="img/svg/message2.svg" alt="img" class="svg">
                                    </div>
                                    <div class="div">
                                       <h2 class="banner-feature__heading">Subscribe to our newsletter</h2>
                                       <p class="banner-feature__para ">Lorem ipsum dolor sit amet, consetetur</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-8 col-lg-6 mb-25">

                     <div class="card border-0 px-25 pb-25">
                        <div class="card-header px-0 border-0">
                           <h6>Task Lists</h6>
                           <div class="card-extra">
                              <ul class="card-tab-links nav-tabs nav" role="tablist">
                                 <li>
                                    <a class="active" href="#t_selling-today2222" data-bs-toggle="tab" id="t_selling-today2222-tab" role="tab" aria-selected="true">Today</a>
                                 </li>
                                 <li>
                                    <a href="#t_selling-week2222" data-bs-toggle="tab" id="t_selling-week2222-tab" role="tab" aria-selected="true">Week</a>
                                 </li>
                                 <li>
                                    <a href="#t_selling-month3333" data-bs-toggle="tab" id="t_selling-month3333-tab" role="tab" aria-selected="true">Month</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="card-body p-0">
                           <div class="tab-content">
                              <div class="tab-pane fade active show" id="t_selling-today2222" role="tabpanel" aria-labelledby="t_selling-today2222-tab">
                                 <div class="project-task table-responsive">
                                    <table class="table table-borderless">
                                       <tbody>

                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-1" checked>
                                                      <label for="check-grp-planning-1" class="fs-14 color-light">
                                                         Planning for new dashboard wireframe and prototype design
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-2" checked>
                                                      <label for="check-grp-planning-2" class="fs-14 color-light">
                                                         Standup meeting with team
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-3">
                                                      <label for="check-grp-planning-3" class="fs-14 color-light">
                                                         Create images for blog post
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-4">
                                                      <label for="check-grp-planning-4" class="fs-14 color-light">
                                                         Write an article about upcoming theme
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-5">
                                                      <label for="check-grp-planning-5" class="fs-14 color-light">
                                                         Dashboard new feature dark mode design discussion
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="t_selling-week2222" role="tabpanel" aria-labelledby="t_selling-week2222-tab">
                                 <div class="project-task table-responsive">
                                    <table class="table table-borderless">
                                       <tbody>

                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-11" checked>
                                                      <label for="check-grp-planning-11" class="fs-14 color-light">
                                                         Planning for new dashboard wireframe and prototype design
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-12" checked>
                                                      <label for="check-grp-planning-12" class="fs-14 color-light">
                                                         Standup meeting with team
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-13">
                                                      <label for="check-grp-planning-13" class="fs-14 color-light">
                                                         Create images for blog post
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-14">
                                                      <label for="check-grp-planning-14" class="fs-14 color-light">
                                                         Write an article about upcoming theme
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-15">
                                                      <label for="check-grp-planning-15" class="fs-14 color-light">
                                                         Dashboard new feature dark mode design discussion
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="t_selling-month3333" role="tabpanel" aria-labelledby="t_selling-month3333-tab">
                                 <div class="project-task table-responsive">
                                    <table class="table table-borderless">
                                       <tbody>

                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-21" checked>
                                                      <label for="check-grp-planning-21" class="fs-14 color-light">
                                                         Planning for new dashboard wireframe and prototype design
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-22" checked>
                                                      <label for="check-grp-planning-22" class="fs-14 color-light">
                                                         Standup meeting with team
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-23">
                                                      <label for="check-grp-planning-23" class="fs-14 color-light">
                                                         Create images for blog post
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-24">
                                                      <label for="check-grp-planning-24" class="fs-14 color-light">
                                                         Write an article about upcoming theme
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--active-user">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-planning-25">
                                                      <label for="check-grp-planning-25" class="fs-14 color-light">
                                                         Dashboard new feature dark mode design discussion
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <ul class="d-flex align-content-center justify-content-end">
                                                      <li>
                                                         <a href="#" class="edit">
                                                            <i class="uil uil-edit"></i>
                                                         </a>
                                                      </li>
                                                      <li>
                                                         <a href="#" class="cross">
                                                            <i class="uil uil-times"></i>
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="col-xxl-4 col-lg-6 mb-25">

                     <div class="card border-0 px-25 h-100">
                        <div class="card-header px-0 border-0">
                           <h6>Marketing Campaigns</h6>
                           <div class="card-extra">
                              <ul class="card-tab-links nav-tabs nav" role="tablist">
                                 <li>
                                    <a class="active" href="#t_selling-today" data-bs-toggle="tab" id="t_selling-today-tab" role="tab" aria-selected="true">Today</a>
                                 </li>
                                 <li>
                                    <a href="#t_selling-week" data-bs-toggle="tab" id="t_selling-week-tab" role="tab" aria-selected="true">Week</a>
                                 </li>
                                 <li>
                                    <a href="#t_selling-month" data-bs-toggle="tab" id="t_selling-month-tab" role="tab" aria-selected="true">Month</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="card-body p-0">
                           <div class="tab-content">
                              <div class="tab-pane fade active show" id="t_selling-today" role="tabpanel" aria-labelledby="t_selling-today-tab">
                                 <div class="selling-table-wrap selling-table-wrap--2">
                                    <div class="table-responsive">
                                       <table class="table table-borderless">
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid" src="img/browser/microsoft.png" alt="img">
                                                      <span>Microsoft Company</span>
                                                   </div>
                                                </td>
                                                <td>$1045,120</td>
                                                <td>45%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-2">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid" src="img/browser/wordpress.png" alt="img">
                                                      <span>WordPress</span>
                                                   </div>
                                                </td>
                                                <td>$2000,520</td>
                                                <td>25%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-3">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid" src="img/browser/adidas.png" alt="img">
                                                      <span>Adidas Brand</span>
                                                   </div>
                                                </td>
                                                <td>$1520,950</td>
                                                <td>50%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-4">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid " src="img/browser/slack.png" alt="img">
                                                      <span>Slack</span>
                                                   </div>
                                                </td>
                                                <td>$7045,154</td>
                                                <td>25%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-3">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid" src="img/browser/adobe.png" alt="img">
                                                      <span>Adobe CC</span>
                                                   </div>
                                                </td>
                                                <td>$1252,220</td>
                                                <td>50%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-4">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="t_selling-week" role="tabpanel" aria-labelledby="t_selling-week-tab">
                                 <div class="selling-table-wrap selling-table-wrap--2">
                                    <div class="table-responsive">
                                       <table class="table table-borderless">
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid" src="img/browser/microsoft.png" alt="img">
                                                      <span>Microsoft Company</span>
                                                   </div>
                                                </td>
                                                <td>$1045,120</td>
                                                <td>45%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-2">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid" src="img/browser/wordpress.png" alt="img">
                                                      <span>WordPress</span>
                                                   </div>
                                                </td>
                                                <td>$2000,520</td>
                                                <td>25%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-3">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid" src="img/browser/adidas.png" alt="img">
                                                      <span>Adidas Brand</span>
                                                   </div>
                                                </td>
                                                <td>$1520,950</td>
                                                <td>50%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-4">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid " src="img/browser/slack.png" alt="img">
                                                      <span>Slack</span>
                                                   </div>
                                                </td>
                                                <td>$7045,154</td>
                                                <td>25%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-3">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid" src="img/browser/adobe.png" alt="img">
                                                      <span>Adobe CC</span>
                                                   </div>
                                                </td>
                                                <td>1561</td>
                                                <td>50%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-4">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="t_selling-month" role="tabpanel" aria-labelledby="t_selling-month-tab">
                                 <div class="selling-table-wrap selling-table-wrap--2">
                                    <div class="table-responsive">
                                       <table class="table table-borderless">
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid" src="img/browser/microsoft.png" alt="img">
                                                      <span>Microsoft Company</span>
                                                   </div>
                                                </td>
                                                <td>$1045,120</td>
                                                <td>45%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-2">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid" src="img/browser/wordpress.png" alt="img">
                                                      <span>WordPress</span>
                                                   </div>
                                                </td>
                                                <td>$2000,520</td>
                                                <td>25%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-3">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid" src="img/browser/adidas.png" alt="img">
                                                      <span>Adidas Brand</span>
                                                   </div>
                                                </td>
                                                <td>$1520,950</td>
                                                <td>50%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-4">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid " src="img/browser/slack.png" alt="img">
                                                      <span>Slack</span>
                                                   </div>
                                                </td>
                                                <td>$7045,154</td>
                                                <td>25%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-3">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img selling-product-img--2 d-flex align-items-center">
                                                      <img class="radius-xs img-fluid" src="img/browser/adobe.png" alt="img">
                                                      <span>Adobe CC</span>
                                                   </div>
                                                </td>
                                                <td>1561</td>
                                                <td>50%</td>
                                                <td class="d-flex justify-content-center">
                                                   <div class="product-pie-wrapper product-pie-wrapper--45 product-pie-wrapper--style-4">
                                                      <div class="product-pie-wrapper__pie">
                                                         <div class="product-pie-wrapper__left-side product-pie-wrapper__half-circle">
                                                         </div>
                                                         <div class="product-pie-wrapper__right-side product-pie-wrapper__half-circle">
                                                         </div>
                                                      </div>
                                                      <div class="product-pie-wrapper__shadow"></div>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="col-xxl-4 col-lg-6 mb-25">

                     <div class="card border-0 h-100 ps-25 pe-10 pb-10">
                        <div class="card-header px-0 border-0">
                           <h6>Todo</h6>
                           <div class="card-extra">
                              <ul class="card-tab-links nav-tabs nav" role="tablist">
                                 <li>
                                    <a class="active" href="#t_selling-today22222" data-bs-toggle="tab" id="t_selling-today22222-tab" role="tab" aria-selected="true">Today</a>
                                 </li>
                                 <li>
                                    <a href="#t_selling-week22222" data-bs-toggle="tab" id="t_selling-week22222-tab" role="tab" aria-selected="true">Week</a>
                                 </li>
                                 <li>
                                    <a href="#t_selling-month33333" data-bs-toggle="tab" id="t_selling-month33333-tab" role="tab" aria-selected="true">Month</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="card-body p-0">
                           <div class="tab-content">
                              <div class="tab-pane fade active show" id="t_selling-today22222" role="tabpanel" aria-labelledby="t_selling-today22222-tab">
                                 <div class="project-task project-task--todo table-responsive table-responsive--dynamic">
                                    <table class="table table-borderless">
                                       <tbody>

                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-6" checked>
                                                      <label for="check-grp-6" class="fs-14 color-light">
                                                         Dashboard Design Structure
                                                         <span>10:30 AM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-7" checked>
                                                      <label for="check-grp-7" class="fs-14 color-light">
                                                         Meeting with Team Members
                                                         <span>11:30 AM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-8">
                                                      <label for="check-grp-8" class="fs-14 color-light">
                                                         Dark Mode Design
                                                         <span>12:00 PM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-9">
                                                      <label for="check-grp-9" class="fs-14 color-light">
                                                         Support Ticket
                                                         <span>02:00 PM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-10">
                                                      <label for="check-grp-10" class="fs-14 color-light">
                                                         Meeting with Design Team
                                                         <span>03:00 PM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="t_selling-week22222" role="tabpanel" aria-labelledby="t_selling-week22222-tab">
                                 <div class="project-task project-task--todo table-responsive table-responsive--dynamic">
                                    <table class="table table-borderless">
                                       <tbody>

                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-11" checked>
                                                      <label for="check-grp-11" class="fs-14 color-light">
                                                         Dashboard Design Structure
                                                         <span>10:30 AM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-12" checked>
                                                      <label for="check-grp-12" class="fs-14 color-light">
                                                         Meeting with Team Members
                                                         <span>11:30 AM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-13">
                                                      <label for="check-grp-13" class="fs-14 color-light">
                                                         Dark Mode Design
                                                         <span>12:00 PM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-14">
                                                      <label for="check-grp-14" class="fs-14 color-light">
                                                         Support Ticket
                                                         <span>02:00 PM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-15">
                                                      <label for="check-grp-15" class="fs-14 color-light">
                                                         Meeting with Design Team
                                                         <span>03:00 PM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="t_selling-month33333" role="tabpanel" aria-labelledby="t_selling-month33333-tab">
                                 <div class="project-task project-task--todo table-responsive table-responsive--dynamic">
                                    <table class="table table-borderless">
                                       <tbody>

                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-16" checked>
                                                      <label for="check-grp-16" class="fs-14 color-light">
                                                         Dashboard Design Structure
                                                         <span>10:30 AM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-17" checked>
                                                      <label for="check-grp-17" class="fs-14 color-light">
                                                         Meeting with Team Members
                                                         <span>11:30 AM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-18">
                                                      <label for="check-grp-18" class="fs-14 color-light">
                                                         Dark Mode Design
                                                         <span>12:00 PM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-19">
                                                      <label for="check-grp-19" class="fs-14 color-light">
                                                         Support Ticket
                                                         <span>02:00 PM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>


                                          <tr class="project-task-list project-task-list--todo">
                                             <td>
                                                <div class="checkbox-group d-flex">
                                                   <div class="checkbox-theme-default custom-checkbox custom-checkbox--success checkbox-group__single d-flex">
                                                      <input class="checkbox" type="checkbox" id="check-grp-20">
                                                      <label for="check-grp-20" class="fs-14 color-light">
                                                         Meeting with Design Team
                                                         <span>03:00 PM</span>
                                                      </label>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="project-task-list__right">
                                                   <div class="dropdown dropleft">
                                                      <a href="#" class="btn-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                         <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                      </a>
                                                      <div class="dropdown-menu dropdown-menu--dynamic">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another action</a>
                                                         <a class="dropdown-item" href="#">Something else here</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="col-xxl-4 col-lg-6 mb-25">

                     <div class="card border-0">
                        <div class="card-header border-0">
                           <h6>Team Members </h6>
                           <div class="card-extra">
                              <div class="dropdown dropleft">
                                 <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                 </a>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- ends: .card-header -->
                        <div class="card-body pb-30 pt-1">
                           <div class="team-members">
                              <ul>
                                 <li>
                                    <div class="team-members__left">
                                       <img src="img/team01.png" alt="">
                                       <div class="team-members__title">
                                          <h6>Shane Watson</h6>
                                          <div class="team-members__title--online"><span class="badge-dot dot-success"></span>Online
                                          </div>
                                       </div>
                                    </div>
                                    <div class="team-member__right">
                                       <div class="team-member__add">
                                          <button type="button">add</button>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="team-members__left">
                                       <img src="img/team02.png" alt="">
                                       <div class="team-members__title">
                                          <h6>Shane Watson</h6>
                                          <div class="team-members__title--online"><span class="badge-dot dot-success"></span>Online
                                          </div>
                                       </div>
                                    </div>
                                    <div class="team-member__right">
                                       <div class="team-member__add">
                                          <button type="button">add</button>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="team-members__left">
                                       <img src="img/team03.png" alt="">
                                       <div class="team-members__title">
                                          <h6>Shane Watson</h6>
                                          <div class="team-members__title--online"><span class="badge-dot dot-success"></span>Online
                                          </div>
                                       </div>
                                    </div>
                                    <div class="team-member__right">
                                       <div class="team-member__add">
                                          <button type="button">add</button>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="team-members__left">
                                       <img src="img/team04.png" alt="">
                                       <div class="team-members__title">
                                          <h6>Shane Watson</h6>
                                          <div class="team-members__title--online"><span class="badge-dot dot-success"></span>Online
                                          </div>
                                       </div>
                                    </div>
                                    <div class="team-member__right">
                                       <div class="team-member__add">
                                          <button type="button">add</button>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="team-members__left">
                                       <img src="img/team1.png" alt="">
                                       <div class="team-members__title">
                                          <h6>Shane Watson</h6>
                                          <div class="team-members__title--online"><span class="badge-dot dot-success"></span>Online
                                          </div>
                                       </div>
                                    </div>
                                    <div class="team-member__right">
                                       <div class="team-member__add">
                                          <button type="button">add</button>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <!-- ends: .card-body -->
                     </div>

                  </div>
                  <div class="col-xxl-4 col-xl-6 mb-25">

                     <div class="feature-profile h-100">
                        <div class="feature-profile__bg">
                           <img src="img/profile_bg.png" alt="">
                        </div>
                        <div class="feature-profile_content">
                           <img src="img/profile_bg_2.png" alt="">
                           <h6>Robert Clinton</h6>
                           <p>Best Seller of the last month</p>
                           <ul class="profile-feature__social">
                              <li>
                                 <a href="#" class="bg-facebook">
                                    <i class="lab la-facebook-f"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="bg-twitter">
                                    <i class="lab la-twitter"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="bg-primary">
                                    <i class="lab la-dribbble"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>

                  </div>
                  <div class="col-xxl-4 mb-25">

                     <div class="card border-0">
                        <div class="card-header border-0">
                           <h6>chat</h6>
                           <div class="card-extra">
                              <div class="dropdown dropleft">
                                 <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                 </a>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- ends: .card-header -->
                        <div class="card-body p-0">
                           <div class="chat mini-chat">
                              <div class="chat-body bg-white radius-xl">
                                 <div class="chat-box chat-box--small l-lg-10 pe-lg-20 pt-10 px-sm-25">
                                    <!-- Start: Incomming -->
                                    <div class="flex-1 incoming-chat">
                                       <div class="chat-text-box">
                                          <div class="media ">
                                             <div class="chat-text-box__photo ">
                                                <img src="img/author/1.jpg" class="align-self-start me-15 wh-46" alt="img">
                                             </div>
                                             <div class="media-body">
                                                <div class="chat-text-box__content">
                                                   <div class="chat-text-box__title d-flex align-items-center">
                                                      <h6 class="fs-14">Domnic Harys</h6>
                                                      <span class="chat-text-box__time fs-12 color-light fw-400 ms-25">8:30
                                                         PM</span>
                                                   </div>
                                                   <div class="d-flex align-items-center mt-10">
                                                      <div class="chat-text-box__subtitle p-20 bg-secondary">
                                                         <p class="color-white">Jam nonumy eirmod tsadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- End: Incomming -->
                                    <!-- Start: Outgoing -->
                                    <div class="flex-1 justify-content-end d-flex outgoing-chat mt-15">
                                       <div class="chat-text-box">
                                          <div class="media ">
                                             <div class="media-body">
                                                <div class="chat-text-box__content">
                                                   <div class="chat-text-box__title d-flex align-items-center justify-content-end">
                                                      <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                         PM</span>
                                                   </div>
                                                   <div class="d-flex align-items-center justify-content-end">
                                                      <div class="chat-text-box__subtitle p-20 bg-deep">
                                                         <p class="color-gray">Jam nonumy eirmod tsadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et </p>
                                                      </div>

                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- End: Outgoing  -->
                                    <!-- Start: Incomming -->
                                    <div class="flex-1 incoming-chat mt-15">
                                       <div class="chat-text-box">
                                          <div class="media ">
                                             <div class="chat-text-box__photo ">
                                                <img src="img/author/1.jpg" class="align-self-start me-15 wh-46" alt="img">
                                             </div>
                                             <div class="media-body">
                                                <div class="chat-text-box__content">
                                                   <div class="chat-text-box__title d-flex align-items-center">
                                                      <h6 class="fs-14">Domnic Harys</h6>
                                                      <span class="chat-text-box__time fs-12 color-light fw-400 ms-2">8:30
                                                         PM</span>
                                                   </div>
                                                   <div class="d-flex align-items-center mt-10">
                                                      <div class="chat-text-box__subtitle p-20 bg-secondary">
                                                         <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                            labore
                                                            et dolore magna.</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- End: Incomming -->
                                    <!-- Start: Outgoing -->
                                    <div class="flex-1 justify-content-end d-flex outgoing-chat">
                                       <div class="chat-text-box">
                                          <div class="media ">
                                             <div class="media-body">
                                                <div class="chat-text-box__content">
                                                   <div class="chat-text-box__title d-flex align-items-center justify-content-end mt-10">
                                                      <span class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                         PM</span>
                                                   </div>
                                                   <div class="d-flex align-items-center justify-content-end">
                                                      <div class="chat-text-box__subtitle p-20 bg-deep">
                                                         <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                            labore et
                                                            dolore magna.</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- End: Outgoing  -->
                                    <!-- Start: Incomming -->
                                    <div class="flex-1 incoming-chat mt-30">
                                       <div class="chat-text-box">
                                          <div class="media ">
                                             <div class="chat-text-box__photo ">
                                                <img src="img/author/1.jpg" class="align-self-start me-15 wh-46" alt="img">
                                             </div>
                                             <div class="media-body">
                                                <div class="chat-text-box__content">
                                                   <div class="d-flex align-items-center ">
                                                      <div class="chat-text-box__subtitle typing bg-lighters pe-30">
                                                         <p class="color-light text-capitalize">typing...</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- End: Incomming -->
                                 </div>
                                 <div class="chat-footer ps-25 pe-15 pb-30 pt-20">
                                    <div class="chat-type-text">
                                       <div class="pt-0 outline-0 pb-0 pe-0 ps-0 rounded-0 position-relative d-flex align-items-center" tabindex="-1">
                                          <div class="d-flex justify-content-between align-items-center w-100 flex-wrap">
                                             <div class="bg-lighters flex-1 d-flex align-items-center chat-type-text__write ms-0">
                                                <a href="#">
                                                   <img class="svg" src="img/svg/smile.svg" alt="smile">
                                                </a>
                                                <input class="form-control border-0 bg-transparent box-shadow-none" placeholder="Type your message...">

                                             </div>
                                             <div class="chat-type-text__btn">
                                                <button type="button" class="border-0 bg-secondary wh-50 p-10 rounded-circle color-svgDF-white">
                                                   <img class="svg" src="img/svg/send.svg" alt="send">
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div><!-- ends: .chat-->
                        </div>
                        <!-- ends: .card-body -->
                     </div>

                  </div>
                  <div class="col-xxl-8 mb-25">
                     <div class="row">
                        <div class="col-xxl-6 col-md-6 mb-25">

                           <div class="card border-0 px-25 h-100">
                              <div class="card-header px-0 border-0">
                                 <h6>Social Media Traffic</h6>
                                 <div class="card-extra">
                                    <div class="dropdown dropleft">
                                       <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                       </a>
                                       <div class="dropdown-menu">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-body p-0 pb-30">
                                 <div class="selling-table-wrap selling-table-wrap--source selling-table-wrap--traffic">
                                    <div class="table-responsive">
                                       <table class="table table--default table-borderless">
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <span>facebook</span>
                                                   </div>
                                                </td>
                                                <td>38,536</td>
                                                <td>
                                                   <div class="d-flex align-center justify-content-end">
                                                      <div class="progress-wrap mb-0">
                                                         <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <span>Instragram</span>
                                                   </div>
                                                </td>
                                                <td>20,573</td>
                                                <td>
                                                   <div class="d-flex align-center justify-content-end">
                                                      <div class="progress-wrap mb-0">
                                                         <div class="progress">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>

                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <span>WhatsApp</span>
                                                   </div>
                                                </td>
                                                <td>17,457</td>
                                                <td>
                                                   <div class="d-flex align-center justify-content-end">
                                                      <div class="progress-wrap mb-0">
                                                         <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>

                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <span>Twitter</span>
                                                   </div>
                                                </td>
                                                <td>15,354</td>
                                                <td>
                                                   <div class="d-flex align-center justify-content-end">
                                                      <div class="progress-wrap mb-0">
                                                         <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>

                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <span>YouTube</span>
                                                   </div>
                                                </td>
                                                <td>12,354</td>
                                                <td>
                                                   <div class="d-flex align-center justify-content-end">
                                                      <div class="progress-wrap mb-0">
                                                         <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>

                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="selling-product-img d-flex align-items-center">
                                                      <span>LinkedIn</span>
                                                   </div>
                                                </td>
                                                <td>12,354</td>
                                                <td>
                                                   <div class="d-flex align-center justify-content-end">
                                                      <div class="progress-wrap mb-0">
                                                         <div class="progress">
                                                            <div class="progress-bar bg-dark" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>

                                                         </div>
                                                      </div>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                        <div class="col-xxl-6 col-md-6 mb-25">

                           <div class="card border-0 px-25">
                              <div class="card-header px-0 border-0">
                                 <h6>Location</h6>
                                 <div class="card-extra">
                                    <div class="dropdown dropleft">
                                       <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                       </a>
                                       <div class="dropdown-menu">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-body p-0 pt-1 pb-20">
                                 <div class="google-map-iframe">
                                    <iframe height="257" id="gmap_canvas" src="https://maps.google.com/maps?q=T%20W%20Smith%20Corporation&t=&z=17&ie=UTF8&iwloc=&output=embed">
                                    </iframe>
                                 </div>
                              </div>
                           </div>

                        </div>
                        <div class="col-xxl-12 mb-25">

                           <div class="card border-0 px-25">
                              <div class="card-header px-0 border-0">
                                 <h6>Recent Seller</h6>
                                 <div class="card-extra">
                                    <ul class="card-tab-links nav-tabs nav" role="tablist">
                                       <li>
                                          <a class="active" href="#t_selling-today222" data-bs-toggle="tab" id="t_selling-today222-tab" role="tab" aria-selected="true">Today</a>
                                       </li>
                                       <li>
                                          <a href="#t_selling-week222" data-bs-toggle="tab" id="t_selling-week222-tab" role="tab" aria-selected="true">Week</a>
                                       </li>
                                       <li>
                                          <a href="#t_selling-month333" data-bs-toggle="tab" id="t_selling-month333-tab" role="tab" aria-selected="true">Month</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="card-body p-0 mt-n10">
                                 <div class="tab-content">
                                    <div class="tab-pane fade active show" id="t_selling-today222" role="tabpanel" aria-labelledby="t_selling-today222-tab">
                                       <div class="selling-table-wrap selling-table-wrap--source">
                                          <div class="table-responsive">
                                             <table class="table table--default table-borderless">
                                                <tbody>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-primary align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-1.png" alt="img">
                                                            </div>
                                                            <span>Robert Clinton</span>
                                                         </div>
                                                      </td>
                                                      <td>Samsung</td>
                                                      <td>Smart Phone</td>
                                                      <td>
                                                         $38,536
                                                      </td>
                                                      <td>Done</td>
                                                   </tr>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-primary align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-2.png" alt="img">
                                                            </div>
                                                            <span>Michael Johnson </span>
                                                         </div>
                                                      </td>
                                                      <td>Asus</td>
                                                      <td>Laptop</td>
                                                      <td>
                                                         $20,573
                                                      </td>
                                                      <td>Done</td>
                                                   </tr>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-secondary align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-3.png" alt="img">
                                                            </div>
                                                            <span>Daniel White</span>
                                                         </div>
                                                      </td>
                                                      <td>Google</td>
                                                      <td>Watch</td>
                                                      <td>
                                                         $17,457
                                                      </td>
                                                      <td>Pending</td>
                                                   </tr>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-success align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-4.png" alt="img">
                                                            </div>
                                                            <span>Chris Barin </span>
                                                         </div>
                                                      </td>
                                                      <td>Apple</td>
                                                      <td>Computer</td>
                                                      <td>
                                                         $15,354
                                                      </td>
                                                      <td>Done</td>
                                                   </tr>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-info align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-5.png" alt="img">
                                                            </div>
                                                            <span>Daniel Pink</span>
                                                         </div>
                                                      </td>
                                                      <td>Panasonic</td>
                                                      <td>Sunglass</td>
                                                      <td>
                                                         $12,354
                                                      </td>
                                                      <td>Done</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="t_selling-week222" role="tabpanel" aria-labelledby="t_selling-week222-tab">
                                       <div class="selling-table-wrap selling-table-wrap--source">
                                          <div class="table-responsive">
                                             <table class="table table--default table-borderless">
                                                <tbody>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-primary align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-1.png" alt="img">
                                                            </div>
                                                            <span>Robert Clinton</span>
                                                         </div>
                                                      </td>
                                                      <td>Samsung</td>
                                                      <td>Smart Phone</td>
                                                      <td>
                                                         $38,536
                                                      </td>
                                                      <td>Done</td>
                                                   </tr>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-primary align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-2.png" alt="img">
                                                            </div>
                                                            <span>Michael Johnson </span>
                                                         </div>
                                                      </td>
                                                      <td>Asus</td>
                                                      <td>Laptop</td>
                                                      <td>
                                                         $20,573
                                                      </td>
                                                      <td>Done</td>
                                                   </tr>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-secondary align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-3.png" alt="img">
                                                            </div>
                                                            <span>Daniel White</span>
                                                         </div>
                                                      </td>
                                                      <td>Google</td>
                                                      <td>Watch</td>
                                                      <td>
                                                         $17,457
                                                      </td>
                                                      <td>Pending</td>
                                                   </tr>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-success align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-4.png" alt="img">
                                                            </div>
                                                            <span>Chris Barin </span>
                                                         </div>
                                                      </td>
                                                      <td>Apple</td>
                                                      <td>Computer</td>
                                                      <td>
                                                         $15,354
                                                      </td>
                                                      <td>Done</td>
                                                   </tr>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-info align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-5.png" alt="img">
                                                            </div>
                                                            <span>Daniel Pink</span>
                                                         </div>
                                                      </td>
                                                      <td>Panasonic</td>
                                                      <td>Sunglass</td>
                                                      <td>
                                                         $12,354
                                                      </td>
                                                      <td>Done</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="t_selling-month333" role="tabpanel" aria-labelledby="t_selling-month333-tab">
                                       <div class="selling-table-wrap selling-table-wrap--source">
                                          <div class="table-responsive">
                                             <table class="table table--default table-borderless">
                                                <tbody>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-primary align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-1.png" alt="img">
                                                            </div>
                                                            <span>Robert Clinton</span>
                                                         </div>
                                                      </td>
                                                      <td>Samsung</td>
                                                      <td>Smart Phone</td>
                                                      <td>
                                                         $38,536
                                                      </td>
                                                      <td>Done</td>
                                                   </tr>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-primary align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-2.png" alt="img">
                                                            </div>
                                                            <span>Michael Johnson </span>
                                                         </div>
                                                      </td>
                                                      <td>Asus</td>
                                                      <td>Laptop</td>
                                                      <td>
                                                         $20,573
                                                      </td>
                                                      <td>Done</td>
                                                   </tr>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-secondary align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-3.png" alt="img">
                                                            </div>
                                                            <span>Daniel White</span>
                                                         </div>
                                                      </td>
                                                      <td>Google</td>
                                                      <td>Watch</td>
                                                      <td>
                                                         $17,457
                                                      </td>
                                                      <td>Pending</td>
                                                   </tr>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-success align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-4.png" alt="img">
                                                            </div>
                                                            <span>Chris Barin </span>
                                                         </div>
                                                      </td>
                                                      <td>Apple</td>
                                                      <td>Computer</td>
                                                      <td>
                                                         $15,354
                                                      </td>
                                                      <td>Done</td>
                                                   </tr>
                                                   <tr>
                                                      <td>
                                                         <div class="selling-product-img d-flex align-items-center">
                                                            <div class="selling-product-img-wrapper order-bg-opacity-info align-items-end">
                                                               <img class=" img-fluid" src="img/author/robert-5.png" alt="img">
                                                            </div>
                                                            <span>Daniel Pink</span>
                                                         </div>
                                                      </td>
                                                      <td>Panasonic</td>
                                                      <td>Sunglass</td>
                                                      <td>
                                                         $12,354
                                                      </td>
                                                      <td>Done</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <!-- ends: .row -->
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