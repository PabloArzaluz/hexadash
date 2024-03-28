<div class="sidebar sidebar-collapse" id="sidebar">
            <div class="sidebar__menu-group">
               <ul class="sidebar_nav">
                  <li>
                     <a href="changelog.html" <?php if($menu_active == "dashboard") echo ' class="active" '; ?>>
                     <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">Dashboard</span>
                        <span class="badge badge-info-10 menuItem rounded-pill">v1.0</span>
                     </a>
                  </li>
                  <li class="menu-title mt-10">
                     <span>Servicio</span>
                  </li>
                  <li class="has-child <?php if($menu_active == "ordenes-servicio") echo ' open '; ?>">
                     <a href="#" <?php if($menu_active == "ordenes-servicio") echo ' class="active" '; ?>>
                        <span class="nav-icon uil uil-airplay"></span>
                        <span class="menu-text">Ordenes Servicio</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="nueva-orden-servicio.php" <?php if($submenu_active == "nueva-orden") echo ' class="active" '; ?>>Nueva OS</a>
                        </li>
                        <li class="">
                           <a href="read-email.html">Historial</a>
                        </li>
                     </ul>
                  </li>
                  
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-books"></span>
                        <span class="menu-text text-initial">Catalogos</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="products.html">Clientes</a>
                        </li>
                        <li class="">
                           <a href="product-details.html">Equipos</a>
                        </li>
                        
                        
                     </ul>
                  </li>
                  
                  
                  
               </ul>
            </div>
         </div>